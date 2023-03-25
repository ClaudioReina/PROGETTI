<nav class="navbar navbarCustom navbarColor navbar-expand-lg sticky-top transizione">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="{{ route('homepage') }}"><img src="/media/presto.it__1_-removebg-preview.png"
                style="width: 50px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="nav-link active linkCustom" aria-current="page" href="{{ route('homepage') }}">Home</a>
            <ul class="navbar-nav mb-2 mb-lg-0 m-auto">
                <li class="nav-item">
                    <a class="nav-link linkCustom" href="{{route('become.revisor')}}">Diventa revisore</a>
                </li>           
                <li class="nav-item">
                    <a class="nav-link linkCustom" href="{{ route('article.index') }}">Indice Prodotti</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle linkCustom" href="#" id="categoriesDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item"
                                    href="{{ route('category.show', compact('category')) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link linkCustom" href="{{ route('article.create') }}">Crea Prodotto</a>
                </li>
            </ul>
            {{-- GUEST --}}
            <div class="nav-item dropdown text-black">
                <a class="nav-link dropdown-toggle me-5 " href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-person-fill display-6 user-icon"></i>
                </a>
                @guest
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                        <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                    </ul>
                @else
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('profile', Auth::id())}}">Profilo</a></li>
                        <li>
                            <button class="dropdown-item"
                                onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Esci
                            </button>
                        </li>
                        <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">@Csrf</form>
                    </ul>
                @endguest
            </div>
            <form action="{{route('articles.search')}}" method="GET" class="d-flex">
                <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
        </div>
    </div>
</nav>
