<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mutaties_controller extends Controller
{
    //
    public function vakantie()
    {
        return view('mutaties/vakantie');
    }

    public function verzuim()
    {
        return view('mutaties/verzuim');
    }

    public function overtime()
    {
        return view('mutaties/overtime');
    }
}
