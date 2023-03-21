<div>
<section class=" gradient-form">
    <div class="container py-5 ">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="/media/logo.png" style="width: 185px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">Presto.it</h4>
                                </div>

                                <form method="" action="">
                                    @csrf
                                    <p>Nuovo Annuncio</p>

                                    <div class="form-outline mb-4">
                                        <input type="title" name="title" id="title"
                                            class="form-control"/>
                                        <label class="form-label" for="title">Nome articolo</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="price" name="title" id="title"
                                            class="form-control"/>
                                        <label class="form-label" for="title">Prezzo articolo</label>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button
                                            class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                            type="submit">Crea Annuncio</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">Inserisci un nuovo annuncio</h4>
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
