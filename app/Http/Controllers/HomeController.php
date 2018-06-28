<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home/index');
    }

    public function minor()
    {
        return view('home/minor');
    }

    public function registratie()
    {
        return view('personeel/registratie');
    }   
    public function pers_zoeken()
    {
        return view('personeel/pers_zoeken');
    }   
    public function welcome()
    {
        return view('welcome');
    }   
    public function bureaus()
    {
        return view('administratie/bureaus');
    }   
 }
