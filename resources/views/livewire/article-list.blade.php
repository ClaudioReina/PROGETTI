<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Creato il</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
