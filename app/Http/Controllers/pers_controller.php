<?php

namespace App\Http\Controllers;

// bijvoegen onderstaand namespace
use App\personeel_gegevens;
// use App\Http\Requests;
// use App\Http\Controllers\Controller;
// eind toegevoegd namespace

use Illuminate\Http\Request;

class pers_controller extends Controller
{
    // Display an answer to page sample
        public function index()
        {
            return 'get all users flip';
            $personeel = personeel_gegevens::all();
            return $personeel;
        }

    /**
     * Create a new user instance Sample
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function personeel_registratie()
    {
        return view('personeel/registratie');
    }

    public function personeel_zoeken()
    {
        $personeel = personeel_gegevens::all();
        //return select query
        return view('personeel/pers_zoeken', compact('personeel'));
    }

        public function personeel_teamleider()
    {
        return view('personeel/teamleider');
    }
    
}