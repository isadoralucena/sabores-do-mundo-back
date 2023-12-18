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

    @extends('layouts.partials.dashboard')

  </main><!-- End #main -->
@endsection
