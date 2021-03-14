
@extends('plantilla')

@section('Titulo', 'Contactos')
@section('Contenido')
    <h1>Contactos</h1>
    {{-- @foreach ($errors as $error)
        <p>{{$error}}</p> 
    @endforeach --}}
    {{-- {{$errors->first('nombre')}} --}}
    <form method="POST" action="{{route('Contact')}}" style="display: flex;flex-direction:column;width: 50%;">
        @csrf
        <input name="nombre" placeholder="Nombre" value=""/>
        {!!$errors->first('nombre')!!}
        <input type="email" name="email" placeholder="example@example.com" value=""/>
        <input name="subject" placeholder="Asunto" value=""/>
        <textarea name="contenido" placeholder="Mensaje"></textarea>
        <button>Enviar</button>
    </form>    
@endsection