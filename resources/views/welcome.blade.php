<x-layout>

    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <h1>Presto.it fa al caso tuo!</h1>
                <h3>Mostra a tutti cos'hai da offrire</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit soluta est, itaque, repellendus vitae
                    alias nostrum praesentium laboriosam incidunt dolore maxime ducimus fuga natus, totam placeat
                    dolorum optio illum delectus.
                </p>
                @auth
                <a href="{{route('article.create')}}" class="btn btn-primary" type="button">Inserisci annuncio</a>
                @endauth
            </div>
            <div class="col-12 col-md-8">

            </div>
        </div>
    </div>


</x-layout>
