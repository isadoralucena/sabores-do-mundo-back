@extends('layouts.partials.header')

@extends('layouts.main')

@section('title', 'Editar receita - Sabores do mundo')

@section('content')

    <main id="main">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
      <style>
        #selecionar-imagem {
            width: 100px;
            height: 100px;
            background-color: #ccc;
            border: none;
            cursor: pointer;
            overflow: hidden;
            position: relative;
        }

        #miniatura {
            max-width: 100%;
            max-height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: none;
        }

        #icone-camera {
            font-size: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #333;
        }
        #icone-camera:hover {
            color: #6e6e6e;
        }
    </style>

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h1>Editar Receita</h1>
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/myRecipes">MyRecipes</a></li>
            <li>Editar Receita</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
    <div class="container" style="border: 1px solid gray; border-radius: 10px; padding: 20px 20px 0px 20px;">
        <form action="{{ route('updateRecipe', ['id'=> $recipe->id]) }}" method="POST" class="row g-3" enctype="multipart/form-data">
            @csrf
            <!-- Lado Esquerdo -->
            <div class="col-md-6">
                <div class="mb-3">
                  <label for="selecionar-imagem">
                    <h2>Capa da Receita</h2>
                      <div id="selecionar-imagem" onclick="document.getElementById('inputImagem').click()">
                          <input type="file" name="photo" id="inputImagem" onchange="atualizarMiniatura()" style="display: none;">
                            @if($recipe->photo_path)
                                <img src="{{ asset('storage/' . $recipe->photo_path) }}" class="img-fluid" id="pic-d" alt="Imagem da Receita">
                            @else
                                <img src="{{ asset('assets/img/generic.jpg')}}" class="img-fluid" id="miniatura">
                                <i id="icone-camera" class="fas fa-camera"></i>
                            @endif
                      </div>
                  </label>
                </div>
                <div class="mb-3">
                    <h2>Título da Receita</h2>
                    <input type="text" name="title" class="form-control" value="{{$recipe->title}}">
                </div>
                <div>
                    <h2>País de Origem</h2>
                    <input type="text" name="country" class="form-control" value="{{$recipe->country}}">
                </div>
            </div>
            <!-- Lado Direito -->
            <div class="col-md-6">
                <div class="mb-3">
                    <h2>Instruções</h2>
                    <textarea name="instructions" class="form-control" rows="12" >{{$recipe->instructions}}</textarea>
                </div>
            </div>
            <!-- Botão de Envio -->
            <div class="col-md-12">
                <button type="submit" class="book-a-table-btn mx-0 border-0 mt-4 d-block">Enviar</button>
            </div>
        </form>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
  <script>
      function atualizarMiniatura() {
          var inputImagem = document.getElementById('inputImagem');
          var miniatura = document.getElementById('pic-d');
          miniatura.id = 'miniatura';
          var iconeCamera = document.getElementById('icone-camera');
          var botaoImagem = document.getElementById('selecionar-imagem');

          if (inputImagem.files && inputImagem.files[0]) {
              var leitor = new FileReader();

              leitor.onload = function (e) {
                  miniatura.src = e.target.result;
                  miniatura.style.display = 'block';
                  iconeCamera.style.display = 'none';
                  botaoImagem.style.backgroundImage = 'url(' + e.target.result + ')';

              };

              leitor.readAsDataURL(inputImagem.files[0]);
          } else {
              miniatura.style.display = 'none';
              iconeCamera.style.display = 'block';
              botaoImagem.style.backgroundImage = 'none';
          }
      }
  </script>


  </main><!-- End #main -->
@endsection
