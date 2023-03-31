<x-layout>
        
    <div class="container-fluid p-5 bg-gradient bg-success shadow ">
        <div class="row">
            <div class="col-6 text-light">
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

    <x-messages />

        {{-- @if ($article_to_check)
            <div class="container mt-5 pt-3">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 centerMod">
                        <div class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($article_to_check->image as $key => $image)
                                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                        <img src="{{!$article_to_check->image()->get()->isEmpty() ? $article_to_check->image()->first()->getUrl(500, 500) : '/media/ImmagineSalvaposto.jpg'}}" class="card-img-top img-custom" alt="...">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target=".carousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target=".carousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <img src="{{$image->getUrl(400, 300)}}" class="img-fluid p-3 rounded " alt="">
                    </div>
                    <div class="col-md-3 border-end">
                        <h5 class="tc-accent mt-3">
                            Tags
                        </h5>
                        <div class="p-2">
                            @if ($image->labels)
                            @foreach ($image->labels as $label )
                                <p class="d-inline">{{$label}},</p>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="card-body">
                            <h5 class="tc-accent">Revisione Immagini</h5>
                            <p>Adulti: <span class="{{$image->adult}}"></span></p>
                            <p>Satira: <span class="{{$image->spoof}}"></span></p>
                            <p>Medicina: <span class="{{$image->medical}}"></span></p>
                            <p>Violenza: <span class="{{$image->violence}}"></span></p>
                            <p>Contenuto Esplicito: <span class="{{$image->racy}}"></span></p>
                        </div>
                    </div>
                    <div class="col-12 border-end">
                        <h5 class=" mt-3">Tags</h5>
                        <div class="p-2">
                            @if ($image->labels)
                                @foreach ($image->labels as $label)
                                    <p class="d-inline">{{$label}}</p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <h5 class="card-title mt-3"><span class="fw-bold">{{__('ui.titolo')}}: </span>{{ $article_to_check->title }}</h5>
                <p class="card-text mt-2"><span class="fw-bold">{{__('ui.descrizione')}}: </span>{{ $article_to_check->description }}</p>
                <p class="card-footer mt-2"><span class="fw-bold">{{__('ui.pubblicato')}}: </span>{{ $article_to_check->created_at->format('d/m/Y') }}</p>
                <div class="d-flex">
                <div class="">
                    <form action="{{ route('revisor.accept_article', ['article' => $article_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success shadow me-2">{{__('ui.accettaRevisore')}}</button>
                    </form>
                </div>
                <div class="">
                    <form action="{{ route('revisor.reject_article', ['article' => $article_to_check]) }}"
                        method="POST" class="mx-auto">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger shadow ms-2">{{__('ui.rifiutaRevisore')}}</button>
                    </form>
                </div>
            </div>
        @endif --}}

    @if ($article_to_check)
        <div class="container-fluid mt-5 pt-3">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($article_to_check->image as $key => $image)
                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                    <img src="{{!$article_to_check->image()->get()->isEmpty() ? $article_to_check->image()->first()->getUrl(500, 500) : '/media/ImmagineSalvaposto.jpg'}}" class="card-img-top img-custom" alt="...">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target=".carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target=".carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-body">
                            <h5 class="tc-accent">{{__('ui.revisioneImmagini')}}</h5>
                            <p>Adulti: <span class="{{$image->adult}}"></span></p>
                            <p>Satira: <span class="{{$image->spoof}}"></span></p>
                            <p>Medicina: <span class="{{$image->medical}}"></span></p>
                            <p>Violenza: <span class="{{$image->violence}}"></span></p>
                            <p>Contenuto Esplicito: <span class="{{$image->racy}}"></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-body">
                            <h5 class="">{{__('ui.tags')}}</h5>
                            <div class="p-2">
                                @if ($image->labels)
                                    @foreach ($image->labels as $label )
                                        <p class="d-inline">{{$label}},</p>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-9">
                    <h5 class="card-title mt-3"><span class="fw-bold">{{__('ui.titolo')}}: </span>{{ $article_to_check->title }}</h5>
                    <p class="card-text mt-2"><span class="fw-bold">{{__('ui.descrizione')}}: </span>{{ $article_to_check->description }}</p>
                    <p class="card-footer mt-2"><span class="fw-bold">{{__('ui.pubblicato')}}: </span>{{ $article_to_check->created_at->format('d/m/Y') }}</p>
                    <div class="d-flex">
                        <div class="">
                            <form action="{{ route('revisor.accept_article', ['article' => $article_to_check]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success shadow me-2">{{__('ui.accettaRevisore')}}</button>
                            </form>
                        </div>
                        <div class="">
                            <form action="{{ route('revisor.reject_article', ['article' => $article_to_check]) }}"
                                method="POST" class="mx-auto">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-danger shadow ms-2">{{__('ui.rifiutaRevisore')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <div class="container-fluid spacedSm">
    </div>

</x-layout>
