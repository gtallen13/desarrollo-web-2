@extends('plantilla')

@section('Titulo', 'Portafolio')
@section('Contenido')
    <h1>Portafolio</h1>   
    <ul>
        @foreach ($portafolio as $portafolioItem)
            <li> {{$portafolioItem['title']}}   </li>   
        @endforeach
    </ul>
@endsection