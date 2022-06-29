@extends('layouts.layout')
@section('content')
    <table class="table table-striped">
       <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col" style="text-align: center">Resultados</th>
        </tr>
       </thead>
       <tbody>
  @foreach ($libros as $libro)

 <tr>
<th scope="row">{{''}}</th>
<td ><a href="Libro/{{$libro->ID_libro}}"><image style="width: 100px" src={{$libro->LinkImagen}}></a></td>
<td style="text-align:left">{{$libro->titulo}}</td>
<td></td>
</tr>

   @endforeach

       </tbody>
    </table>


@endsection
