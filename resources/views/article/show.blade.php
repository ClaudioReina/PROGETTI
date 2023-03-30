<x-layout>
    
    <div class="container-fluid px-5">
        <div class="row py-5 mt-5">
            
            <div class="col-12 col-lg-3 centerMod">  
            <div class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($article->image as $key => $image)
                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                    <img src="{{!$article->image()->get()->isEmpty() ? $article->image()->first()->getUrl(500, 500) : '/media/ImmagineSalvaposto.jpg'}}" class="card-img-top img-custom" alt="...">
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
            <div class="col-12 col-lg-6  mt-5">   
                <h5 class="display-4 robotoFont">{{$article->title}}</h5>             
                <p class="display-2">{{$article->price}} €</p>
                <p class=" text-muted">{{$article->description}}</p>
            </div>
            
        </div>            
            <div class="col-4 col-md-2 ">
                <a href="{{route('article.index')}}" class="btn btn-contact2">{{__('ui.TornaIndietro')}}</a>
            </div>
        </div>
    </div>
    


    
</x-layout>