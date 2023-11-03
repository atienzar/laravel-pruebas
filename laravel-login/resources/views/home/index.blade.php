@extends('layouts.app')

@include('layouts.partial.messages')


@section('content')
    <h1>HOME</h1>
    @auth
        <p>Bienvenido {{ auth()->user()->name ?? auth()->user()->username}}, estas autenticado</p>

        <a href="/logout">Logout</a>
    @endauth

    @guest
        <p>Para ver el contenido <a href="/login">inicia sesion</a></p>
    @endguest
@endsection
