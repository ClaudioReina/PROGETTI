<x-layout>
    
    <div class="container-fluid containerIndexCustom pt-3 text-white">
        <div class="row">
            <div class="col-12 text-center ">
                <h2 class="robotoFont mt-3">Annunci Disponibili</h2>
            </div>
        </div>
        <x-messages />
        {{-- CARD PRODOTTO --}}

<div class="row justify-content-center">
    <div class="col-8">
        <form action="{{route('articles.search')}}" method="GET" class="d-flex">
            <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button id="btn-search" class="btn btn-outline-dark" type="submit">{{__('ui.navbarSearch')}}</button>
        </form>
    </div>
</div>




        
        
        <div class="row py-5 hidden justify-content-around centerMod">
            @forelse ($articles as $article)
                <div class="col-12 col-md-6 py-2 mb-3 text-white d-flex justify-content-center">
                    <img src="{{!$article->image()->get()->isEmpty() ? Storage::url($article->image()->first()->path) : '/media/ImmagineSalvaposto.jpg'}}" class="card-img-top img-custom" alt="...">
                    <div class="cardCustom d-flex border">
                        <div class="card-body ms-3">
                            <h5 class="card-title mt-3">{{Str::limit($article->title, 30)}}</h5>
                            <h6 class="card-text fst-italic">{{$article->price}} €</h6>     
                            <p class="fs-3 txSec">{{$article->category}}</p>                  
                            <p class="card-text text-white small text-muted">{{Str::limit($article->description, 20)}}</p>
                            <p>Creato da <a class="txSec" href="{{route('profile', ['user' => $article->user->id])}}">{{$article->user->name ?? 'Utente sconosciuto'}}</a>, il {{$article->created_at->format('d/m/Y')}}</p>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-contact2 mb-4">Dettagli</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center mt-5">
                    <p>Non ci sono annunci!</p>
                    <a href="{{ route('article.create') }}" class="btn btn-contact mt-5 shadow centerModPlus" type="button">
                        Inserisci annuncio
                    </a>
                </div>
            @endforelse
        </div>
        <div class="container-fluid spaced">
        </div>
    </div>
    
</x-layout>