<div class="table-responsive">
    <table class="table d-md-table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">{{__('ui.title')}}</th>
                <th scope="col">{{__('ui.publishedBy')}}</th>
                <th scope="col">{{__('ui.category')}}</th>
                <th scope="col">{{__('ui.price')}}</th>
                <th scope="col">{{__('ui.published')}}</th>
                <th scope="col">{{__('ui.adsStatus')}}</th>
                <th scope="col">{{__('ui.undoRevision')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->user->name}}</td>
                <td>{{$article->category}}</td>
                <td>{{$article->price}} €</td>
                <td>{{$article->created_at}}</td>
                <td>
                    @if($article->is_accepted == 1)
                        <span class="label text-success">{{__('ui.accepted')}}</span>
                    @elseif ($article->is_accepted === 0)
                        <span class="label text-danger">{{__('ui.refused')}}</span>
                    @else
                        <span class="label">{{__('ui.inProgress')}}</span>
                    @endif
                </td>
                <td>
                    @if ($article->is_accepted !== null)
                    <form action="{{ route('revisor.undo_article', ['article' => $article]) }}"
                        method="POST" class="mx-auto">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-warning shadow">{{__('ui.undo')}}</button>
                    </form>
                    
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<div class="row justify-content-end pe-5">
    <div class="col-1 d-flex bg-dark rounded">
        @if ($articles->currentPage() > 1)
            <div class="text-center text-white"><a href="{{ $articles->previousPageUrl() }}"><i class="fa fa-angle-left text-white"></i></a></div>
        @endif

        @for ($i = 1; $i <= $articles->lastPage(); $i++)
            <div  class="text-center mx-auto text-white {{ ($i == $articles->currentPage()) ? ' active' : '' }}">
                <a class="text-white" href="{{ $articles->url($i) }}">{{ $i }}</a>
            </div>
        @endfor

        @if ($articles->hasMorePages())
            <div><a href="{{ $articles->nextPageUrl() }}"><i class="fa fa-angle-right text-white"></i></a></div>
        @endif        
    </div>
</div>
