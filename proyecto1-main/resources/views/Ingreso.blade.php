@extends('layouts.layout')
@section('content')
<div class="loginform">
    <h3 class="titulo">Ingresar cuenta</h3>
    <form action="/Ingreso" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="contraseña">
        </div>
        <div class="mb-3 form-check">
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
        <a href="{{url('/Registro')}}">¿No tienes cuenta?, !Registrate¡</a>
    </form>
</div>

<style>
    .loginform {
        width: 22rem;
        height: 22rem;
        margin: auto;
        margin-top: 1rem;
    }

    .loginform.titulo {
        text-align: center;
    }
</style>
@endsection
