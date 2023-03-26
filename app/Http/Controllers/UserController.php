<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        //$this->middleware('verified');
    }

    public function profile(User $user = NULL) 
    {
        if(!$user){
            $articles = Article::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->get();
            $categories = Category::where('user_id', Auth::id())->orderBy('name')->get();
            
        } else {
            $articles = Article::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();
            $categories = Category::where('user_id', $user->id)->orderBy('name')->get();
        }
        
        return view('profile', compact('categories', 'articles', 'user'));
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
        ]);
        return redirect(route('homepage'))->with('userUpdated', "Profilo aggiornato con successo.");
    }

    public  function changeAvatar(User $user, Request $request)
    {
        $user->update([
            'avatar' => $request->file('avatar')->store('public/avatars')
        ]);
        return redirect()->back();
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $avatar = $user->avatar; // ottieni l'avatar dell'utente
        $imageUrl = asset('path/to/default/image.jpg'); // imposta un'immagine predefinita in caso di avatar non disponibile
    
        if ($avatar) {
            $imageUrl = asset($avatar); // imposta l'URL dell'avatar dell'utente
        }
    
        return view('profile', ['user' => $user, 'imageUrl' => $imageUrl]);
    }
    
    public function destroy() 
    {
        Auth::user()->delete();

        return redirect(route('homepage'))->with('userDeleted', 'Account eliminato! Torna Presto!');
    }
}