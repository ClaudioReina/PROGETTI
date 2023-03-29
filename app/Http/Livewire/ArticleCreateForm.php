<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ArticleCreateForm extends Component
{
    use WithFileUploads;

    public $name;
    public $title;
    public $category;
    public $description;
    public $price;
    public $images = [];
    public $temporary_images;
    public $image;
    public $article;

    public function rules(): array
    {


        return [
            'title' => 'required|min:2',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required|min:20',
            'images.*' => 'image|max:1024',
            'temporary_images.*' => 'image|max:1024',

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
            'temporary_images.required' => 'L\'immagine è richiesta',
            'temporary_images.*.image' => 'I file devono essere delle immagini',
            'temporary_images.*.max' => 'L\'immagine dev\'essere massimo di 1mb',
            'images.image' => 'L\'immagine deve essere un\'immagine',
            'images.max' => 'L\'immagine dev\'essere massimo 1mb',
        ];
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024', // 1MB Max

        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store()
    {
        $this->validate();
        // $this->article = Category::find($this->category)->articles()->create($this->validate());

        $this->article = Article::create([
            'title' => $this->title,
            'category' => $this->category,
            'description' => $this->description,
            'price' => $this->price,
            'user_id' => Auth::id(),
        ]);
        
        if (count($this->images)){
            foreach($this->images as $image){
                $this->article->image()->create(['path'=>$image->store('images', 'public')]);
            }
        }
        session()->flash('articleCreated', 'Annuncio creato, è tra le mani dei nostri revisori!');
        $this->cleanForm();
    }

    public function cleanForm()
    {

        $this->title = "";
        $this->category = "";
        $this->description = "";
        $this->price = "";
        $this->image = "";
        $this->images = [];
        $this->temporary_images = [];
    }
    public function delete(Article $article)
    {
        $article->delete();
    }


    public function render()
    {
        return view('livewire.article-create-form');
    }
}
