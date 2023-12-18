@extends('layouts.main')

@extends('layouts.partials.header-dynamic')

@section('title', 'Sabores do mundo')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/usa-1.png);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Estados Unidos</h2>
                <p class="animate__animated animate__fadeInUp"> Estados Unidos são conhecidos por sua diversidade culinária devido à imigração de pessoas de diferentes origens. Isso se reflete em uma ampla variedade de pratos e influências culturais na gastronomia norte-americana</p>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/usa-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">País do fast-food</h2>
                <p class="animate__animated animate__fadeInUp">Os Estados Unidos são o berço do fast food, com ícones como McDonald's, Burger King e KFC. Hambúrgueres, batatas fritas e refrigerantes são alimentos comuns e populares em todo o país</p>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/usa-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Maior potência mundial</h2>
                <p class="animate__animated animate__fadeInUp">A cultura norte-americana é amplamente consumida em todo o mundo, desde filmes e séries de televisão até música pop, moda e estilo de vida</p>
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

    <!-- ======= Menu Section ======= -->
    <section id="ingredients" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Ingredientes</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Mostrar tudo</li>
              <li data-filter=".filter-starters">Comidas</li>
              <li data-filter=".filter-salads">Bebidas</li>
              <li data-filter=".filter-specialty">Sobremesas</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Hambúrguer</a>
            </div>
            <div class="menu-ingredients">
              Carne moída, sal a gosto, pimenta-do-reino a gosto, pães de hambúrguer, folhas de alface, fatias de tomate, cebola roxa, queijo (cheddar ou americano), ketchup, mostarda, maionese, pickles
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Macarrão com queijo</a>
            </div>
            <div class="menu-ingredients">
              Macarrão cotovelo, queijo cheddar ralado, leite, manteiga, farinha de trigo, sal a gosto, pimenta-do-reino a gosto, noz-moscada ralada, migalhas de pão para a cobertura
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Limonada rosa</a>
            </div>
            <div class="menu-ingredients">
              Limão fresco, açúcar, grenadine (xarope de romã), água, gelo, fatias de limão
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Milkshake de baunilha</a>
            </div>
            <div class="menu-ingredients">
              Sorvete de baunilha, leite, açúcar a gosto, extrato de baunilha, chantilly, coberturas
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Torta de maça</a>
            </div>
            <div class="menu-ingredients">
              Farinha de trigo, sal, açúcar, manteiga, água, maçãs descascadas e desencaroçadas, canela em pó, noz-moscada ralada, suco de limão
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Panqueca americana</a>
            </div>
            <div class="menu-ingredients">
              Farinha de trigo, açúcar, fermento em pó, bicarbonato de sódio, sal, leite, ovo, manteiga derretida, extrato de baunilha, óleo ou manteiga para untar
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="preparation" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Modo de preparo</h2>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Hambúrguer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Macarrão com queijo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Limonada rosa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Milkshake de baunilha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Panqueca norte-americana</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Torta de maça</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Prepare a carne</h3>
                    <p>Tempere a carne moída a temperatura ambiente com sal e pimenta-do-reino a gosto</p>
                    <p>Divida ela em partes iguais para fazer os hambúrgueres. Modele cada parte em um disco de aproximadamente 2 cm de espessura</p>

                    <h3>Pré-Aqueça a grelha ou frigideira</h3>
                    <p>Aqueça a grelha ao ar livre, uma chapa ou uma frigideira grande em fogo médio-alto. Você pode untá-la levemente com óleo para evitar que a carne grude</p>

                    <h3>Cozinhe os hambúrgueres</h3>
                    <p>Coloque os hambúrgueres na grelha ou frigideira quente e cozinhe por cerca de 3 a 4 minutos de cada lado para um hambúrguer médio-raro. Ajuste o tempo de cozimento de acordo com seu gosto pessoal</p>
                    <p>Se você desejar adicionar queijo, coloque uma fatia de queijo sobre cada hambúrguer cerca de um minuto antes de retirá-los da grelha ou frigideira, para que o queijo derreta</p>

                    <h3>Monte o hambúrguer</h3>
                    <p>Enquanto os hambúrgueres estão cozinhando, corte os pães de hambúrguer ao meio e toste o interior até que fiquem dourados</p>
                    <p>Monte o hambúrguer colocando uma folha de alface, uma fatia de tomate e cebola roxa, se desejar, na parte inferior do pão</p>
                    <p>Coloque o hambúrguer com queijo sobre os vegetais</p>

                    <h3>Adicione os condimentos</h3>
                    <p>Adicione ketchup, mostarda e maionese a gosto. Você também pode adicionar pickles ou outros condimentos de sua preferência</p>
                    <h3>Cubra com o pão</h3>
                    <p>Cubra o hambúrguer com a parte superior do pão e sirva imediatamente</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/usa-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cozinhe o macarrão</h3>
                    <p>Em uma panela grande, ferva água com sal. Cozinhe o macarrão de acordo com as instruções da embalagem até que esteja al dente. Escorra e reserve</p>

                    <h3>Prepare o molho de queijo</h3>
                    <p>Em uma panela média, derreta a manteiga em fogo médio. Quando a manteiga estiver completamente derretida, adicione a farinha de trigo e mexa bem para formar um roux (uma mistura espessa)</p>
                    <p>Gradualmente, adicione o leite à panela, mexendo constantemente para evitar a formação de grumos</p>
                    <p>Continue cozinhando e mexendo até que o molho engrosse e fique liso</p>
                    <p>Reduza o fogo e acrescente queijo cheddar ralado ao molho. Continue mexendo até que o queijo esteja completamente derretido e o molho de queijo esteja homogêneo. Adicione a noz-moscada, se estiver usando. Tempere com sal e pimenta a gosto</p>

                    <h3>Misture o macarrão e o molho de queijo</h3>
                    <p>Adicione o macarrão cozido à panela com o molho de queijo. Mexa para cobrir o macarrão completamente com o molho</p>

                    <h3>Monte e asse (opcional)</h3>
                    <p>Pré-aqueça o forno a 180°C</p>
                    <p>Transfira a mistura de macarrão com queijo para uma travessa ou assadeira</p>
                    <p>Se desejar, polvilhe as migalhas de pão e o restante de queijo cheddar ralado por cima</p>

                    <h3>Asse (opcional)</h3>
                    <p>Asse o macarrão com queijo no forno pré-aquecido por cerca de 20-25 minutos, ou até que a superfície esteja dourada e o queijo derretido</p>

                    <h3>Sirva quente</h3>
                    <p>Retire do forno e deixe esfriar por alguns minutos antes de servir. O macarrão com queijo tradicionalmente é servido quente e pode ser apreciado como prato principal ou acompanhamento</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/usa-2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Preparação do suco de limão</h3>
                    <p>Esprema os limões para obter 1 xícara de suco de limão fresco. Retire as sementes e coe o suco para remover quaisquer pedaços de polpa</p>

                    <h3>Preparação do xarope simples</h3>
                    <p>Em uma panela, aqueça água e açúcar em fogo médio. Mexa até que o açúcar se dissolva completamente. Isso cria um xarope simples</p>

                    <h3>Misture os ingredientes</h3>
                    <p>Em uma jarra grande, misture o suco de limão, o xarope simples e a grenadine. Mexa bem para garantir que todos os ingredientes estejam completamente combinados</p>

                    <h3>Adicione a água e o gelo</h3>
                    <p>Acrescente água à mistura de limão e xarope. Adicione gelo à jarra ou a cada copo individualmente, se preferir</p>

                    <h3>Decore e Sirva</h3>
                    <p>Se desejar, decore os copos com fatias de limão e sirva imediatamente</p>

                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/usa-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Prepare os Ingredientes</h3>
                    <p>Certifique-se de que o sorvete esteja bem gelado e o leite esteja frio</p>

                    <h3>Combine os ingredientes no liquidificador</h3>
                    <p>Em um liquidificador, coloque o sorvete de baunilha, leite, açúcar e extrato de baunilha (se estiver usando). O açúcar é opcional e pode ser ajustado de acordo com sua preferência de doçura</p>

                    <h3>Misture até ficar homogêneo</h3>
                    <p>Comece a misturar em velocidade baixa e aumente gradualmente até que a mistura fique homogênea e suave. Isso deve levar apenas alguns segundos</p>

                    <h3>Sirva o milkshake</h3>
                    <p>Despeje o milkshake em copos gelados. Você pode decorar o topo com chantilly, calda de chocolate, pedaços de biscoito, granulado ou uma cereja ao gosto</p>
                    <p>Ele fica melhor quando servido imediatamente, enquanto está fresco e gelado</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/usa-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Misture os Ingredientes secos</h3>
                  <p>Em uma tigela grande, misture a farinha de trigo, o açúcar, o fermento em pó, o bicarbonato de sódio e o sal</p>

                  <h3>Misture os Ingredientes úmidos</h3>
                  <p>Em outra tigela, bata o ovo, adicione o leite, a manteiga derretida e o extrato de baunilha (se estiver usando). Misture bem</p>

                  <h3>Combine os Ingredientes secos e úmidos</h3>
                  <p>Despeje a mistura de ingredientes úmidos na mistura de ingredientes secos. Mexa apenas até que os ingredientes estejam combinados. Não misture demais; a massa deve estar um pouco grumosa</p>

                  <h3>Aqueça a frigideira</h3>
                  <p>Aqueça uma frigideira antiaderente em fogo médio e unte-a levemente com óleo ou manteiga</p>

                  <h3>Cozinhe as Panquecas</h3>
                  <p>Usando uma concha, despeje parte da massa na frigideira quente para cada panqueca. Espalhe-a levemente para formar discos</p>

                  <h3>Cozinhe até borbulhar</h3>
                  <p>Cozinhe as panquecas até começarem a formar bolhas na superfície, o que leva cerca de 2-3 minutos</p>

                  <h3>Vire as panquecas</h3>
                  <p>Com uma espátula, vire as panquecas e cozinhe o outro lado até que fiquem douradas, o que deve levar mais 1-2 minutos</p>

                  <h3>Sirva imediatamente</h3>
                  <p>Retire as panquecas da frigideira e coloque-as em um prato. Mantenha-as quentes enquanto cozinha o restante da massa</p>
                  <p>Sirva as panquecas quentes com coberturas de sua escolha, como xarope de bordo, manteiga, frutas frescas, chocolate, açúcar de confeiteiro, ou chantilly</p>
                </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/usa-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-6">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Preparo da massa</h3>
                    <p>Em uma tigela grande, misture a farinha de trigo, o sal e o açúcar</p>
                    <p>Adicione a manteiga gelada cortada em pedaços pequenos à mistura de farinha. Use um cortador de massa ou os dedos para misturar a manteiga com a farinha até que a mistura se pareça com migalhas grossas</p>
                    <p>Adicione água gelada à mistura de farinha e manteiga. Misture até a massa começar a se unir. Se necessário, adicione mais água, uma colher de sopa de cada vez, até que a massa forme uma bola</p>
                    <p>Divida a massa em duas partes, formando dois discos. Envolva cada disco em filme plástico e leve à geladeira por pelo menos 30 minutos</p>

                    <h3>Preparo do recheio</h3>
                    <p>Em uma tigela grande, misture as maçãs fatiadas com o suco de limão</p>
                    <p>Em outra tigela, misture o açúcar, a farinha de trigo, a canela e a noz-moscada (se estiver usando)</p>
                    <p>Adicione a mistura de açúcar e especiarias às maçãs fatiadas e misture bem para revestir todas as maçãs</p>
                    <p>Corte a manteiga em pedaços pequenos e distribua sobre as maçãs</p>
                    <h3>Montagem da Torta</h3>
                    <p>Pré-aqueça o forno a 220°C</p>
                    <p>Abra um dos discos de massa em uma superfície enfarinhada até obter um círculo grande o suficiente para forrar uma forma de torta de 23 cm de diâmetro. Coloque a massa na forma</p>
                    <p>Espalhe a mistura de maçã uniformemente na massa</p>
                    <p>Abra o segundo disco de massa e coloque-o sobre as maçãs. Feche as bordas das duas massas e faça cortes na parte superior para permitir a saída do vapor durante o cozimento</p>
                    <p>Asse a torta no forno pré-aquecido por 15 minutos a 220°C e, em seguida, reduza a temperatura para 175°C e asse por mais 45-55 minutos, ou até que a massa esteja dourada e o recheio de maçã esteja borbulhando</p>
                    <p>Deixe a torta esfriar antes de servir. Sirva com sorvete ou chantilly, se desejar</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/usa-6.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="stories" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Histórias</h2>
        </div>

        <div class="events-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/usa-1.1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Hambúrguer</h3>

                  <p class="fst-italic">
                    O hambúrguer norte-americano tem origens europeias, particularmente com a tradição alemã do "bife de Hamburgo", que foi trazida para os Estados Unidos por imigrantes no final do século XIX. A popularização do hambúrguer nos EUA deve-se a inovações culinárias, como a máquina de moer carne e o pão macio, e foi impulsionada por redes de fast-food como o McDonald's. Ao longo do tempo, o hambúrguer se diversificou e se tornou um ícone da culinária norte-americana, também desempenhando um papel importante na cultura pop dos Estados Unidos
                  </p>

                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/usa-2.2.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Macarrão com queijo</h3>

                  <p class="fst-italic">
                    O "mac and cheese" norte-americano, macarrão com queijo, tem suas origens na tradição italiana, mas se desenvolveu como um prato distintamente norte-americano ao longo do século XX. Tornou-se popular devido à sua simplicidade e conforto, sendo amplamente consumido durante a Grande Depressão e além. A Kraft Foods desempenhou um papel importante ao introduzir uma versão pré-embalada em 1937. O prato é considerado um ícone da culinária dos EUA, com variações regionais e culturais, e é apreciado como comida de conforto em todo o país
                  </p>

                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/usa-3.3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Limonada rosa</h3>

                  <p class="fst-italic">
                    A limonada rosa, ou "pink lemonade," é uma bebida refrescante que tem origens incertas. Uma história popular afirma que um vendedor de limonada deixou cair morangos na bebida em 1857, resultando na coloração rosa. Outras teorias sugerem a adição de sucos de framboesa, groselha ou grenadine. Independentemente da origem, a limonada rosa se tornou uma bebida icônica nos Estados Unidos, especialmente em eventos como circos. Ela é apreciada por seu sabor ligeiramente adocicado e é uma opção refrescante durante os meses quentes de verão
                  </p>

                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/usa-4.4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Milkshake de baunilha</h3>

                  <p class="fst-italic">
                    milkshake de baunilha norte-americano tem suas origens no início do século XX, quando o sorvete foi adicionado às bebidas de leite, proporcionando uma textura cremosa e sabor rico. As lanchonetes e sorveterias desempenharam um papel essencial na popularização dos milkshakes. Essas bebidas geladas, especialmente a de baunilha, tornaram-se ícones culturais associados à cultura do drive-in e à juventude dos anos 1950. Com o tempo, surgiram inúmeras variações de sabores. Atualmente, o milkshake de baunilha continua a ser uma sobremesa clássica apreciada nos Estados Unidos, evocando nostalgia e representando a rica história da cultura alimentar norte-americana
                  </p>

                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/usa-5.5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Panqueca norte-americana</h3>

                  <p class="fst-italic">
                    As panquecas norte-americanas têm raízes ancestrais em várias culturas e foram influenciadas pela colonização europeia e tradições indígenas. Os colonizadores europeus trouxeram suas receitas de panquecas, que gradualmente incorporaram ingredientes nativos, como o xarope de bordo. Ao longo do tempo, as panquecas se popularizaram e evoluíram para incluir inúmeras variações. Elas se tornaram um alimento icônico nos Estados Unidos, frequentemente apreciado com xarope de bordo e manteiga, e são uma parte querida da culinária norte-americana, servidas em cafés e restaurantes em todo o país
                  </p>

                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/usa-6.6.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Torta de maça</h3>

                  <p class="fst-italic">
                    A torta de maçã norte-americana tem origens europeias trazidas pelos colonos que incorporaram maçãs locais às receitas. Ela se desenvolveu regionalmente nos Estados Unidos, com tradições diferentes em várias áreas. A torta de maçã tornou-se uma sobremesa icônica, particularmente associada às celebrações de Ação de Graças, e desempenhou um papel significativo na cultura popular. Com o tempo, surgiram variações e inovações, mas a versão clássica continua a ser uma parte querida da culinária norte-americana, frequentemente servida com sorvete de baunilha
                  </p>

                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->

@endsection
