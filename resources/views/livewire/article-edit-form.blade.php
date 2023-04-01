<div>
    <section class=" gradient-form">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black shadow">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    
                                   
                                    <div class="text-center">
                                        <img src="/media/logo.png" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Presto.it</h4>
                                    </div>
                                    
                                    <form wire:submit.prevent="update">
                                        @csrf
                                        <p class="my-5 text-center">Modifica annuncio</p>
                                        
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="title">{{__('ui.name')}}</label>
                                            <input value="{{old('title')}}" type="title" wire:model="title" id="title"
                                            class="form-control"/>
                                        </div>
                                        
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="categories">{{__('ui.category')}}:</label>
                                            <select wire:model="category" id="categories">
                                                <option value="">{{$category}}</option>
                                                @foreach ($categories as $category)
                                                <option value="{{$category->name}}">
                                                    {{$category->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="price">{{__('ui.price')}}</label>
                                            <input type="price" wire:model="price" id="price"
                                            class="form-control"/>
                                        </div>
                                        
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="description">{{__('ui.description')}}</label>
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
                </div>
            </div>
        </div>
    </section>
    
    <div class="container-fluid spaced">
    </div>
</div>

