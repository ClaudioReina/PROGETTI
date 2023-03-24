<x-layout>

    <div class="container-fluid containerIndexCustom mt-3 text-white">
        <div class="row">
            <div class="col-12 text-center ">
                <h2 class="robotoFont mt-3">Prodotti Disponibili</h2>
            </div>
        </div>
        {{-- CARD PRODOTTO --}}
        <div class="row py-5 hidden justify-content-around">
           {{--  @if(count($articles)) --}}
            @forelse ($articles as $article)
                <div class="col-12 col-md-6 py-2 divCustom">
                    <div class="cardCustom d-flex border mx-auto">
                        @if (!$article->cover)
                            <img src="/media/ImmagineSalvaposto.jpg" class="img-fluid card-img-top img-custom" alt="immagine non trovata">
                        @else
                            <img src="{{Storage::url($article->cover)}}" class="img-fluid card-img-top" alt="{{$article->name}}">
                        @endif
                        <div class="card-body ms-3 py-auto">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->price}} €</p>     
                            <p>{{$article->category}}</p>                  
                            {{-- <p class="card-text text-muted">{{Str::limit($article->description,50)}}</p> --}}
                            <p>Creato da {{$article->user->name ?? 'Utente sconosciuto'}}, il {{$article->created_at->format('d/m/Y')}}</p>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-secondary buttonCustom ">Dettagli</a>
                        </div>
                    </div>
                </div>
            @empty
            <div class="col-12 text-center mt-5">
                <p>Non ci sono prodotti!</p>
            </div>
            @endforelse
           
        </div>
    </div>

</x-layout>