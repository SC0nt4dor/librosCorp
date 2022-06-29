@extends('layouts.layout')
@section('nav')
<div style="text-align: center">
    <input placeholder="Ingrese nombre de libro">
    <button></button>
</div>
<div style="text-align: right">
    <a href="{{url('/Principal')}}"><b>Cerrar sesion</b></a>
    <b>Mirar guardados</b>
</div>
@endsection