@extends('layouts.layout')
@section('content')
<div class="loginform">
    <h3 class="titulo">Crear cuenta</h3>
    <form action="Registro" method="POST" >
       @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input  class="form-control" name="nombre" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Constraseña</label>
            <input type="password" class="form-control" name="contraseña" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
            <input type="password" class="form-control" name="contraseña_confirmacion">
        </div>
        <div class="mb-3 form-check">
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>

    </form>
</div>

<style>
    .loginform {
        width: 25rem;
        height: 25rem;
        margin: auto;
        margin-top: 1rem;
        margin-bottom: 22rem;

    }

    .loginform.titulo {
        text-align: center;
    }
</style>
@endsection
