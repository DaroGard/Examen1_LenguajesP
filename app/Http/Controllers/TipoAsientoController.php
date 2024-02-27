<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoAsiento;

class TipoAsientoController extends Controller
{
    //

    public function index(){
        $tipoAsientos = TipoAsiento::all();
        return view('tiposAsientos', compact('tipoAsientos'));
    }

    public function agregar(){
        return view('agregarTipoAsiento');
    }

    public function guardar(Request $request){
        $nvoTipoAsiento = new TipoAsiento();
        $nvoTipoAsiento->descripcion = $request->descripcion;
        $nvoTipoAsiento->precio = $request->precio;
        $nvoTipoAsiento->estado = $request->estado;
        $nvoTipoAsiento->save();

        return redirect('/asientos/tipo');
    }

    public function eliminar($id){
        $tipoAsiento = TipoAsiento::find($id);
        $tipoAsiento->estado = 'I';

        $tipoAsiento->save();
    }

    public function editar($id){
        $tipoAsiento = TipoAsiento::find($id);

        return view('editarAsiento', compact('tipoAsiento'));
    }

    public function guardarEdit(Request $request, $id){
        $tipoAsiento = TipoAsiento::find($id);
        $tipoAsiento->descripcion = $request->descripcion;
        $tipoAsiento->precio = $request->precio;
        $tipoAsiento->estado = $request->estado;
        $tipoAsiento->save();

        return redirect('/asientos/tipo');
    }

}
