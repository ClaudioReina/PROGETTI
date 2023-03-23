<x-layout>

    <div class="container-fluid containerIndexCustom mt-3">
        <div class="row">
            <div class="col-12 text-center ">
                <h2 class="robotoFont mt-3">I nostri articoli</h2>
            </div>
        </div>
        {{-- CARD ARTICOLO --}}
        <div class="row py-5 hidden justify-content-around">
            @if(count($articles))
            @foreach ($articles as $article)
                <div class="col-12 col-md-4 py-2 divCustom">
                    <div class="cardCustom d-flex border ">
                        @if (!$article->cover)
                            <img src="/media/ImmagineSalvaposto.jpg" class="img-fluid card-img-top img-custom" alt="immagine non trovata">
                        @else
                            <img src="{{Storage::url($article->cover)}}" class="img-fluid card-img-top" alt="{{$article->name}}">
                        @endif
                        <div class="card-body ms-3 py-auto">
                          <h5 class="card-title">{{$article->title}}</h5>
                          <p class="card-text">{{$article->price}} €</p>
                          <p class="card-text text-muted">{{Str::limit($article->description,50)}}</p>
                          <p>Creato da {{$article->user->name ?? 'Utente sconosciuto'}}, il {{$article->created_at->format('d/m/Y')}}</p>
                          <a href="{{route('article.show', compact('article'))}}" class="btn btn-secondary buttonCustom">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
            <div class="col-12 text-center mt-5">
                <p>Non ci sono articoli!</p>
            </div>
            @endif
        </div>
    </div>

</x-layout>