<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Lelangan;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $lelangs = Lelangan::where('user_id',Auth()->user()->id)->latest()->paginate(3);
        return view('page.user.profile',compact('lelangs'));
    }
    public function show(Request $request)
    {
        $user = User::where('id',$request->id)->first();
        $lelangs = Lelangan::where('user_id',$request->id)->latest()->paginate(3);
        return view('page.user.show-profile',compact('user','lelangs'));
    }
    public function edit_profile(Request $request)
    {
        $users = User::where('id',$request->id)->first();
        return view('page.user.edit-profile',compact('users'));
    }
    public function profile_update(Request $request)
    {
      
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
            $user->link_fb = $request->fb;
            $user->link_ig = $request->ig;
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
        return redirect('/profile')->with('pesan','Data berhasil dirubah!');
        
        
    }
}
