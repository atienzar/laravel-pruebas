@extends('layouts.auth-master')


@section('content')

    <form action="/login" method="POST" class="container w-25">
        @csrf
        <h1>Login</h1>
        @include('layouts.partial.messages')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username / Email address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    Si no tiene cuenta <a href="/register">registrese</a>
@endsection