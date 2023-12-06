@extends('layouts.auth')

@section('title', 'Login - Sabores do mundo')

@section('content')

<form method="POST" action="{{route('login')}}">
    @csrf
    <div class="px-5 py-4 shadow bg-white">

        <div class="logo">
            <a class="d-flex justify-content-center" href="/"><img src="assets/img/logo.png" class="img-fluid"></a>
            <h1 class="text-center"><a href="/">Sabores do Mundo</a></h1>
        </div>

        <div class="mb-3">
            <input class="form-control" placeholder="Email" name="email" type="email" autofocus>
        </div>

        <div class="mb-3">
            <input class="form-control" placeholder="Senha" name="password" type="password">
        </div>

        <div class="text-center align-items-center">
            <button class="book-a-table-btn mx-0 border-0">Entrar</button>
        </div>

        <a class="d-flex justify-content-center" href="{{route('register')}}">Não tem conta? Cadastre-se!</a>

    </div>
</form>

@endsection
