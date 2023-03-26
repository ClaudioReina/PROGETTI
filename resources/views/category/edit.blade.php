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

                                            <form method="POST" action="{{route('category.update', compact('category'))}}" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <p>Modifica Categoria</p>
                                                <div class="form-outline mb-4">
                                                    <input type="name" name="name" id="name"
                                                        class="form-control"/>
                                                    <label class="form-label" for="name">Nome</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="cover" class="form-label">Carica Immagine</label>
                                                    <input class="form-control" name="cover" type="file" id="cover">
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button
                                                        class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                        type="submit">Crea Categoria</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                            <h4 class="mb-4">Inserisci una nuova categoria</h4>
                                            <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
