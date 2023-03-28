<x-layout>
    
    <div class="container py-5">
        {{-- SEZIONE AVATAR --}}
        <div class="row">
            <div class="col-12 col-md-6 d-flex align-items-center ms-5 pt-4">
                @if(!$user->avatar)
                    <img src="/media/ImmagineSalvaposto.jpg" class="avatar-image" alt="immagine non trovata" onclick="document.getElementById('avatar-input').click();" >
                @else
                    <img class="avatar-image" src="{{ Storage::url($user->avatar) }}" onclick="document.getElementById('avatar-input').click();" id="avatar-image">
                @endif
                @if(Auth::user()->id == $user->id)
                    <form action="{{ route('changeAvatar', ['user' => $user]) }}" method="POST" enctype="multipart/form-data" id="avatar-form">
                        @csrf
                        @method('put')
                        <input type="file" name="avatar" id="avatar-input" style="display:none;" onchange="document.getElementById('avatar-form').submit();">
                    </form>
                @endif
            </div>
                
                <div class="col-12 col-md-6 d-flex">
                    @if(Auth::user()->name == $user->name)
                        <h1 class="ms-5 me-2 mt-2">{{Auth::user()->name}}</h1>
                    @else
                        <h1 class="ms-5 me-2 mt-2">{{$user->name}}</h1>
                    @endif
                    
                    {{-- SETTING --}}
                    @if(Auth::user()->id == $user->id)
                        <div class="d-flex justify-content-center">                     
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle mt-3 ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-gear text-black fs-3"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item text-center">
                                        <a class="nav-link linkCustom" href="{{route('user.edit', $user)}}">Modifica profilo</a>
                                    </li> 
                                    <li><hr class="dropdown-divider"></li>
                                    
                                    @if(!Auth::user()->is_revisor)
                                    <li class="nav-item text-center">
                                        <a class="nav-link linkCustom" href="{{route('become.revisor')}}">Diventa revisore</a>
                                    </li> 
                                    <li><hr class="dropdown-divider"></li>                            
                                    @endif
                                    <li>
                                        <div class="text-center">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Elimina Account
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </div>        
                                    
                        {{-- Modal --}}
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina account:</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Sei sicuro di voler eliminare l'account?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                                        <a class="" href="#">
                                            @if(Auth::user()->id == $user->id)
                                            <form method="POST" action="{{route('user.destroy')}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger mx-auto">Elimina </button>
                                            </form>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
        </div>
        
        {{-- SEZIONE MESSAGGI --}}
        <div class="row">
            <div class="col-12 py-5">
                <x-messages />
            </div>
        </div>

        {{-- SEZIONE REVISORE --}}
        @auth
            @if(Auth::user()->id == $user->id && Auth::user()->is_revisor)
                <h4 class="display-6 text-center py-3">Sezione Revisore</h4>
                <div class="revisione">
                    <a href="{{route('revisor.list')}}" class="nav-link btn_rev">Lista articoli da revisionare</a>
                    <a class="btn_rev position-relative" aria-current="page" href="{{route('revisor.index')}}"> Zona Revisore
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ App\Models\Article::toBeRevisionedCount()}}</span>
                        <span class="visually-hidden">Messaggi non letti</span>
                    </a>
                </div>
            @endif
        @endauth

        {{-- SEZIONE ANNUNCI --}}
        <div class="row">
            <div class="col-12 pt-5 text-center">
                <h3 class="display-6 py-5">Annunci caricati</h3>
            </div>
            <div class="col-12">
                <div class="row justify-content-center">
                    @if(Auth::user()->articles->count() > 0)
                        @foreach($articles as $article)
                            <div class="col-12 col-md-4 pb-5">
                                <div class="card cardCust shadow cardElements">
                                    @if(!$article->cover)
                                        <img src="/media/ImmagineSalvaposto.jpg" class="img-card object-fit-cover" alt="...">
                                    @else
                                        <img src="{{Storage::url($article->cover)}}" class="img-fluid" alt="...">
                                    @endif
                                    <div class="card-body p-2">                                           
                                        <div class="mb-3">
                                            <h5 class="text-center fs-4">
                                                {{Str::limit($article->title, 25)}}
                                            </h5>
                                            <p class="card-text fst-italic fw-bold text-center">{{ $article->price }} €</p>
                                            <p class="card-text text-center">{{ Str::limit($article->description, 30) }}</p>
                                        </div>
                                        @if (Auth::user()->id == $user->id)
                                            <div class="text-center my-4">
                                                <h5>Stato Annuncio:                                                    
                                                    @if($article->is_accepted == 1)
                                                        <span class="label text-success">Accettata</span>
                                                    @elseif ($article->is_accepted === 0)
                                                        <span class="label text-danger">Rifiutata</span>
                                                    @else
                                                        <span class="label">In corso</span>
                                                    @endif
                                                </h5>     
                                            </div>                                            
                                        @endif                                            
                                        <div class="d-flex justify-content-evenly card-body">                                                
                                            <form action="{{route('article.show', $article)}}" method="GET" class="">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Visualizza</button>
                                            </form>
                                            @if(Auth::user() && Auth::id() == $article->user_id)
                                            <a href="{{ route('article.edit', $article) }}" class="btn btn-dark">Modifica</a>
                                            <form action="{{ route('article.destroy', $article) }}" method="POST" class="">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Cancella</button>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-12 ms-5 ps-5">
                            Non hai caricato nessun annuncio.
                        </div>
                    @endif
                </div>
            </div>
        </div>

        {{-- SEZIONE CATEGORIE --}}
        @auth
            @if(Auth::user()->is_admin)
                <div class="row py-5">
                    <div class="col-12 mb-5 d-flex justify-content-center">
                        <h3 class="display-6 mb-3">Categorie</h3>
                        <div class="pt-2 ms-5">
                            <a class="btn btn-warning linkCustom" href="{{ route('category.create') }}">Crea Categoria</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row justify-content-center">
                            @if(count(Auth::user()->categories))
                                @foreach(Auth::user()->categories as $category)
                                    <div class="col-12 col-md-4 pb-5">
                                        <div class="card shadow text-center cardCust">
                                            <h3>{{$category->name}}</h3>
                                            <div class="card-body p-2 d-flex justify-content-around">
                                                <form action="{{route('category.show', $category)}}" method="POST" class="d-inline-block">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">Visualizza</button>
                                                </form>
                                                @if(Auth::user() && Auth::id() == $category->user_id)
                                                    <a href="{{route('category.edit', $category)}}" class="btn btn-dark">Modifica</a>
                                                    <form action="{{route('category.destroy', $category)}}" method="POST" class="d-inline-block">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Cancella</button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12 ms-5 ps-5">
                                    Non hai caricato nessuna categoria.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        @endauth
    </div>
        
    <div class="container-fluid spaced">
    </div>
        
</x-layout>