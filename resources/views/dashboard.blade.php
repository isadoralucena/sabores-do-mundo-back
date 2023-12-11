@extends('layouts.partials.header')

@extends('layouts.main')

@section('title', 'Receitas recentes - Sabores do mundo')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Receitas Cadastradas</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>dashboard</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">
          @foreach ($recipes as $recipe)
            <div class="row" style="margin-bottom: 10px">
                <div class="col-lg-4 col-md-6">
                    <div id="recipe-dashboard" class="d-flex align-items-center">
                        <div id="pic-dashboard">
                          @if($recipe->photo_path)
                            <img src="{{ asset('storage/' . $recipe->photo_path) }}" class="img-fluid" id="pic-d" alt="Imagem da Receita">
                          @else
                            <img src="assets/img/generic.jpg" class="img-fluid" id="pic-d">
                          @endif
                        </div>
                        <a href="{{route('show', $recipe->id)}}">
                          <div id="recipe-info-dashboard" class="col-lg-6" style="color: #444444">
                              <h4>{{$recipe->title}}</h4>
                              <span>{{$recipe->user->name}}</span>
                          </div>
                        </a>
                    </div>
                </div>
            </div>
          @endforeach
          {{$recipes->links()}}
        </div>
    </section>


  </main><!-- End #main -->
