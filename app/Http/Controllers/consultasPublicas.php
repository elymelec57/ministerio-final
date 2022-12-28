<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Produccion;
use Illuminate\Http\Request;

class consultasPublicas extends Controller
{
   public function index(){
    $rol = 0;
    $eventos = Evento::orderByDesc('id')->get();
    $producciones = Produccion::select('fechaC','cultivo','h.*')->join('haciendas as h', 'h.id','=','hacienda_id')->get();

    return view('welcome',compact('eventos','rol','producciones'));
   }
}
