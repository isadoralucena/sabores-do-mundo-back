@extends('layouts.auth')

@section('title', 'Cadastro - Sabores do mundo')

@section('content')

<form method="POST" action="{{route('register')}}">
    @csrf
    <div class="px-5 py-4 shadow bg-white">

        <div class="logo">
            <a class="d-flex justify-content-center" href="/"><img src="assets/img/logo.png" class="img-fluid"></a>
            <h1 class="text-center"><a href="/">Sabores do Mundo</a></h1>
        </div>

        <div class="form-group mb-3">
            <input placeholder="Nome" class="form-control" name="name" type="text" autofocus>
        </div>

        <div class="form-group mb-3">
            <input placeholder="Email" class="form-control" name="email" type="email">
        </div>

        <div class="form-group mb-3">
            <input placeholder="Senha" class="form-control" name="password" type="password">
        </div>

        <div class="form-group mb-3">
            <input placeholder="Confirmar senha" class="form-control" name="password_confirmation" type="password">
        </div>

        <div class="text-center">
            <button class="book-a-table-btn mx-0 border-0">Criar conta</button>
        </div>

        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-danger mt-2">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </div>
</form>

@endsection
