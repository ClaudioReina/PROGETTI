<x-layout>
    
    <div class="container-fluid containerIndexCustom pt-3 text-white">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h2 class="robotoFont mt-3">{{__('ui.availableAds')}}</h2>
            </div>
        </div>

        <x-messages />

        {{-- SEARCH INPUT --}}
        <div class="row justify-content-center">
            <div class="col-8 py-5">
                <form action="{{route('articles.search')}}" method="GET" class="d-flex">
                    <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark" type="submit">{{__('ui.search')}}</button>
                </form>
            </div>
        </div>
        
        {{-- CARD PRODOTTO --}}
        <div class="row py-5 hidden justify-content-around centerMod">
            @forelse ($articles as $article)
                <div class="col-12 col-md-10 col-lg-5 py-2 mb-3 text-white d-flex justify-content-center CardMobileIndex">
                    <div class="h-100">
                        <img src="{{!$article->image()->get()->isEmpty() ? $article->image()->first()->getUrl(500, 500) : '/media/ImmagineSalvaposto.jpg'}}" class="card-img-top img-custom" alt="...">
                    </div>
                    <div class="cardCustom d-flex border h-100">
                        <div class="card-body ms-3">
                            <h5 class="card-title mt-3">{{Str::limit($article->title, 30)}}</h5>
                            <h6 class="card-text fst-italic">{{$article->price}} €</h6>     
                            <p class="fs-3 txSec">{{$article->category}}</p>                  
                            <p class="card-text text-white small text-muted">{{Str::limit($article->description, 20)}}</p>
                            <p>{{__('ui.create')}} <a class="txSec" href="{{route('profile', ['user' => $article->user->id])}}">{{$article->user->name ?? 'Utente sconosciuto'}}</a>, il {{$article->created_at->format('d/m/Y')}}</p>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-contact2 mb-4">{{__('ui.details')}}</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center mt-5">
                    <p>{{__('ui.noAds')}}</p>
                    <a href="{{ route('article.create') }}" class="btn btn-contact mt-5 shadow centerModPlus" type="button">{{__('ui.createAds')}}</a>
                </div>
            @endforelse
        </div>
            
        {{-- PAGINATION BUTTON --}}
        <div class="row justify-content-center">
            <div class="col-1 d-flex lead fw-bold mt-3 rounded">
                @if ($articles->currentPage() > 1)
                    <div class="text-center text-white"><a href="{{ $articles->previousPageUrl() }}"><i class="fa fa-angle-left text-white"></i></a></div>
                @endif
        
                @for ($i = 1; $i <= $articles->lastPage(); $i++)
                    <div  class="text-center mx-auto text-white {{ ($i == $articles->currentPage()) ? ' active' : '' }}">
                        <a class="text-white mx-3" href="{{ $articles->url($i) }}">{{ $i }}</a>
                    </div>
                @endfor

                @if ($articles->hasMorePages())
                    <div><a href="{{ $articles->nextPageUrl() }}"><i class="fa fa-angle-right text-white"></i></a></div>
                @endif        
            </div>
        </div>

        <div class="container-fluid spaced">
        </div>
    </div>
    
</x-layout>