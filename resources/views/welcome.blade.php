<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sabores do Mundo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Map -->
  <script src="assets/map/mapdata.js"></script>
  <script src="assets/map/worldmap.js"></script>

   <!-- Footer -->
   <script src="./components/footer.js"></script>

  <!-- =======================================================
  * Template Name: Delicious
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <div class="logo me-auto">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
        <h1 class="align-middle"><a href="index.html">Sabores do Mundo</a></h1>
    </div>
    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a class="nav-link scrollto" href="index.html">Página inicial</a></li>
        <li><a class="nav-link scrollto" href="index.html #map">Continentes</a></li>
        <li><a class="nav-link scrollto" href="index.html #forms">Formulário</a></li>
        <li><a class="nav-link scrollto" href="index.html #chefs">Equipe</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

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
                <h2 class="animate__animated animate__fadeInDown">Somos seu guia para a culinária global</h2>
                <p class="animate__animated animate__fadeInUp">Não somos apenas um guia gastronômico, mas uma ponte para as ricas tradições culinárias globais. Através do nosso mapa interativo, embarque em uma viagem sensorial, onde cada clique desvenda a alma e a história de uma nação. Acreditamos que em cada prato há uma narrativa, um sabor autêntiico. Conosco, você descobre que a culinária é uma linguagem que une e celebra a diversidade do nosso mundo</p>
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

    <section id="forms">
      <div class="container">

        <div class="section-title">
          <h2>Avalie-nos</h2>
          <p>Valorizamos sua opinião! Sua avaliação construtiva é fundamental para aprimoramos nosso site</p>
        </div>

        <div class="row">
          <form method="POST" action="forms/save.php">
            <div class="form-row mx-auto col-10 col-md-8 col-lg-6 p-4 shadow bg-white">

              <div class="form-group">
                <p>Qual a sua idade?</p>
                <select class="form-select" name="age">
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18 em diante">18 em diante</option>
                </select>
              </div>

              <div class="form-group pt-5">
                <p>Você acha que o objetivo do site, no geral, ficou claro?</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="clear_objective" id="inlineRadio1" value="Sim" checked>
                    <label class="form-check-label" for="inlineRadio1">Sim</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="clear_objective" id="inlineRadio2" value="Não">
                    <label class="form-check-label" for="inlineRadio2">Não</label>
                  </div>
              </div>

              <div class="form-group pt-5">
                <p>Ao navegar pelo sistema pela primeira vez deu para entender que o objetivo é qual?</p>
                <textarea required name="understanding_objective" class="form-control" placeholder="Campo obrigatório"></textarea>
              </div>
              <div class="form-group pt-5">
                <p>As comidas típicas dos 5 continentes foi bem apresentada? Queremos saber se ficou claro que existe uma grande diversidade culinária de um país para outro.</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="culinary_diversity" id="inlineRadio1" value="Sim" checked>
                  <label class="form-check-label" for="inlineRadio1">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="culinary_diversity" id="inlineRadio2" value="Não">
                  <label class="form-check-label" for="inlineRadio2">Não</label>
                </div>
              </div>

              <div class="form-group pt-5">
                <p>A linguagem utilizada foi de fácil compreensão?</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="understandable_language" id="inlineRadio1" value="Sim" checked>
                  <label class="form-check-label" for="inlineRadio1">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="understandable_language" id="inlineRadio2" value="Não">
                  <label class="form-check-label" for="inlineRadio2">Não</label>
                </div>
              </div>

              <div class="form-group pt-5">
                <p>O site tem que tipo de proposta?</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="proposal" id="inlineRadio1" value="Informativo" checked>
                  <label class="form-check-label" for="inlineRadio1">Informativo</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="proposal" id="inlineRadio2" value="Expositivo">
                  <label class="form-check-label" for="inlineRadio2">Expositivo</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="proposal" id="inlineRadio2" value="Blog">
                  <label class="form-check-label" for="inlineRadio2">Blog</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="proposal" id="inlineRadio2" value="E-Commerce">
                  <label class="form-check-label" for="inlineRadio2">E-Commerce</label>
                </div>
              </div>

              <div class="form-group pt-5">
                <p>A identidade visual (cores, tipo de letra, imagens) é agradável e harmoniosa?</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pleasant_visual_identity" id="inlineRadio1" value="Sim" checked>
                  <label class="form-check-label" for="inlineRadio1">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="pleasant_visual_identity" id="inlineRadio2" value="Não">
                  <label class="form-check-label" for="inlineRadio2">Não</label>
                </div>
              </div>

              <div class="form-group pt-5">
                <p>A identidade visual (cores, tipo de letra, imagens) remete ao tema da culinária?</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="culinary_visual_identity" id="inlineRadio1" value="Sim" checked>
                  <label class="form-check-label" for="inlineRadio1">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="culinary_visual_identity" id="inlineRadio2" value="Não">
                  <label class="form-check-label" for="inlineRadio2">Não</label>
                </div>
              </div>

              <div class="form-group pt-5">
                <p>Existe um padrão de cores nas páginas?</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="color_pattern" id="inlineRadio1" value="Sim, amarelo, preto e branco" checked>
                  <label class="form-check-label" for="inlineRadio1">Sim, amarelo, preto e branco</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="color_pattern" id="inlineRadio2" value="Não, as cores são muito diversificadas">
                  <label class="form-check-label" for="inlineRadio2">Não, as cores são muito diversificadas</label>
                </div>
              </div>

              <div class="form-group pt-5">
                <p>A logomarca remete ao tema/objetivo do site?</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="coherent_logo" id="inlineRadio1" value="Sim" checked>
                  <label class="form-check-label" for="inlineRadio1">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="coherent_logo" id="inlineRadio2" value="Não">
                  <label class="form-check-label" for="inlineRadio2">Não</label>
                </div>
              </div>

              <div class="form-group pt-5">
                <p>Você sentiu falta de alguma funcionalidade, ou tem alguma sugestão para melhorar o site?</p>
                <textarea placeholder="Campo opcional" name="suggestion" class="form-control"></textarea>
              </div>

             <div class="text-center">
                <button type="submit" class="book-a-table-btn mx-0 border-0 mt-4">Avaliar</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </section>

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Nossa equipe</h2>
          <p>Nossa missão é despertar seu apetite em descobrir os sabores do mundo</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Eric Rudnick</h4>
                <span>Programador</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-2.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Isadora Lucena</h4>
                <span>Programadora</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Maria Eduarda</h4>
                <span>Programadora</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

  </main><!-- End #main -->

  <footer-component></footer-component>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>