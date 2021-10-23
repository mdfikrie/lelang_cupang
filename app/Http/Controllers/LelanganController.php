<?php

namespace App\Http\Controllers;

use App\Exports\HistoryExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\Lelangan;
use App\Models\Keranjang;
use App\Models\Bid;
use App\Models\Chat;
use App\Models\History;
use PDF;

class LelanganController extends Controller
{
    public function index()
    {
        $lelang = Lelangan::where('user_id', auth()->user()->id)->latest()->get();
        return view('page.user.lelangan',compact('lelang'));
    }
    public function create()
    {
        return view('page.user.create-lelang');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'judul' => 'required',
            'tanggal'=>'required',
            'jam' => 'required',
        ]);

        $imgName = $request->gambar->getClientOriginalName().'-'.time().'.'.$request->gambar->extension(); 
        $request->gambar->move(public_path('gambar'),$imgName);
        
        Lelangan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imgName,
            'tgl_close' => $request->tanggal,
            'jam_close' => $request->jam,
            'is_active' => 1,
            'user_id' => Auth()->user()->id,
        ]);

        return redirect('/lelangan')->with('pesan','Data berhasil ditambahkan!');
        
    }
    public function delete($id)
    {
        $lelangan = Lelangan::find($id);
        $gambar = public_path('gambar/').$lelangan->gambar;
        if(file_exists($gambar)){
            @unlink($gambar);
        }
        $lelangan->delete();
        return redirect('/lelangan');
    }
    public function close(Request $request){
        $lelangan = Lelangan::find($request->id);
        $bid = Bid::where('lelangan_id',$request->id)->orderBy('nominal','desc')->first();
        
        if($lelangan->user->username == auth()->user()->username){
            $lelangan->is_active = 0;
            $lelangan->save();
            if($bid !== null){

                \Mail::raw('Selamat anda memenangkan lelangan '.$lelangan->user->username.' dengan bid Rp.'. $bid->nominal,function($message) use($bid,$lelangan){
                    $message->to($bid->user->email, $bid->user->username);
                    $message->subject('Selamat anda memenangkan lelang!');
                    $message->from($lelangan->user->email, $lelangan->user->username);
                });

                Keranjang::create([
                    'judul' => $lelangan->judul,
                    'pelelang' => $lelangan->user->username,
                    'telp_pelelang' => $lelangan->user->telp,
                    'nominal' => $bid->nominal,
                    'user_id' => $bid->user->id,
                ]);
                // untuk pelelang
                History::create([
                    'judul' => $lelangan->judul,
                    'pemenang' => $bid->user->username,
                    'telp_pemenang' => $bid->user->telp,
                    'nominal' => $bid->nominal,
                    'user_id' => $lelangan->user->id,
                ]);
                Chat::create([
                    'user_id' => $lelangan->user->id,
                    'penerima_id' => $bid->user->id,
                    'text' => "Selamat anda memenangkan lelangan saya dengan nominal Rp.".$bid->nominal.", silahkan cek keranjang anda!",
                    'is_seen' => false,
                ]);
                
                return redirect('/lelangan');
            }else{
                // pelelang
                History::create([
                    'judul' => $lelangan->judul,
                    'user_id' => $lelangan->user->id,
                ]);
                return redirect('/lelangan');
            }
        }
        return redirect('/lelangan');
    }
    public function open($id){
        $lelangan = Lelangan::find($id);
        if($lelangan->user->username == auth()->user()->username){
            $lelangan->is_active = 1;
            $lelangan->save();
            Keranjang::where('lelangan_id',$id)->delete();
            return redirect('/lelangan');
        }
        return redirect('/lelangan');
    }
    public function edit($id){
        $lelangan = Lelangan::find($id);
        if($lelangan->user->username == auth()->user()->username){
            // dd($lelangan);
            if($lelangan->is_active == 1){
                return view('page.user.edit-lelangan',compact('lelangan'));
            }
            return redirect('/lelangan');
        }
        return redirect('/lelangan');
    }
    public function update(Request $request){
        $request->validate([
            'judul' => 'required',
            'tanggal'=>'required',
            'jam' => 'required',
            'deskripsi' =>'required',
        ]);
        // dd($request->all());
        if($request->gambar){
            $imgGambar = $request->gambar->getClientOriginalName().'-'.time().'.'.$request->gambar->extension();
            $request->gambar->move('gambar/galery',$imgGambar);
        }

        $lelangan = Lelangan::find($request->id);
        $lelangan->judul = $request->judul;
        $lelangan->tgl_close = $request->tanggal;
        $lelangan->tgl_close = $request->jam;
        if($request->gambar){
            $gambar = public_path('gambar/').$lelangan->gambar;
                if(file_exists($gambar)){
                    @unlink($gambar);
                }
            $lelangan->gambar = $imgGambar;
        }
        $lelangan->deskripsi = $request->deskripsi;
        $lelangan->save();
        return redirect('/lelangan');

    }
    public function data_close(){
        // $lelangans = Keranjang::where('id_pelelang',auth()->user()->id)->latest()->get();
        $lelangans = History::where('user_id',auth()->user()->id)->latest()->get();
        return view('page.user.lelangan-close',compact('lelangans'));
    }

    public function export_excel() 
    {
        return Excel::download(new HistoryExport, 'History-lelangan.xlsx');
    }
    public function export_pdf()
    {
        $history = History::where('user_id',auth()->user()->id)->get();
        $total = History::where('user_id',auth()->user()->id)->sum('nominal');
        $pdf = PDF::loadView('page.user.pdf.export-lelangan',compact('history','total'));
        return $pdf->download('History-lelangan.pdf');
    }
}
