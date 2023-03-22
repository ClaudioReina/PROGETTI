<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ArticleCreateForm extends Component
{
public $title;
public $category;
public $description;
public $price;

protected $rules =[
    'title' => 'require|min:4|unique:articles,title',
    'description' =>'require|max:600',

];


public function store(){
  /*   $this->validate();
 */
       Article::create([
       'title' => $this->title,
       'category' => $this->category,
       'description' => $this->description,
       'price' => $this->price,
       'user_id'=>Auth::id(),
    ]);

     session()->flash('articleCreated', 'Hai postato con successo il tuo articolo!');
    $this->cleanForm(); 
}

public function cleanForm(){

        $this->title = "";
        $this->category = "";
        $this->description = "";
        $this->price = "";

}
    public function delete(Article $article){
        $article ->delete();
    }


    public function render()
    {
        return view('livewire.article-create-form');
    }
}
