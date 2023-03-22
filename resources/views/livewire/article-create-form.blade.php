<div>
<section class=" gradient-form">
    <div class="container py-5 ">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black shadow">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div>
                                    @if (session()->has('articleCreated'))
                                        <div class="alert alert-success">
                                            {{ session('articleCreated') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="text-center">
                                    <img src="/media/logo.png" style="width: 185px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">Presto.it</h4>
                                </div>

                                <form wire:submit.prevent="store">
                                    @csrf
                                    <p class="my-5 text-center">Nuovo Annuncio</p>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="title">Nome articolo</label>
                                        <input type="title" wire:model="title" id="title"
                                            class="form-control"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="categories">Categorie</label>
                                        <select wire:model="category" id="categories">
                                        <option value="">Seleziona Categoria</option>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">
                                                    {{$category->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="price">Prezzo articolo</label>
                                        <input type="price" wire:model="price" id="price"
                                            class="form-control"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="description">Descrizione</label>
                                        <textarea type="text" wire:model="description" id="description"
                                            class="form-control" cols="7" rows="3"></textarea>
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
                                <h4 class="mb-4">Qualche consiglio dal Team Presto.it</h4>
                                <ol>
                                    <li><h5>1. Scatta una bella fotografia.</h5>
                                        <p>Metti bene a fuoco l'oggetto e cerca una superficie, o uno sfondo, con meno distrazioni possibili. Una bella foto ti aiuta ad attirare di più l'attenzione di persone interessate.</p>
                                    </li>
                                    <li><h5>2. Inserisci un prezzo realistico.</h5>
                                        <p>Se sei indeciso sul prezzo dai un’occhiata agli altri annunci di oggetti simili al tuo pubblicati su Subito: questo ti aiuterà a identificare il prezzo migliore.</p>
                                    </li>
                                    <li><h5>3. Scrivi un annuncio chiaro.</h5>
                                        <p>Cerca di inserire tutte le specifiche del prodotto che vuoi vendere. Cosa vorresti sapere se fossi tu la persona interessata all'acquisto? Fai una descrizione chiara, onesta e completa.</p>
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
</div>
