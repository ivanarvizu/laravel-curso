@extends('layout')

@section('contenido')
    <h1>Mete un mensaje prro</h1>
    @if(session()->has('info'))
        {{ session('info') }}
    @endif
    <form action="{{route('mensajes.store')}}" method="post">
        <input type="hidden" name="_token" value="{{  csrf_token() }}">
        <label for="nombre">
            Nombre prro
            <input type="text" name="nombre">
        </label>
        <br>
        <label for="email">
            Imeil prro
            <input type="text" name="email">
        </label>
        <br>
        <label for="mensaje">
            Escribe tu mensaje prro
            <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
        </label>
        <button type="submit">Sumita prro</button>
    </form>
@stop