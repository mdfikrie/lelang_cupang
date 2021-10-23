<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OngkirController extends Controller
{
    public function index()
    {
        return view('page.user.cek_ongkir');
    }
}
