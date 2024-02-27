<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Vuelo;

class VueloController extends Controller
{
    //
    public function index(){
        $vuelos = Vuelo::all();
        return view('vuelos', compact('vuelos'));
    }

    public function nuevo(){
    }
}
