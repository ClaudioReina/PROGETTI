<x-layout>
    
    <div class="container-fluid ">
        <div class="row">
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
                                            
                                            <form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
                                                @csrf
                                                <p>{{__('ui.NuovaCategoria')}}</p>
                                                
                                                <div class="form-outline mb-4">
                                                    <input type="name" name="name" id="name"
                                                    class="form-control"/>
                                                    <label class="form-label" for="name">{{__('ui.NomeCategoria')}}</label>
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label for="cover" class="form-label">{{__('ui.CaricaImmagine')}}</label>
                                                    <input class="form-control" name="cover" type="file" id="cover">
                                                </div>
                                                
                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button
                                                    class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                    type="submit">{{__('ui.CreaCategoria')}}</button>
                                                </div>
                                                
                                            </form>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                            <h4 class="mb-4">{{__('ui.InserisciCategoria')}}</h4>
                                            <p class="small mb-0">{{__('ui.DescrizioneCategoria')}}.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    
    <div class="container-fluid spaced">
    </div>
    
</x-layout>
