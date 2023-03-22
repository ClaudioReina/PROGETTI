<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;

class ArticleEditForm extends Component
{
    use WithFileUploads;
    
public $title;
public $category;
public $price;
public $cover;
public $description;
public $article;


public function update(Article $article){
    $this->article->update([

        'title'=>$this->title,
        'category'=>$this->category,
        'price'=>$this->price,
        'cover'=>$this->cover,
        'description'=>$this->description,
    ]);

    return redirect(route('article.index'))->with('articleUpdated','Hai aggiornato l\'articolo');

}

/* public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    } */


public function mount(){
    $this->title = $this->article->title;
    $this->category = $this->article->category;
    $this->price = $this->article->price;
    $this->cover = $this->article->cover;
    $this->description = $this->article->description;
}





    public function render()
    {
        return view('livewire.article-edit-form');
    }



}
