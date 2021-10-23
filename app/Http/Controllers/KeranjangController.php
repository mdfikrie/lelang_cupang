<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\User;

class KeranjangController extends Controller
{
    public function index(){
        $keranjangs = Keranjang::where('user_id',auth()->user()->id)->latest()->get();
        return view('page.user.keranjang',compact('keranjangs'));
    }
}
