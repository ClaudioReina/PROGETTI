<div>
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black shadow">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="/media/presto.it__1_-removebg-preview.png" style="width: 100px;" alt="logo">
                                        <h4 class="my-1">Presto.it</h4>
                                    </div>
                                    
                                    <form wire:submit.prevent="update">
                                        @csrf
                                        
                                        <p class="my-2 text-center">{{__('ui.editAds')}}</p>
                                        
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="title">{{__('ui.name')}}</label>
                                            <input value="{{old('title')}}" type="title" wire:model="title" id="title"
                                            class="form-control"/>
                                        </div>
                                        
                                        <div class="form-outline mb-4">
                                            <label class="form-label me-2 my-3" for="categories">{{__('ui.category')}}:</label>
                                            <select wire:model="category" id="categories">
                                                <option value="">{{__('ui.selectCategory')}}</option>
                                                @foreach ($categories as $category)
                                                <option value="{{$category->name}}">
                                                    {{$category->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <!-- ANTEPRIMA NUOVE IMMAGINI -->
                                        <div class="form-outline mt-4">
                                            <input wire:model="temporary_images" multiple class="form-control @error('temporary_images.*') is-invalid @enderror" placeholder="image" type="file">
                                            @error('temporary_images.*')
                                                <p class="text-danger mt-2">{{$message}}</p>
                                            @enderror
                                        </div>
                                        @if (!empty($images))
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="mt-4 mb-1">{{__('ui.preview')}}:</p>
                                                    <div class="row border border-dark rounded shadow py-4">
                                                        @foreach ($images as $key => $image)
                                                            <div class="col my-3">
                                                                <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});">
                                                                </div>
                                                                <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeTemporaryImage({{ $key }})">
                                                                    {{__('ui.cancel')}}
                                                                </button>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endif  

                                        <div class="form-outline mb-4">
                                            <label class="form-label mt-3" for="price">{{__('ui.price')}}</label>
                                            <input type="price" wire:model="price" id="price"
                                            class="form-control"/>
                                        </div>
                                        
                                        <div class="form-outline mb-4">
                                            <label class="form-label mt-2" for="description">{{__('ui.description')}}</label>
                                            <textarea type="text" wire:model="description" id="description"
                                            class="form-control" cols="7" rows="3"></textarea>
                                        </div>
                                        
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn text-white btn-block gradient-custom-2 mb-3" type="submit">{{__('ui.editAds')}}</button>
                                        </div>                                        
                                    </form>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">{{__('ui.title1')}}</h4>
                                    <ol>
                                        <li><h5>1. {{__('ui.point1')}}</h5>
                                            <p>{{__('ui.textlg1')}}</p>
                                        </li>
                                        <li><h5>2. {{__('ui.point2')}}</h5>
                                            <p>{{__('ui.textlg2')}}</p>
                                        </li>
                                        <li><h5>3. {{__('ui.point3')}}</h5>
                                            <p>{{__('ui.textlg3')}}</p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ANTEPRIMA VECCHIE IMMAGINI -->  
                    <div class="row mt-5">
                        <h4 class="my-4">{{__('ui.previously_uploaded_images')}}</h4>
                        @if($article->image)
                        <div class="d-flex bg-white border border-dark rounded shadow py-4">
                            @foreach ($paths as $path)
                                <div class="d-inline mx-auto">
                                    
                                    <img class="img-preview mx-auto shadow rounded" src="{{ asset('storage/' . $path) }}" alt="">
                                    <button class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removePath('{{ $path }}')">Elimina</button>
                                    
                                </div>
                            @endforeach
                        </div>
                        @endif
                    </div>                                      
                </div>
            </div>
        </div>
    
    <div class="container-fluid spaced">
    </div>
</div>

