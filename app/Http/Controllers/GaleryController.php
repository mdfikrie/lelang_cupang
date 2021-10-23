<?php

namespace App\Http\Controllers;
use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('keyword')){
            $galery = Galery::where('nama','LIKE','%'.$request->keyword.'%')->paginate(10);
            return view('page.user.galery',compact('galery'));
        }
        $galery = Galery::latest()->paginate(10);
        return view('page.user.galery',compact('galery'));
    }
    
}
