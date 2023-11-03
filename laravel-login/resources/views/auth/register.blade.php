<!DOCTYPE html>
<html>
@extends('layouts.auth-master')


@section('content')
<h1>Registro</h1>
    <form action="/register" method="POST" class="container w-25">
        @csrf
        
        @include('layouts.partial.messages')
        <div class="mb-3">
            <label for="exampleInputUsername" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputUSername" aria-describedby="usernameHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Conrirma</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Registro</button>
    </form>
    Si no tiene cuenta <a href="/register">registrese</a>
@endsection