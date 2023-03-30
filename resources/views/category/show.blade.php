<x-layout>

<div class="container-fluid categoryContainer ">
    <div class="row">

        <div class="col-12 text-center text-white hidden mb-2">
            <h1>{{$category->name}}</h1>
        </div>
        @if(count($articles) > 0)
            @foreach ($articles as $article)
            <div class="col-12 col-md-12 col-lg-6 py-2 mb-3 text-white d-flex justify-content-center">
                    <div class="h-100">
                        <img src="{{!$article->image()->get()->isEmpty() ? Storage::url($article->image()->first()->path) : '/media/ImmagineSalvaposto.jpg'}}" class="card-img-top img-custom" alt="...">
                    </div>
                    <div class="cardCustom d-flex border h-100">
                        <div class="card-body ms-3">
                            <h5 class="card-title mt-3">{{Str::limit($article->title, 30)}}</h5>
                            <h6 class="card-text fst-italic">{{$article->price}} €</h6>     
                            <p class="fs-3 txSec">{{$article->category}}</p>                  
                            <p class="card-text text-white small text-muted">{{Str::limit($article->description, 20)}}</p>
                            <p>{{__('ui.CreatoDa')}} <a class="txSec" href="{{route('profile', ['user' => $article->user->id])}}">{{$article->user->name ?? 'Utente sconosciuto'}}</a>, il {{$article->created_at->format('d/m/Y')}}</p>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-contact2 mb-4">{{__('ui.DettagliCard')}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
        <div class="col-12 text-center mt-5 text-white hidden">
            <h4>{{__('ui.NessunArticoloIndex')}}</h4>
        </div>
        @endif
    </div>
    <div class="container-fluid spacedSm">
    </div>
</div>


</x-layout>