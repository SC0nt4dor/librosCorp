<?php

namespace App\Http\Controllers;

use App\Models\cotizacion;
use App\Models\ficha_tecnica;
use Illuminate\Http\Request;
use App\Models\libro;
use Illuminate\Support\Facades\DB;

class CotizacionController extends Controller
{
    public function mostrar($ID_libro){
     $libro= libro::find($ID_libro);
     $ficha_tecnica= ficha_tecnica::find($ID_libro);
     $cotizacion= cotizacion::find($ID_libro);
     return view('Libro',['libro'=>$libro,'ficha_tecnica'=>$ficha_tecnica,'cotizacion'=>$cotizacion]);
     return $this->obtenerDatos($cotizacion);
    }

    public function obtenerDatos($cotizacion){
    
    }


  public function MostrarCotizaciones(){
    $Cotizacion = cotizacion::orderBy('precio')->get();

    return view('libro',[
    'libro' =>$Cotizacion,
    ]);
  }

}
