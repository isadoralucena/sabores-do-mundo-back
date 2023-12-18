@extends('layouts.partials.header')

@extends('layouts.main')

@section('title', 'Ver ' . $recipe->title . ' - Sabores do mundo')

@section('content')

<main id="main">

<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h1>{{$recipe->title}}</h1>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Ver detalhes da receita</li>
        </ol>
      </div>
    </div>
</section>

<section class="container">
    <p>Autor(a): {{$recipe->user->name}}</p>
    <p>Instruções: {{$recipe->instructions}}</p>
    <p>País: {{$recipe->country}}</p>

    @if($recipe->photo_path)
    <img src="{{ asset('storage/' . $recipe->photo_path) }}" class="img-fluid" id="pic-d" alt="Imagem da Receita">
    @else
        <img src="{{ asset('assets/img/generic.jpg') }}" class="img-fluid">
    @endif

</section>

</main>

@endsection
