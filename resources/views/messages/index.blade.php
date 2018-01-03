@extends('layout')

@section('contenido')
    <h1>Todos los prros que mandaron mensaje</h1>

    <table width="100%" border="1">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Email</td>
            <td>Mensaje</td>
        </tr>
        @foreach($messages as $message)
            <tr>
                <td>{{$message->id}}</td>
                <td>{{$message->nombre}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->mensaje}}</td>
            </tr>
        @endforeach
    </table>

@stop