<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function homepage() {
        $articles = Article::latest()->where('is_accepted', true)->take(3)->get();

        return view('welcome' , compact('articles'));
    }

    public function contact_us() {
        return view('contact_us');
    }

    public function aboutUs(){
        return view('aboutUs');
    }

    public function searchArticle (Request $request){

        $articles = Article::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view ('article.index', compact('articles'));
    }


    public function becomeRevisor(){
        return view('become-revisor');
    }

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
        }

}
