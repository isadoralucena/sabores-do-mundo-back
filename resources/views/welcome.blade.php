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
    <div>
      <form action="{{ route('search') }}" id="search">
        <input type="text" name="search" id="search" style="width: 200px">
        <button>Enviar</button>
      </form>
      
    </div>
    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a class="nav-link scrollto" href="index.html">Página inicial</a></li>
        <li><a class="nav-link scrollto" href="index.html #map">Continentes</a></li>
        <li><a class="nav-link scrollto" href="{{route('login')}}">Login</a></li>
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

    {{-- Recent add section --}}
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
                <img src="assets/img/generic.jpg" class="img-fluid" alt="">
              </div>
              <div class="recipe-info">
                <h4>{{$recipe->title}}</h4>
                <span>{{$recipe->user->name}}</span>
                <div class="social">
                </div>
              </div>
            </div>
          </div>

          @endforeach

          <div class="text-center">
            <a href="{{route('dashboard')}}"><button type="submit" class="book-a-table-btn mx-0 border-0 mt-4">Ver mais</button></a>
          </div>
        </div>
      </div>
    </section><!-- end recent add section -->

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

  </main><!-- End #main -->

  <footer id="footer">
    <div class="container">
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="logo img-fluid"></a>
      <h3>Sabores do Mundo</h3> -->

      <div class="logo">
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
        <h1><a href="index.html">Sabores do Mundo</a></h1>
      </div>

      <p>Explorando a pluralidade gastronômica que une e diferencia os países</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Sabores do Mundo</span></strong>. Todos os direitos reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Template pela <a href="https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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