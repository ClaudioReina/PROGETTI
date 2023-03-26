<x-layout>

<div class="container-fluid containerIndexCustom pt-3 text-white">
    <div class="row">
        <div class="col-12 text-center ">
            <h2 class="robotoFont mt-3">Annunci Disponibili</h2>
        </div>
    </div>
    <x-messages />
    {{-- CARD PRODOTTO --}}
    <div class="row py-5 hidden justify-content-around centerMod">
        
        
        @forelse ($articles as $article)
                <div class="col-12 col-md-12 py-2 mb-3 d-flex justify-content-center">
                    <div class="cardCustom d-flex border">
                        @if (!$article->cover)
                            <img src="/media/ImmagineSalvaposto.jpg" class="img-fluid card-img-top img-custom my-auto" alt="immagine non trovata">
                        @else
                            <img src="{{Storage::url($article->cover)}}" class="img-fluid card-img-top img-custom my-auto" alt="{{$article->name}}">
                        @endif
                        <div class="card-body ms-3">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->price}} €</p>     
                            <p>{{$article->category}}</p>                  
                            <p class="card-text text-white">{{Str::limit($article->description, 100)}}</p>
                            <p>Creato da <a class="txMain" href="{{route('profile', ['user' => $article->user->id])}}">{{$article->user->name ?? 'Utente sconosciuto'}}</a>, il {{$article->created_at->format('d/m/Y')}}</p>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-contact2 m-1">Dettagli</a>
                        </div>
                    </div>
                </div>
            @empty
            <div class="col-12 text-center mt-5">
                <p>Non ci sono annunci!</p>
            </div>
            @endforelse
    </div>
    <div class="container-fluid spaced">
    </div>
</div>

</x-layout>