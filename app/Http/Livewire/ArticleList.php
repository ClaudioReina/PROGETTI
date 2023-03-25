<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleList extends Component
{
    public function listArticle(){
        $article =  Article::where('is_accepted', null)->first();
        return view ('revisor.list');
    }
    
    public function destroy(Article $article) 
    {
        $article->delete();
        session()->flash('articleDestroyed', 'Articolo eliminato correttamente');
    }
    
    public function undoArticle(Article $article)
    {
        $article->setAccepted(null);
        $this->articles = $this->articles->where('id', '<>', $article->id);
        $this->emit('refresh');
        return redirect()->back()->with('revisionUndo', 'Prodotto da revisionare!');
    }
    
    
    public function render()
    {
        $articles = Article::all();
        
        return view('livewire.article-list', compact('articles'));
    }
}
