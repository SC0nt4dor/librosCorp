<?php

namespace App\Http\Controllers;

use App\Models\ficha_tecnica;
use App\Models\libro;
use Illuminate\Http\Request;

class libroController extends Controller
{

    public function buscarLibro( ){
    $search_text =$_GET['buscar'];
    $libros=libro::where('titulo','LIKE','%'.$search_text.'%')->get();
    return view('Busqueda',compact('libros'));
    }
}
