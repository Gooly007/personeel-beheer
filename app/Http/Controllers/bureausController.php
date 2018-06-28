<?php

namespace App\Http\Controllers;

use App\administratie;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class bureausController extends Controller
{
    //
    // Display an answer to page sample
    public function index()
    {
        $bureaus = DB::select('select * from bureaus');
        return view('administratie/bureaus', ['bureaus' => $bureaus]);
    }
    public function show(Request $request)
    {
        $result=DB::insert('insert into bureaus (bureau, omschrijving) values (?, ?)');
        return view('administratie/bureaus', ['bureaus' => $bureaus]);    
    }
    public function bureaus_lijst()
    {
        $bureaus = bureaus::all();
        return view('administratie/bureaus', compact('bureaus'));
    }

}
