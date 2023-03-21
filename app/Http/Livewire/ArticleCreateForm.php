<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreateForm extends Component
{
public $title;
public $category;
public $description;
public $price;



public function store(){
  /*   $this->validate();
 */
       Article::create([
       'title' => $this->title,
       'category' => $this->category ?: null,
       'description' => $this->description,
       'price' => $this->price,
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

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
