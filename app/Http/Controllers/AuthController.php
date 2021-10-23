<?php

namespace App\Http\Controllers;

use App\Mail\EmailVerify;
use App\Mail\LupaPassword;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function login(Request $request){
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password, 'is_active' => 1])){
            $user = User::where('id',auth()->user()->id)->first();
            // if($user->is_active == 1){
                if($user->role == "admin"){
                    return redirect('/dashboard');
                }else{
                    if($user->alamat){
                        return redirect('/profile');
                    }
                    return view('page.user.lengkapi-identitas',compact('user'));
                }
            // }else{
            //     return redirect('/')->with('pesan','Account anda di blokir!');
            // }
        }else{
            return redirect('/')->with('pesan','Proses login gagal!');
        }
    }
    public function register(){
        return view('auth.register');
    }
    public function proses_regist(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|same:konf_password',
            'konf_password'=>'required',
        ],[
            'required' => 'Wajib diisi!',
            'min'=> 'Password minimal 8 character!',
            'unique' => 'Email sudah digunakan!',
            'same' => 'Password harus sama!',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user',
            'token'=>Str::random(30),
            'is_active' => 0,
        ]);
        \Mail::to($user['email'])->send(new EmailVerify($user));
        return redirect('/')->with('pesan','Silahkan konfirmasi email anda!');

    }
    public function konfirmasi_email($email, $token){
        $user = User::where('email',$email)->where('token',$token)->first();
        if($user['is_active'] == 0){
            $user->update([
                'is_active' => 1,
            ]);
            return redirect('/')->with('pesan','Email sudah terverifikasi!');
        }
        return redirect('/')->with('pesan','Email sudah dikonfirmasi!');
    }
    public function forgot_password(){
        return view('Auth.forgot_password');
    }
    public function kirim_forgot_password(Request $request){
        $request->validate([
            'email' => 'required',
        ],[
            'required' => 'Wajib diisi!',
        ]);
        $user = User::where('email',$request->email)->first();
        \Mail::to($user['email'])->send(new LupaPassword($user));
        return redirect('/')->with('pesan','Silahkan cek email anda untuk merubah password!');
    }
    public function rubah_password($email,$token){
        $user = User::where('email',$email)->where('token',$token)->first();
        if(isset($user)){
            return view('Auth.change-password',compact('user'));
        }
        return abort(404,'Anda tidak memiliki akses kesini');
    }
    public function konf_rubah_password(Request $request,$email,$token){
        // dd($email);
        $request->validate([
            'password' => 'required|min:8|same:konf_password',
            'konf_password'=>'required',
        ],[
            'required' => 'Wajib diisi!',
            'min'=> 'Password minimal 8 character!',
        ]);
        $user = User::where('email',$email)->where('token',$token)->first();
        $user->update([
            'password' => bcrypt($request->password),
        ]);
        return redirect('/')->with('pesan','Password berhasil dirbah!');

        
    }
    public function post_identitas(Request $request){
        $request->validate([
            'telp' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
        ],[
            'required' => 'Wajib diisi!',
        ]);
        $user = User::find($request->id);
            $user->telp = $request->telp;
            $user->kota = $request->kota;
            $user->alamat = $request->alamat;
        $user->save();
        return redirect('/profile');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
