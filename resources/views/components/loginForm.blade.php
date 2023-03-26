<form class="form formLogin" method="POST" action="{{route('login')}}">
    @csrf
    <p id="heading">Accedi</p>
    <div class="field">
    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
    <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 
        2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 
           4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 
              1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 
                2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725- 
                  1.442-1.914z">

    </path>
    </svg>
    <input type="email" name="email" id="email" class="form-control input-field"
    placeholder="Indirizzo email" />
    </div>
    <div class="field">
    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"> 
          
    </path>
    </svg>
    <input type="password" placeholder="Qwerty123!£$" name="password" id="password" class="form-control input-field" />
    </div>
    <div class="btnLogin">
    <button type="submit" class="buttonLogin1 text-center"><span class="mx-3">Accedi</span></button>
    {{-- <button class="buttonLogin2">Sign Up</button> --}}
    <a href="{{route('register')}}"><button type="button"
        class="buttonLogin2">Registrati!</button></a>
    </div>
    <button class="buttonLogin3">Password Dimenticata?</button>
</form>




            
    {{-- <div class="container-fluid ">
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
    </div> --}}
