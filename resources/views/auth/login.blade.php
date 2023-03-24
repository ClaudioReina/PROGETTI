<x-layout>
    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
    <div class="container-fluid ">
        <div class="row">
            <section class=" gradient-form" >
                <div class="container py-5 ">
                    <div class="row d-flex justify-content-center align-items-center ">
                        <div class="col-xl-10">
                            <div class="card rounded-3 text-black shadow">
                                <div class="row g-0">
                                    <div class="col-lg-6">
                                        <div class="card-body p-md-5 mx-md-4">

                                            <div class="text-center">
                                                <img src="/media/presto.it__1_-removebg-preview.png" style="width: 100px;" alt="logo">
                                                <h4 class="mt-1 mb-5 pb-1">Presto.it</h4>
                                            </div>

                                            <form method="POST" action="{{route('login')}}">
                                                @csrf
                                                <p class="text-center display-6">Login</p>

                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Email</label>
                                                    <input type="email" name="email" id="email" class="form-control"
                                                        placeholder="Indirizzo email" />
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="password">Password</label>
                                                    <input type="password" name="password" id="password" class="form-control" />
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button
                                                        class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                        type="submit">Log in</button>
                                                </div>

                                                <div class="d-flex align-items-center justify-content-center pb-4">
                                                    <p class="mb-0 me-2">Non sei registrato?</p>
                                                    <a href="{{route('register')}}"><button type="button"
                                                        class="btn btn-outline-danger">Registrati!</button></a>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                            <h4 class="mb-4">Più che un compagnia!</h4>
                                            <p class="small mb-0">Manda la tua candidatura e inizia il tuo viaggio in Presto.it dove potrai ambire a responsabilità manageriali e di vendita, ciò che che cerchiamo è lealtà, professionalità ed efficenza, se ne sei provvisto candidati e provvederemo nel darti una risposta in breve tempo! A Presto!
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
