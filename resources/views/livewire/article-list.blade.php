<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Creato il</th>
                <th scope="col">Stato annuncio</th>
                <th scope="col">Annulla Revisione</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->category}}</td>
                <td>{{$article->price}} €</td>
                <td>{{$article->created_at}}</td>
                <td>
                    @if($article->is_accepted == 1)
                    <span class="label text-success">Accettata</span>
                    @elseif ($article->is_accepted === 0)
                    <span class="label text-danger">Rifiutata</span>
                    @else
                    <span class="label">In corso</span>
                    @endif
                </td>
                <td>
                    @if ($article->is_accepted !== null)
                    <form action="{{ route('revisor.undo_article', ['article' => $article]) }}"
                        method="POST" class="mx-auto">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-warning shadow">Annulla</button>
                    </form>
                    
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
