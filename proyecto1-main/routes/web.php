<?php

use App\Models\Usuario;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\libroController as libroController;
use App\Http\Controllers\usuario as ControllersUsuario;
use App\Http\Controllers\CotizacionController as CotizacionController;
use App\Http\Controllers\usuarioController;

Route::get('/', function (){return view('Home');});
Route::get('/Ingreso',[usuarioController::class,'vistaLogin']);
Route::post('/Ingreso',[usuarioController::class,'store']);
Route::get('/Guardados',function(){return view('Guardados');});
Route::get('/Registro',function(){return view('Registro');});
Route::post('/Registro',[usuarioController::class,'Registro']);
Route::get('/Soporte',function(){   return view('Soporte');});
Route::get('/Busqueda',[libroController::class,'buscarLibro']);
Route::get("Libro/{ID_libro}",[CotizacionController::class,'mostrar']);



//Route::get('/Registro',function(){
//return view('Registro');
//});
//Route::post('/Registro',function(){
//$Usuario = new Usuario();
//$Usuario ->nombre =request('nombre');
//$Usuario -> contraseña=request('contraseña');
//$Usuario -> email =request('email');
//$Usuario -> save();
//});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
