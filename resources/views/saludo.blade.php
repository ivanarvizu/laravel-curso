@extends('layout')

@section('contenido')
<h1>Saludos para {{$nombre}}</h1>

@forelse($consolas as $consola)
    <li>{{$consola}}</li>
@empty
    <p>No consolas</p>
@endforelse

@stop