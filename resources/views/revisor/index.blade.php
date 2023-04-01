<x-layout>
        
    <div class="container-fluid p-5 bg-gradient bg-success shadow ">
        <div class="row">
            <div class="col-12 text-light d-flex">
                <h1 class="display-2 ms-5 ps-3">
                    {{ $article_to_check ? 'Ecco l\'annucio da revisionare.' : 'Non ci sono annunci da revisionare.' }}
                </h1>
                <div class="fs-4">
                    <span class="position-relative ms-5 translate-middle badge rounded-pill bg-danger">
                        {{ App\Models\Article::toBeRevisionedCount()}}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <x-messages />

    @if ($article_to_check)
        <div class="container-fluid bg-transparent">
            <div class="row text-center bg-light py-5">
                <div class="col-12 col-md-6 fw-bold display-6">{{__('ui.revisionImg')}}</div>
                <div class="col-12 col-md-6 fw-bold display-6">{{__('ui.tags')}}</div>
            </div>
            <div class="row text-center bg-light">
                <div id="carouselExampleControls" class="carousel carousel-fade backGroundRevisor" data-bs-ride="carousel">
                    <div class="carousel-inner d-flex align-items-center">
                        @foreach ($article_to_check->image as $key => $image)
                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                <div class="card-body d-flex text-white">
                                    <div class="col-md-6">
                                        <p>Adulti: <span class="{{ $image->adult }} shadow"></span></p>
                                        <p>Satira: <span class="{{ $image->spoof }} shadow"></span></p>
                                        <p>Medicina: <span class="{{ $image->medical }} shadow"></span></p>
                                        <p>Violenza: <span class="{{ $image->violence }} shadow"></span></p>
                                        <p>Contenuto Esplicito: <span class="{{ $image->racy }} shadow"></span></p>
                                    </div>
                                    <div class="col-md-4 me-5 pe-5 d-flex">
                                        <div class="my-auto">
                                            @if ($image->labels)
                                                @foreach ($image->labels as $label)
                                                <p class="d-inline">{{$label}},</p>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <img src="{{!$article_to_check->image()->get()->isEmpty() ? $image->getUrl(500, 500) : '/media/ImmagineSalvaposto.jpg'}}" class="card-img-top img-custom rounded-5 mt-5 immagineResp" alt="...">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid ms-5 mt-5 pt-3">
            <div class="row mt-3">
                <div class="col-md-9">
                    <h5 class="card-title mt-3"><span class="fw-bold">{{__('ui.title')}}: </span>{{ $article_to_check->title }}</h5>
                    <p class="card-text mt-2"><span class="fw-bold">{{__('ui.publishedBy')}}: </span>{{ $article_to_check->user->name }}</p>
                    <p class="card-text mt-2"><span class="fw-bold">{{__('ui.description')}}: </span>{{ $article_to_check->description }}</p>
                    <p class="card-footer mt-2"><span class="fw-bold">{{__('ui.published')}}: </span>{{ $article_to_check->created_at->format('d/m/Y') }}</p>
                    <div class="d-flex">
                        <div class="">
                            <form action="{{ route('revisor.accept_article', ['article' => $article_to_check]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success shadow me-2">{{__('ui.accept')}}</button>
                            </form>
                        </div>
                        <div class="">
                            <form action="{{ route('revisor.reject_article', ['article' => $article_to_check]) }}"
                                method="POST" class="mx-auto">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-danger shadow ms-2">{{__('ui.refuse')}}</button>
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
