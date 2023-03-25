<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Creato il</th>
                <th scope="col">Accettate</th>
                <th scope="col">Rifiutare</th>
                <th scope="col">####</th>

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
                    <span class="btn btn-success">Approva</span>
                </td>
                <td>
                    <span class="btn btn-danger">Rifiuta</span>
                </td>
                <td>
                    <span class="btn btn-warning">Annulla</span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
