<x-layout>
    
    <div class="container-fluid p-5 bg-gradient bg-success shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">
                    {{ $article_to_check ? 'Ecco l\'annucio da revisionare.' : 'Non ci sono annunci da revisionare.' }}
                </h1>
            </div>
        </div>
    </div>
    <x-messages />
    @if ($article_to_check)
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 col-md-8 py-5 mx-auto">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="/media/ImmagineSalvaposto.jpg" class="d-block w-50" alt="immagine non trovata">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="/media/ImmagineSalvaposto.jpg" class="d-block w-50" alt="immagine non trovata">
                        </div>
                        <div class="carousel-item">
                            <img src="/media/ImmagineSalvaposto.jpg" class="d-block w-50" alt="immagine non trovata">
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
<h5 class="card-title"><span class="fw-bold">Titolo: </span>{{ $article_to_check->title }}</h5>
<p class="card-text"><span class="fw-bold">Descrizione: </span>{{ $article_to_check->description }}</p>
<p class="card-footer"><span class="fw-bold">Pubblicato il: </span>{{ $article_to_check->created_at->format('d/m/Y') }}</p>
<div class="row">
    <div class="col-12 col-md-6 d-flex">
        <form action="{{ route('revisor.accept_article', ['article' => $article_to_check]) }}"
            method="POST">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-success shadow">Accetta</button>
        </form>
        <form action="{{ route('revisor.reject_article', ['article' => $article_to_check]) }}"
            method="POST" class="mx-auto">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
        </form>
    </div>
</div>
</div>
@endif

<div class="container-fluid spaced">
</div>
</x-layout>
