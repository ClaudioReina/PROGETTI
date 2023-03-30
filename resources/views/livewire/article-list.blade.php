<div class="table-responsive">
    <table class="table d-md-table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">{{__('ui.titolo')}}</th>
                <th scope="col">{{__('ui.categoria')}}</th>
                <th scope="col">{{__('ui.prezzo')}}</th>
                <th scope="col">{{__('ui.creatoIl')}}</th>
                <th scope="col">{{__('ui.statoAnnuncio')}}</th>
                <th scope="col">{{__('ui.annullaRevisione')}}</th>
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
                    <span class="label text-success">{{__('ui.Accetta')}}</span>
                    @elseif ($article->is_accepted === 0)
                    <span class="label text-danger">{{__('ui.Rifiuta')}}</span>
                    @else
                    <span class="label">{{__('ui.inCorso')}}</span>
                    @endif
                </td>
                <td>
                    @if ($article->is_accepted !== null)
                    <form action="{{ route('revisor.undo_article', ['article' => $article]) }}"
                        method="POST" class="mx-auto">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-warning shadow">{{__('ui.annulla')}}</button>
                    </form>
                    
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
