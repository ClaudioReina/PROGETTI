<x-layout>
    
<div class="container-fluid p-5 bg-gradient bg-success shadow ">
    <div class="row">
        <div class="col-12 text-light">
            <div class="d-flex">
                <div class="">
                    <h1 class="display-2 ms-5 ps-3">
                        {{ $article_to_check ? 'Ecco l\'annucio da revisionare.' : 'Non ci sono annunci da revisionare.' }}
                    </h1>
                </div>
                <div class="fs-4">
                    <span class="position-relative ms-5 translate-middle badge rounded-pill bg-danger">
                    {{ App\Models\Article::toBeRevisionedCount()}}
                    </span>
                </div>
            </div>

            
        </div>
    </div>
</div>
    {{-- <x-messages /> --}}
    @if ($article_to_check)
    <div class="container mt-5 pt-3">
        <div class="row">
            <div class="col-12 col-lg-3 centerMod ">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            @if (!$article_to_check->cover)
                                <img src="https://picsum.photos/300" class="img-fluid card-img-top rounded-5" alt="immagine non trovata">
                            @else
                                <img src="{{Storage::url($article_to_check->cover)}}" class="img-fluid card-img-top rounded-5" alt="{{$article_to_check->name}}">
                            @endif
                        </div>
                        <div class="carousel-item">
                            @if (!$article_to_check->cover)
                                <img src="https://picsum.photos/301" class="img-fluid card-img-top rounded-5" alt="immagine non trovata">
                            @else
                                <img src="{{Storage::url($article_to_check->cover)}}" class="img-fluid card-img-top rounded-5" alt="{{$article_to_check->name}}">
                            @endif
                        </div>
                        <div class="carousel-item">
                            @if (!$article_to_check->cover)
                                <img src="/media/ImmagineSalvaposto.jpg" class="img-fluid card-img-top rounded-5" alt="immagine non trovata">
                            @else
                                <img src="{{Storage::url($article_to_check->cover)}}" class="img-fluid card-img-top rounded-5" alt="{{$article_to_check->name}}">
                            @endif
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <h5 class="card-title mt-3"><span class="fw-bold">Titolo: </span>{{ $article_to_check->title }}</h5>
        <p class="card-text mt-2"><span class="fw-bold">Descrizione: </span>{{ $article_to_check->description }}</p>
        <p class="card-footer mt-2"><span class="fw-bold">Pubblicato il: </span>{{ $article_to_check->created_at->format('d/m/Y') }}</p>
        <div class="d-flex">
        <div class="">
            <form action="{{ route('revisor.accept_article', ['article' => $article_to_check]) }}"
                method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-success shadow me-2">Accetta</button>
            </form>
        </div>
        <div class="">
            <form action="{{ route('revisor.reject_article', ['article' => $article_to_check]) }}"
                method="POST" class="mx-auto">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-danger shadow ms-2">Rifiuta</button>
            </form>
        </div>
    </div>
    @endif
</div>

<div class="container-fluid spacedSm">
</div>
</x-layout>
