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
        return view('nuevoVuelo');
    }

    public function agregar(Request $request){
        $nvoVuelos = new Vuelo();
        $nvoVuelos->numeroVuelo = $request->input('numero');
        $nvoVuelos->origgen = $request->input('origen');
        $nvoVuelos->destino = $request->input('destino');
        $nvoVuelos->numeroAsientos = $request->input('numeroAsientos');
        $nvoVuelos->fechaDeSalida = $request->input('fecha');
        $nvoVuelos->save();

        return redirect('/vuelos');

    }
}
