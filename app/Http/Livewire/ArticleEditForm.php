<?php

namespace App\Http\Livewire;

use App\Models\Image;
use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Spatie\Image\Manipulations;
use Illuminate\Http\UploadedFile;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;



class ArticleEditForm extends Component
{
    use WithFileUploads;
    
    public $article;
    public $title;
    public $category;
    public $price;
    public $description;
    public $images;
    public $temporary_images;
    public $newImages;

    public function mount(Article $article)
    {
        $this->article = $article;
        $this->images = $article->images;
        $this->image = $article->image;
        $this->title = $article->title;
        $this->category = $article->category;
        $this->price = $article->price;
        $this->description = $article->description;
    }

    public function updatedTemporaryImages()
    {
        $this->images = [];
        foreach ($this->temporary_images as $image) {
            $file = UploadedFile::createFromBase($image);
            $this->images[] = $file;
        }
    }

    public function removeTemporaryImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function edit($id)
    {
        $article = Article::with('images')->findOrFail($id);
        $article->setAccepted(null);

        return view('edit', compact('article', 'images'));
    }

    public function update(Article $article){
        $article->update([
            'title' => $this->title,
            'category' => $this->category,
            'price' => $this->price,
            'description' => $this->description,
        ]);
        // il metodo carica le immagini nuove ma non elimina le precedenti, non modifica gli altri campi e non torna null il campo is_accepted = Buon Lavoro Carmelo.


        if (count($this->images)){
            foreach($this->images as $image){
                $newFileName = "article/{$this->article->id}";
                $newImage = $this->article->image()->create(['path' => $image->store($newFileName , 'public')]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 500 , 500),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                ])->dispatch($newImage->id);
            
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
    
        session()->flash('articleUpdated', 'Annuncio modificato con successo!');
        return redirect(route('article.index'));
    }

    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
