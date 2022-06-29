@extends('layouts.layout')
@section('content')
<div class="soporteform">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Correo</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@ejemplo.cl">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Asunto</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Asunto">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Contexto"></textarea>
    </div>
</div>
<style>
    .soporteform {
        width: 22rem;
        height: 22rem;
        margin: auto;
        margin-top: 1rem;
    }

    .soporteform.titulo {
        text-align: center;
    }
</style>

@endsection