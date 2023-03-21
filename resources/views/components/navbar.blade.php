<nav class="navbar navbar-expand-lg navbar-dark nav_custom">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="{{route('homepage')}}"><img src="/media/presto.it__1_-removebg-preview.png" style="width: 50px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="nav-link active text-white" aria-current="page" href="{{ route('homepage') }}">Home</a>
            <ul class="navbar-nav  mb-2  mb-lg-0 m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">Lavora con noi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('article.index')}}">Indice Prodotti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('category.create')}}">Crea Categoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('article.create')}}">Crea Prodotto</a>
                </li>
            </ul>
            {{-- GUEST --}}
            <div class="nav-item dropdown text-black">
                <a class="nav-link dropdown-toggle me-5 text-white" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-person-fill text-white display-6"></i>
                </a>
                @guest
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                        <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                    </ul>
                @else
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Profilo</a></li>
                        <li>
                          <button class="dropdown-item"
                                onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Esci
                              </button>
                        </li>
                        <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">@Csrf</form>
                    </ul>
                @endguest

            </div>
        </div>
    </div>
</nav>
