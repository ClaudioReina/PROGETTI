<x-layout>

    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <h1>Presto.it fa al caso tuo!</h1>
                <h3>Mostra a tutti cos'hai da offrire</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit soluta est, itaque, repellendus vitae
                    alias nostrum praesentium laboriosam incidunt dolore maxime ducimus fuga natus, totam placeat
                    dolorum optio illum delectus.
                </p>
                @auth
                    <a href="{{route('article.create')}}" class="btn btn-primary" type="button">Inserisci annuncio</a>
                @endauth
            </div>
            <div class="col-12 col-md-8">

            </div>
        </div>
        <div class="row py-5">
            @if(count($articles))
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 mx-auto">
                    <div class="card shadow">
                        @if (!$article->cover)
                            <img src="/media/ImmagineSalvaposto.jpg" class="img-fluid card-img-top" alt="immagine non trovata">
                        @else
                            <img src="{{Storage::url($article->cover)}}" class="img-fluid card-img-top" alt="{{$article->name}}">
                        @endif
                        <div class="card-body">
                          <h5 class="card-title">{{$article->title}}</h5>
                          <p class="card-text">{{$article->price}} €</p>
                          <p class="card-text text-muted">{{Str::limit($article->description,50)}}</p>
                          <p>Creato da {{$article->user->name ?? 'Utente sconosciuto'}}, il {{$article->created_at->format('d/m/Y')}}</p>
                          <a href="{{route('article.show', compact('article'))}}" class="btn btn-secondary">Dettagli</a>
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

    <div class="container-fluid form_bg">
        <div class="row">
        <div class="col-12 col-md-6 text-white">
            <h4 class="display-4">Vuoi restare informato sui nuovi annunci?</h4>
            <h5 class="display-6">Clicca sul bottone e compila il form di adesione alla<p class="txMain">newsletter</p></h5>
            <button class="btn"> Iscriviti alla newsletter
            </button>
        </div>
        </div>
    </div>
</x-layout>
