<header id="header" class="fixed-top d-flex align-items-center header-transparent header-dynamic">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <div class="logo me-auto">
            <a href="/"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            <h1 class="align-middle"><a href="/">Sabores do Mundo</a></h1>
        </div>

        <div>
            <form action="{{ route('search') }}" id="search">
                <input type="text" name="search" id="search" style="width: 200px; margin-top: 15px;">
                <button>Enviar</button>
            </form>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="{{route('dashboard')}}">Ver receitas</a></li>
                <li><a class="nav-link scrollto" href="{{route('recipe.create')}}">Cadastrar receitas</a></li>

                @if (!Auth::check())
                <li><a class="nav-link scrollto" href="{{route('login')}}">Login</a></li>
                @else
                <li class="dropdown"><a href="#"><i class="fa-solid fa-user"></i><i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Minhas receitas</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
