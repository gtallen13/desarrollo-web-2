
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
        <input name="fullname" placeholder="Nombre" value="{{old('nombre')}}"/>
        {!!$errors->first('nombre',"<small style='color:red;'>:message</small>")!!}

        <input type="email" name="email" placeholder="example@example.com" value="{{old('email')}}"/>
        {!!$errors->first('email',"<small style='color:red;>:message</small>")!!}

        <input name="subject" placeholder="Asunto" value="{{old('subject')}}"/>
        {!!$errors->first('subject',"<small style='color:red;'>:message</small>")!!}

        <textarea name="contenido" placeholder="Mensaje"></textarea>
        {!!$errors->first('contenido',"<small style='color:red;'>:message</small>")!!}

        <button>Enviar</button>
    </form>    
@endsection