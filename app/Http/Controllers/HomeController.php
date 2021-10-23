<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lelangan;
use App\Models\Bid;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('keyword')){
            $lelangs = Lelangan::where('judul','LIKE','%'.$request->keyword.'%')->paginate(15);
            return view('page.user.beranda',compact('lelangs'));
        }else{
            $lelangs = Lelangan::latest()->paginate(15);
            return view('page.user.beranda',compact('lelangs'));
        }
    } 
    
    public function search(Request $request)
    {
        $lelangs = Lelangan::where('judul',$request->keyword)->paginate(10);
        return view('page.user.beranda',compact('lelangs'));
    }
    public function info(Request $request)
    {
        $lelangs = Lelangan::where('id',$request->id)->first();
        // dd($lelangs);
        $bids = Bid::where('lelangan_id',$request->id)->orderBy('nominal','desc')->limit(5)->get();
        
        return view('page.user.info-lelang',compact('lelangs','bids'));
    }

    public function bid(Request $request)
    {
        
        if(Bid::bid($request->id_lelangan, $request->nominal)){
            return redirect()->back()->with('error','Nominal sudah tersedia!');
        }
        // if(Bid::orderBy('nominal','desc')->limit(1) > $request->nominal){
        //     return redirect()->back()->with('error','Nominal terlalu kecil!');
        // }
        Bid::create([
            'lelangan_id'=>$request->id_lelangan,
            'nominal' => $request->nominal,
            'user_id'=>Auth()->user()->id
        ]);
        return redirect()->back();
    }
}
