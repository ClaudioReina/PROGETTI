<x-layout>
    
    <div class="container-fluid px-5">
        <div class="row py-5 mt-5">
            <div class="col-12 col-lg-4 centerMod mx-auto text-center">  
                <div class="carousel slide" data-bs-ride="carousel">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner d-flex align-items-center">
                            @foreach ($article->image as $key => $image)
                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                    <img src="{{!$article->image()->get()->isEmpty() ? $image->getUrl(500, 500) : '/media/ImmagineSalvaposto.jpg'}}" class="card-img-top img-custom rounded-5" alt="...">
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
            <div class="col-12 col-lg-6  mt-5">   
                <h5 class="display-4 robotoFont">{{$article->title}}</h5>             
                <p class="display-2">{{$article->price}} €</p>
                <p class=" text-muted">{{$article->description}}</p>
            </div>
            
        </div>            
            <div class="col-4 col-md-2 pt-5 mt-5">
                <a href="{{route('article.index')}}" class="btn btn-contact2">{{__('ui.goBack')}}</a>
            </div>
        </div>
    </div>
    


    
</x-layout>