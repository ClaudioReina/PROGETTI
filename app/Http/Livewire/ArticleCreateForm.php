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

public function rules(): array
{
    return [
        'title' =>'required|min:2',
        'price' =>'required',
        'category' =>'required',
        'description' =>'required|min:20'        
    ];
}

public function messages(): array
{
    return [
       'title.required' => 'Titolo mancante!',
       'title.min' => 'Il titolo deve avere almeno 2 caratteri!',
       'price.required' => 'Prezzo mancante!',
       'category.required' => 'Selezionare una categoria',
       'description.required' => 'Descrizione mancante!',
       'description.min' => 'La descrizione deve avere almeno 20 caratteri!',
    ];
}


public function store(){
     $this->validate();
 
       Article::create([
       'title' => $this->title,
       'category' => $this->category,
       'description' => $this->description,
       'price' => $this->price,
       'user_id' => Auth::id(),
    ]);

     session()->flash('articleCreated', 'Annuncio creato, è tra le mani dei nostri revisori!');
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
