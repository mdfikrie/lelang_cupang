<?php

namespace App\Http\Controllers;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    //
    public function index()
    {
        return view('page.user.pengaduan');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'alasan' => 'required'
        ]);

        Pengaduan::create([
            'user_id' => auth()->user()->id,
            'terlapor' => $request->name,
            'alasan' => $request->alasan,
        ]);

        return redirect('/pengaduan')->with('pesan','Pengaduan sudah dikirim!');
    }
}
