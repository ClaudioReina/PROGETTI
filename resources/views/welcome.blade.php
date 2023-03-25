<x-layout>

    <div class="container-fluid bg_homepage centerMod">
        <div>
            <h1 class="text-center titolo-animato title_custom"><span class="display-1 fw-bold">
                Presto.it</span><br><span>shop online</span>
            </h1>
        </div>
        <div class="row ">
            <div class="col-12 col-md-6 ps-5 py-5 text-center text-white ">
                <x-messages />
                @auth
                    <h2 class="centerModPlus mt-2 fs-1">Benvenuto {{ Auth::user()->name }}</h2>
                    <a href="{{ route('article.create') }}" class="btn btn-contact mt-5 shadow centerModPlus" type="button">Inserisci
                        annuncio</a>
                @endauth
            </div>
            <div class="col-12 col-md-4 py-5 text-white text-center centerMod">
                <h1>Presto.it fa al caso tuo!</h1>
                <h3>Mostra a tutti cos'hai da offrire</h3>
                <p>Nato nel 2023, Presto.it si differenzia dai competitors per la sua accessibilità.
                    Puoi immergerti tra gli annunci di varie categorie, acquistare il prodotto che più desideri
                    o caricare quello che non ti serve più. E non è finita qui!
                    Vuoi unirti al team di Presto.it? Compila il form e attendi l'accettazione
                    dell'admin.
                    E' tutto così semplice? Sì, noi siamo PRESTO.IT!
                </p>
                <div class="d-flex justify-content-around mx-auto text-center">
                    <a href="{{ route('article.index') }}">
                        <div class="personal_icon personal"><img
                                src="https://img.icons8.com/color/48/null/search--v1.png" /></div>
                    </a>
                    <a href="{{ route('article.index') }}">
                        <div class="personal_icon"><img src="https://img.icons8.com/ios/50/000000/cash-in-hand.png" />
                        </div>
                    </a>
                    <a href="{{ route('profile', Auth::id())}}">
                        <div class="personal_icon icon"><img
                                src="https://img.icons8.com/ios-glyphs/30/000000/working-with-a-laptop.png" /></div>
                    </a>
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
                        <p class="text-white text-center fs-5">Elettrodomestici</p>
                    </div>
                    <div class="carousel-item">
                        <img width="120" src="https://img.icons8.com/dotty/80/000000/multiple-smartphones.png" />
                        <p class="text-white text-center fs-5">Telefonia</p>
                    </div>
                    <div class="carousel-item">
                        <img width="120" src="https://img.icons8.com/carbon-copy/100/null/car--v1.png" />
                        <p class="text-white text-center fs-5">Veicoli</p>
                    </div>
                    <div class="carousel-item">
                        <img width="120" src="https://img.icons8.com/dotty/80/null/home-page.png" />
                        <p class="text-white text-center fs-5">Per la Casa</p>
                    </div>
                    <div class="carousel-item">
                        <img width="120" src="https://img.icons8.com/carbon-copy/100/null/petanque.png" />
                        <p class="text-white text-center fs-5">Per lo Sport</p>
                    </div>
                    <div class="carousel-item">
                        <img width="120" src="https://img.icons8.com/dotty/80/null/guitar.png" />
                        <p class="text-white text-center fs-5">Strumenti</p>
                    </div>
                    <div class="carousel-item">
                        <img width="120" src="https://img.icons8.com/dotty/80/null/pets.png" />
                        <p class="text-white text-center fs-5">Per gli Animali</p>
                    </div>
                    <div class="carousel-item">
                        <img width="120" src="https://img.icons8.com/dotty/80/null/book-shelf.png" />
                        <p class="text-white text-center fs-5">Cultura</p>
                    </div>
                    <div class="carousel-item">
                        <img width="120" src="https://img.icons8.com/dotty/80/null/camera-addon.png" />
                        <p class="text-white text-center fs-5">Fotografia</p>
                    </div>
                    <div class="carousel-item">
                        <img width="120" src="https://img.icons8.com/carbon-copy/100/null/controller.png" />
                        <p class="text-white text-center fs-5">Console e Videogiochi</p>
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
                            <h3 class="text-white robotoFont display-5">Il nostro servizio è<div id="testo-cambiante"
                                    class="text-danger"></div>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- FINE CAROSELLO --}}

    <div class="container-fluid backWelcome2">
        <div class="row pb-5">
            <div class="col-12 text-center">
                <h3 class="text-white mb-5 display-4 robotoFont">Ultimi prodotti caricati</h3>
            </div>
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 mx-auto ">
                    <div class="card cardCust shadow cardElements marginForMobile">
                        @if (!$article->cover)
                            <img src="/media/ImmagineSalvaposto.jpg" class="img-fluid card-img-top"
                                alt="immagine non trovata">
                        @else
                            <img src="{{ Storage::url($article->cover) }}" class="img-fluid card-img-top"
                                alt="{{ $article->name }}">
                        @endif
                        <div class="card-body ">
                            <h5 class="card-title animate__animated animate__bounceIn robotoFont fs-4 text-center">
                                {{ $article->title }}</h5>
                            <p class="card-text fst-italic fw-bold text-center">{{ $article->price }} €</p>
                            <p class="card-text text-muted">{{ Str::limit($article->description, 50) }}</p>
                            <p>Creato da {{ $article->user->name ?? 'Utente sconosciuto' }}, il
                                {{ $article->created_at->format('d/m/Y') }}</p>
                            <a href="{{ route('article.show', compact('article')) }}"
                                class="btn btn-contact2">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>

    <div class="container-fluid form_bg">
        <div class="row ">
            <div class="col-12 col-md-6 text-white ms-5 ">
                <h4 class="display-4">Vuoi restare informato sui nuovi annunci?</h4>
                <h5 class="display-6">Clicca sul bottone e compila il form di adesione alla<p class="txMain">
                        newsletter</p>
                </h5>
                <button class="btn-contact"> Iscriviti alla newsletter
                </button>
            </div>
        </div>
    </div>



</x-layout>
