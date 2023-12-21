@extends('layouts.main')



@section('title', 'Sabores do mundo')

@section('content')

    @include('layouts.partials.header-dynamic')

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
                <div class="carousel-container">
                    <div class="carousel-content">
                    <h2 class="animate__animated animate__fadeInDown"><span>Sabores do mundo</span></h2>
                    <p class="animate__animated animate__fadeInUp">No cruzar de continentes e oceanos, descubra a pluralidade gastronômica que une e diferencia os países. Navegue pelo nosso mapa e saborei cada destino, explorando culturas e tradições através de seus pratos mais icônicos</p>
                    <div>
                        <a href="#map" class="btn-menu animate__animated animate__fadeInUp scrollto">Conheça</a>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
                <div class="carousel-container">
                    <div class="carousel-content">
                    <h2 class="animate__animated animate__fadeInDown">Seu guia para a culinária global</h2>
                    <p class="animate__animated animate__fadeInUp">Não somos apenas um guia gastronômico, mas uma ponte para as ricas tradições culinárias globais. Através do nosso mapa interativo, embarque em uma viagem sensorial, onde cada clique desvenda a história de uma nação</p>
                    </div>
                </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Recent add section ======= -->
        <section id="chefs" class="chefs">
            <div class="container">

            <div class="section-title">
                <h2>Adicionados recentemente</h2>
            </div>

            <div class="row">

                @foreach ($latestRecipes as $recipe)

                <div class="col-lg-4 col-md-6">
                    <div class="recipe">
                        <div class="pic">
                            @if($recipe->photo_path)
                            <img src="{{ asset('storage/' . $recipe->photo_path) }}" class="img-fluid" id="pic-d" alt="Imagem da Receita">
                        @else
                            <img src="assets/img/generic.jpg" class="img-fluid">
                        @endif
                        </div>
                        <div class="recipe-info">
                            <h4>{{$recipe->title}}</h4>
                            <span>{{$recipe->user->name}}</span>
                        </div>
                    </div>
                </div>

                @endforeach

                <div class="text-center">
                    <a href="{{route('dashboard')}}"><button type="submit" class="book-a-table-btn mx-0 border-0 mt-4">Ver mais</button></a>
                </div>
            </div>
            </div>
        </section><!-- End recent add section -->

        <!-- ======= Map Section ======= -->
        <section id="map">
            <div class="container">
            <div class="section-title">
                <h2>Interaja com o mapa</h2>
                <p>Escolha um continente e clique no país que deseja conhecer a culinária</p>
            </div>
            </div>
            <div id="map">
            </div>
        </section>

    </main>

@endsection

