@extends('layouts.layout')
@section('content')
<div>

    <div class="datos">

        <div class="img">
            <img style="border=none width=200px"  src="{{($libro['LinkImagen'])}}" class="card-img-top" alt="">
        </div>
        <div class="titulo">

            <h3>{{($libro['titulo'])}}</h3>
            <b>{{$ficha_tecnica['autor']}}</b>
            <p>{{$ficha_tecnica['sinopsis']}} </p>
        </div>

    </div>

    <div>
        <div class=tbcomp>

       <table class="table table-striped" >
        <tr>
       <th>tienda</th>
       <th>Precio</th>
       <th>Stock</th>
       <th>referencia</th>
        </tr>
        <tr>

            <td>{{$cotizacion['tienda']}}</td>
            <td>{{$cotizacion['precio']}}</td>
            <td>{{$cotizacion['stock']}}</td>
            <td>{{$cotizacion['referencia']}}</td>
        </tr>
       </table>

        </div>

        <div class="comentarios">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ingresa tu comentario..."></textarea>
            </div>
        </div>
    </div>
</div>
<style>
    .comparador {
        width: 22rem;
        height: 22rem;
        margin: left;
        margin-left: 20rem;
        border: solid gray 4px;
    }

    .tbcomp {
        margin-top: 2rem;
        display: block;
        margin-bottom: 2rem;

    }

    .img {
        width: 22rem;
        margin-left: 5rem;
        margin-top: 1rem;
        border: solid black 4px;

    }

    .comentarios {
        width: 75%;
        margin-left: 20rem;
    }
    .datos{
        display: flex;
        margin-left: 15rem;
    }
    .titulo{
        margin-left: 10rem;
        margin-top: 2rem;
    }

</style>
@endsection
