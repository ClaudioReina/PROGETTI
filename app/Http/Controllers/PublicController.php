<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function homepage() {
        $articles = Article::latest()->take(3)->get();

        return view('welcome' , compact('articles'));
    }

    public function contact_us() {
        return view('contact_us');
    }

}
