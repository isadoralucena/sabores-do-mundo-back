@extends('layouts.partials.header')

@extends('layouts.main')

@section('title', 'Minhas receitas - Sabores do mundo')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Minhas Receitas</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Minhas Receitas</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    @extends('layouts.partials.user-dashboard')


  </main><!-- End #main -->
