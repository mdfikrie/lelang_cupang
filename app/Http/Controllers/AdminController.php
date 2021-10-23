<?php

namespace App\Http\Controllers;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use App\Models\Lelangan;
use App\Models\Galery;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use PDF;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::all();
        $lelangan = Lelangan::all();
        $galery = Galery::all();
        return view('page.admin.dashboard',compact('user','lelangan','galery'));
    }
    public function data_user(){
        $user = User::where('role','user')->get();
        return view('page.admin.data-user',compact('user'));
    }

    public function delete_user($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/data-user');
    }
    public function info_user(Request $request){
        $user = User::find($request->id);
        return view('page.admin.info-user',compact('user'));
    }

    public function update(Request $request){
        if($request->pass1){
            $request->validate([
                
                'username' => 'required',
                'telp' => 'required|min:10|numeric',
                'kota' => 'required',
                'alamat' => 'required',
                'pass1' => 'min:8',
                'pass2' => 'same:pass1',
            ],[
                'same' => 'Password tidak sama!',
                'min' => 'No. telp minimal 10 character!',
                'numeric' => 'No. telp harus berisi number!',
               
            ]);
        }else{
            $request->validate([
                
                'username' => 'required',
                'telp' => 'required|min:10|numeric',
                'kota' => 'required',
                'alamat' => 'required',
            ],[
                'min' => 'No. telp minimal 10 character!',
                'numeric' => 'No. telp harus berisi number!',
            ]);
        }

        if($request->gambar){
            $imgName = $request->gambar->getClientOriginalName().'-'.time().'.'.$request->gambar->extension(); 
            $request->gambar->move(public_path('gambar/profile'),$imgName);
        }
        
        $user = User::find($request->id);
            $user->username = $request->username;
            $user->telp = $request->telp;
            $user->kota = $request->kota;
            $user->alamat = $request->alamat;
            $user->is_active = $request->is_active;
            if($request->pass1){
                $user->password = bcrypt($request->pass1);
            }
            if($request->gambar){
                $gambar = public_path('gambar/profile/').$user->gambar;
                if(file_exists($gambar)){
                    @unlink($gambar);
                }
                $user->gambar = $imgName;
            }
        $user->save();
        return redirect('/data-user')->with('pesan','Data berhasil dirubah!');
    }

    public function data_galery(){
        $galery = Galery::all();
        return view('page.admin.data-galery',compact('galery'));
    }
    public function create_galery(){
        return view('page.admin.create-galery');
    }
    public function galery_store(Request $request){
        $request->validate([
            'judul' => 'required',
            'deskripsi'=>'required',
            'gambar' => 'required',
        ]);

        $imgGambar = $request->gambar->getClientOriginalName().'-'.time().'.'.$request->gambar->extension();
        $request->gambar->move('gambar/galery',$imgGambar);

        Galery::create([
            'nama' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imgGambar,
        ]);

        return redirect('/data-galery');
    }
    public function edit_galery(Request $request){
        $galery = Galery::find($request->id);
        // dd($galery);
        return view('page.admin.edit-galery',compact('galery'));
    }
    public function update_galery(Request $request){
        // dd($request->all());
        $request->validate([
            'judul' => 'required',
            'deskripsi'=>'required',
        ]);

        if($request->gambar){
            $imgGambar = $request->gambar->getClientOriginalName().'-'.time().'.'.$request->gambar->extension();
            $request->gambar->move('gambar/galery',$imgGambar);
        }

        $galery = Galery::find($request->id);
        $galery->nama = $request->judul;
        $galery->deskripsi = $request->deskripsi;
        if($request->gambar){
            $gambar = public_path('gambar/galery/').$galery->gambar;
                if(file_exists($gambar)){
                    @unlink($gambar);
                }
            $galery->gambar = $imgGambar;
        }
        $galery->save();
        return redirect('/data-galery');
    }
    public function delete_galery($id){
        $galery = Galery::find($id);
        $gambar = public_path('gambar/galery/').$galery->gambar;
        if(file_exists($gambar)){
            @unlink($gambar);
        }
        $galery->delete();
        return redirect('/data-galery');
    }
    public function lelang(){
        $lelang = Lelangan::all();
        return view('page.admin.lelang',compact('lelang'));
    }

    public function pengaduan(){
        $pengaduan = Pengaduan::all();
        return view('page.admin.pengaduan',compact('pengaduan'));
    }

    public function hapus_pengaduan($id){
        $pengaduan = Pengaduan::find($id);
        // dd($pengaduan);
        $pengaduan->delete();
        return redirect('/pesan-pengaduan')->with('pesan','Data berhasil dihapus!');
    }

    public function export_user_excel(){
        return Excel::download(new UserExport, 'data-user.xlsx');
    }

    public function export_user_pdf(){
        $user = User::where('role','user')->get();
        $pdf = PDF::loadView('page.admin.pdf.export-user',compact('user'));
        return $pdf->download('Data-user.pdf');
    }
    
}
