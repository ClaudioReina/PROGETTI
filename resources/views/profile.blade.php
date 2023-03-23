<x-layout>
    
    <div class="container py-5">
        <div class="row">
            <div class="col-md-10 d-flex align-items-center pt-4">
                <img class="avatar-image" src="{{ Storage::url(Auth::user()->avatar) }}" onclick="document.getElementById('avatar-input').click();" id="avatar-image">
                <form action="{{ route('changeAvatar', ['user' => Auth::user()]) }}" method="POST" enctype="multipart/form-data" id="avatar-form">
                    @csrf
                    @method('put')
                    <input type="file" name="avatar" id="avatar-input" style="display:none;" onchange="document.getElementById('avatar-form').submit();">
                </form>
                
                <div class="col-12 col-md-6">
                    <h1 class="ms-5">{{Auth::user()->name}}</h1>
                    <form method="POST" action="{{route('user.destroy')}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger ms-5 mt-3">Delete Account</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="display-3 py-5">Prodotti in Vendita</h3>
            </div>
            <div class="col-12">
                <div class="row justify-content-center">
                    @if(count(Auth::user()->articles))
                    @foreach(Auth::user()->articles as $article)
                    <div class="col-12 col-md-4 pb-5">
                        <div class="card shadow">
                            @if(!$article->cover)
                            <img src="/media/ImmagineSalvaposto.jpg" class="img-card object-fit-cover" alt="...">
                            @else
                            <img src="{{Storage::url($article->cover)}}" class="img-fluid" alt="...">
                            @endif
                            <div class="card-body p-2">
                                <div class="d-flex justify-content-between"><h3>Nome:</h3><p>{{$article->title}}</p></div>
                                <div class="d-flex justify-content-between"><h3>Prezzo:</h3><p>{{$article->price}} €</p></div>
                                <form action="{{route('article.show', $article)}}" method="GET" class="d-inline-block">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-primary">View</button>
                                </form>
                                @if(Auth::user() && Auth::id() == $article->user_id)
                                <a href="{{ route('article.edit', $article) }}" class="btn btn-outline-dark">Edit</a>
                                <form action="{{ route('article.destroy', $article) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-12 ms-5 ps-5">
                        Non hai caricato nessun prodotto.
                    </div>
                    @endif
                </div>
            </div>
        </div>
        {{-- SEZIONE CATEGORIE --}}
        @auth
        @if(auth()->user()->id == 1)
            <div class="row py-5">
                <div class="col-12 text-center">
                    <h3 class="display-3 py-5">Categorie</h3>
                </div>
                <div class="col-12">
                    <div class="row justify-content-center">
                        @if(count(Auth::user()->categories))
                        @foreach(Auth::user()->categories as $category)
                        <div class="col-12 col-md-4 pb-5">
                            <div class="card shadow">
                                <div class="card-body p-2">
                                    <h3>{{$category->name}}</h3>
                                    <form action="{{route('category.show', $category)}}" method="POST" class="d-inline-block">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-primary">View</button>
                                    </form>
                                    @if(Auth::user() && Auth::id() == $category->user_id)
                                    <a href="{{route('category.edit', $category)}}" class="btn btn-outline-dark">Edit</a>
                                    <form action="{{route('category.destroy', $category)}}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
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
    
</x-layout>