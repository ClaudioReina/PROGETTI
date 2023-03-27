<x-layout>
    
    <div class="container-fluid px-5">
        <div class="row py-5 mt-5">
            
            <div class="col-12 col-lg-3 centerMod">  
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                                @if (!$article->cover)
                                <img src="https://picsum.photos/300" class="img-fluid card-img-top rounded-5" alt="immagine non trovata">
                                @else
                                <img src="{{Storage::url($article->cover)}}" class="img-fluid card-img-top rounded-5" alt="{{$article->name}}">
                                @endif
                        </div>
                         <div class="carousel-item">
                            @if (!$article->cover)
                            <img src="https://picsum.photos/301" class="img-fluid card-img-top rounded-5" alt="immagine non trovata">
                            @else
                            <img src="{{Storage::url($article->cover)}}" class="img-fluid card-img-top rounded-5" alt="{{$article->name}}">
                            @endif
                        </div>
                        <div class="carousel-item">
                            @if (!$article->cover)
                            <img src="/media/ImmagineSalvaposto.jpg" class="img-fluid card-img-top rounded-5" alt="immagine non trovata">
                            @else
                            <img src="{{Storage::url($article->cover)}}" class="img-fluid card-img-top rounded-5" alt="{{$article->name}}">
                            @endif
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-lg-6  mt-5">   
                <h5 class="display-4 robotoFont">{{$article->title}}</h5>             
                <p class="display-2">{{$article->price}} €</p>
                <p class=" text-muted">{{$article->description}}</p>
            </div>
            
        </div>            
            <div class="col-4 col-md-2 ">
                <a href="{{route('article.index')}}" class="btn btn-contact2">Torna indietro</a>
            </div>
        </div>
    </div>
    


    
</x-layout>