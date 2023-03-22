<x-layout>

    <div class="container-fluid px-5">
        <div class="row py-5">
            <h5 class="display-4 text-center mb-5">{{$article->title}}</h5>             
            <div class="col-12 col-lg-6 mx-auto">  
                @if (!$article->cover)
                    <img src="/media/ImmagineSalvaposto.jpg" class="img-fluid card-img-top rounded-5" alt="immagine non trovata">
                @else
                    <img src="{{Storage::url($article->cover)}}" class="img-fluid card-img-top rounded-5" alt="{{$article->name}}">
                @endif
            </div>
            <div class="col-12 col-lg-6 mx-auto">   
                <p class="display-2">{{$article->price}} €</p>
                <p class=" text-muted">{{Str::limit($article->description,30)}}</p>
            </div>
        </div>
        <div class="row justify-content-between py-5">
            <div class="col-8 col-md-2">
                <a href="{{route('article.edit', compact('article'))}}" class="btn btn-secondary">Modifica</a>

            </div>
           

            <div class="col-4 col-md-2">
                <a href="{{route('article.index')}}" class="btn btn-secondary">Torna indietro</a>
            </div>
        </div>
    </div>
    
</x-layout>