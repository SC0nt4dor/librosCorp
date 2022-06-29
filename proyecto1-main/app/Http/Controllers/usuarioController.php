<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Requests\registroRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class usuarioController extends Controller

{
    public function vistaRegistro(){
        return view('Registro');
    }


    public function Registro(registroRequest $request){
    $usuario=usuario::create($request->validated());
    return view('Registro');
    }


    public function vistaLogin( ){
        if(auth::check()){
        return redirect('/Ingreso');
    }
        }
    public function Ingreso(loginRequest $request) {
    $credentials=$request->getCredentials();
    if(Auth::validate($credentials)){
        return redirect()->to('/Ingreso')->withErrors('auth.failed');
    }
    $usuario=auth::getProvider()->retrieveByCredentials($credentials);
    auth::login($usuario);
    return $this->authenticaded($request,$usuario);

    }
    public function authenticaded(Request $request,$Usuario){
    return redirect('/Home');
    }
    public function CerrarSesion() {
     Session::flush();
     Auth::logout();
    }
}

