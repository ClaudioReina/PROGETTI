<nav class="navbar navbarCustom navbarColor navbar-expand-lg sticky-top transizione">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="{{ route('homepage') }}"><img src="/media/presto.it__1_-removebg-preview.png" style="width: 50px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <li class="nav-item">
                <a class="nav-link active linkCustom linkCustomActive" aria-current="page" href="{{ route('homepage') }}">{{__('ui.Home')}}</a>
            </li>
            <ul class="navbar-nav mt-3  m-auto">         
                <li class="nav-item">
                    <a class="nav-link linkCustom linkCustomActive" href="{{ route('article.index') }}">{{__('ui.Index')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle linkCustom linkCustomActive mb-2" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('ui.category')}}</a>           
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item" href="{{ route('category.show', compact('category')) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link linkCustom linkCustomActive mb-2" href="{{ route('article.create') }}">{{__('ui.createAds')}}</a>
                </li>
                @auth
                    @if(!Auth::user()->is_revisor)
                        <li class="nav-item">
                            <a class="nav-link linkCustom linkCustomActive" href="{{ route('become-revisor') }}">{{__('ui.Revisor')}}</a>
                        </li>
                    @endif
                @endauth
            </ul>
            {{-- GUEST --}}
            <div class="nav-item dropdown text-black">
                @guest
                    <a class="nav-link dropdown-toggle me-5 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-fill display-6 user-icon"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('register') }}">{{__('ui.signIn')}}</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('login') }}">{{__('ui.logIn')}}</a>
                        </li>
                    </ul>
                @else
                    <a class="nav-link dropdown-toggle me-5 my-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @if(!Auth::user()->avatar)
                            <i class="bi bi-person-fill display-6 user-icon"></i>
                        @else 
                            <img class="avatar-icon user-icon" src="{{Storage::url(Auth::user()->avatar)}}" alt="">
                        @endif
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('profile', Auth::id())}}">{{__('ui.Profile')}}</a>
                        </li>
                        <li>
                            <button class="dropdown-item" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">{{__('ui.logOut')}}
                            </button>
                        </li>
                        <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">@Csrf</form>
                    </ul>
                @endguest
            </div>
            <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{__('ui.Languages')}}
                </a>
                <ul class="dropdown-menu dropdowndimention">
                    <li class="nav-item dropdown-item">
                        <x-_locale lang='it'/>
                    </li>
                    <li class="nav-item dropdown-item">
                        <x-_locale lang='en'/>
                    </li>
                    <li class="nav-item dropdown-item">
                        <x-_locale lang='es'/>
                    </li> 
                </ul>
            </li>
        </div>
    </div>
</nav>
