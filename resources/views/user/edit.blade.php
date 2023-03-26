<x-layout>

    <div class="container-fluid ">
        <div class="row">
            <div class="container py-5 ">
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">

                            <div class="text-center">
                                <img src="/media/logo.png" style="width: 185px;" alt="logo">
                                <h4 class="mt-1 mb-5 pb-1">Presto.it</h4>
                            </div>

                            <form method="POST" action="{{route('user.update', compact('user'))}}" enctype="multipart/form-data">
                                @csrf                                            
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="name">Nome Profilo</label>
                                    <input type="name" name="name" id="name"
                                        class="form-control"/>
                                </div>
                                <div class="text-center pt-1 mb-5 pb-1">
                                    <button
                                        class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                        type="submit">Modifica</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid spaced">
    </div>

</x-layout>
