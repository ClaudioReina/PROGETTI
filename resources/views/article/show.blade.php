<x-layout>
    
    <div class="container-fluid px-5 createBackground">
        <div class="row py-5 mt-5 navbarColor rounded-3">
            <div class="col-12 col-lg-4 centerMod mx-auto text-center">  
                
                
                {{-- carosello --}}
                
                <div class="swiper mySwiper2 btnSwiper">
                    <div class="swiper-wrapper">
                        @foreach ($article->image as $key => $image)
                        <div class="swiper-slide">
                            <img src="{{!$article->image()->get()->isEmpty() ? $image->getUrl(500, 500) : '/media/ImmagineSalvaposto.jpg'}}" class="card-img-top img-custom rounded-3" alt="...">
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($article->image as $key => $image)
                        <div class="swiper-slide py-1">
                            <img class="rounded-3" src="{{ !$article->image()->get()->isEmpty() ? $image->getUrl(500, 500) : '/media/ImmagineSalvaposto.jpg' }}" />
                        </div>
                        @endforeach
                    </div>
                </div>
                
                {{-- fine carosello --}}
                
            </div>
            <div class="col-12 col-lg-6 pt-sm-5  mt-5">   
                <h5 class="display-4 robotoFont">{{$article->title}}</h5>             
                <p class="display-2">{{$article->price}} €</p>
                <p class=" text-muted">{{$article->description}}</p>
            </div>
            <div class="col-4 col-md-2 ps-sm-5 ms-sm-5 mt-3 pt-5">
                <a href="{{route('article.index')}}" class="btn btn-contact2">{{__('ui.goBack')}}</a>
            </div>
            
        </div>            
        <div class="spaced"></div>
    </div>
</div>



</x-layout>