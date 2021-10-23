<?php

namespace App\Http\Controllers;
use App\Models\Bid;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $historys = Bid::where('user_id',Auth()->user()->id)->latest()->get();
        // dd($keranjangs->lelangan->judul);
        return view('page.user.history',compact('historys'));
    }
}
