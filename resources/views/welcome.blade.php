<x-layout>

    <div class="container-fluid bg_homepage centerMod">
        <div class="row">
            <h1 class="text-center txSec hidden "><span class="display-1 fw-bold Shodow_text">
                Presto.it</span><br><span class=" fw-bold Shodow_text">shop online</span>
            </h1>
            <div class="py-2">
                <x-messages />
            </div>
        </div>
        <div class="row justify-content-evenly">
            <div class="col-12 col-md-5 py-5 text-center text-white welcomeMobile ">
                @auth
                    <h2 class="centerModPlus mt-5 fs-1">{{__('ui.welcome')}} {{ Auth::user()->name }}</h2>
                    <a href="{{ route('article.create') }}" class="btn btn-contact mt-5 shadow centerModPlus" type="button">
                        {{__('ui.createAds')}}
                    </a>
                @endauth
            </div>
            <div class="col-12 col-md-4 py-5 text-white text-center centerMod">
                <h1>{{__('ui.sloganOne')}}</h1>
                <h3>{{__('ui.sloganTwo')}}</h3>
                <p>{{__('ui.CTA')}}
                </p>
                <div class="d-flex justify-content-around mx-auto text-center">
                    <a href="{{ route('article.index') }}">
                        <div class="personal_icon personal">
                            <img src="https://img.icons8.com/color/48/null/search--v1.png" />
                        </div>
                    </a>
                    <a href="{{ route('article.index') }}">
                        <div class="personal_icon">
                            <img src="https://img.icons8.com/ios/50/000000/cash-in-hand.png" />
                        </div>
                    </a>
                    <a href="{{ route('profile', Auth::id())}}">
                        <div class="personal_icon icon">
                            <img src="https://img.icons8.com/ios-glyphs/30/000000/working-with-a-laptop.png" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- CAROSELLO CATEGORIE --}}
        <div id="carouselExampleControlsNoTouching"
            class="carousel slide text-center align-items-center py-5 bgMain data-bs-touch="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img width="120" src="https://img.icons8.com/dotty/80/null/appliances.png" />
                    <p class="text-white text-center fs-5">{{__('ui.category1')}}</p>
                </div>
                <div class="carousel-item">
                    <img width="120" src="https://img.icons8.com/dotty/80/000000/multiple-smartphones.png" />
                    <p class="text-white text-center fs-5">{{__('ui.category2')}}</p>
                </div>
                <div class="carousel-item">
                    <img width="120" src="https://img.icons8.com/carbon-copy/100/null/car--v1.png" />
                    <p class="text-white text-center fs-5">{{__('ui.category3')}}</p>
                </div>
                <div class="carousel-item">
                    <img width="120" src="https://img.icons8.com/dotty/80/null/home-page.png" />
                    <p class="text-white text-center fs-5">{{__('ui.category4')}}</p>
                </div>
                <div class="carousel-item">
                    <img width="120" src="https://img.icons8.com/carbon-copy/100/null/petanque.png" />
                    <p class="text-white text-center fs-5">{{__('ui.category5')}}</p>
                </div>
                <div class="carousel-item">
                    <img width="120" src="https://img.icons8.com/dotty/80/null/guitar.png" />
                    <p class="text-white text-center fs-5">{{__('ui.category6')}}</p>
                </div>
                <div class="carousel-item">
                    <img width="120" src="https://img.icons8.com/dotty/80/null/pets.png" />
                    <p class="text-white text-center fs-5">{{__('ui.category7')}}</p>
                </div>
                <div class="carousel-item">
                    <img width="120" src="https://img.icons8.com/dotty/80/null/book-shelf.png" />
                    <p class="text-white text-center fs-5">{{__('ui.category8')}}</p>
                </div>
                <div class="carousel-item">
                    <img width="120" src="https://img.icons8.com/dotty/80/null/camera-addon.png" />
                    <p class="text-white text-center fs-5">{{__('ui.category9')}}</p>
                </div>
                <div class="carousel-item">
                    <img width="120" src="https://img.icons8.com/carbon-copy/100/null/controller.png" />
                    <p class="text-white text-center fs-5">{{__('ui.category10')}}</p>
                </div>
                <button class="carousel-control-prev" type="button"
                    data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button"
                    data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="container-fluid ">
                <div class="row text-center display-4 text-bold">
                    <div class="col-12">
                        <h3 class="text-white robotoFont display-5">{{__('ui.sloganThree')}}<br> 
                            <span id="testo-cambiante" class="text-danger"></span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- FINE CAROSELLO --}}



    <div class="container-fluid backWelcome2">
        <div class="row pb-5">
            <div class="col-12 text-center">
                <h3 class="text-white mb-5 display-4 robotoFont">{{__('ui.sloganFour')}}</h3>
            </div>
            @foreach ($articles as $article)
                <div class="col-10 col-md-5 col-lg-3 mx-auto mb-5">
                    <div class="card cardCust shadow round cardElements">                        
                            <img src="{{!$article->image()->get()->isEmpty() ? $article->image()->first()->getUrl(500, 500) : '/media/ImmagineSalvaposto.jpg'}}" style="height: 325px; width: 325px;" class="card-img-top FormatImg img-custom " alt="...">
                     
                        <div class="card-body">
                            <h5 class="card-title animate__animated animate__bounceIn robotoFont fs-4 text-center">
                                {{ $article->title }}
                            </h5>
                            <p class="card-text fst-italic fw-bold text-center">{{ $article->price }} €</p>
                            <p class="card-text">{{ Str::limit($article->description, 20) }}</p>
                            <p> {{__('ui.create')}} 
                                <a class="txSec" href="{{route('profile', ['user' => $article->user->id])}}">
                                    {{$article->user->name ?? 'Utente sconosciuto'}}
                                </a> 
                                , {{$article->created_at->format('d/m/Y')}}
                            </p>
                            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-contact2">
                                {{__('ui.show')}}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container-fluid form_bg ps-5">
        <div class="row ps-5">
            <div class="col-12 hidden-right col-md-6 col-lg-7 text-white">
                <h4 class="display-4">{{__('ui.sloganFive')}}</h4>
                <h5 class="display-6">{{__('ui.sloganSix')}}
                    <span class="txMain">Newsletter</span>
                </h5>
                <button class="btn-contact mt-5">{{__('ui.subscribe')}}</button>
            </div>
        </div>
    </div>
    
</x-layout>
