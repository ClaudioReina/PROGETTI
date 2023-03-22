<?php

namespace App\Http\Controllers;


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

    public function profile() {
        // metodo 1: sfruttare la relazione
        $categories = Category::where('user_id', Auth::id())->orderBy('name')->get();
        return view('profile', compact('categories'));
    }

    public  function changeAvatar(User $user, Request $request) {
        $user->update([
          'avatar' => $request->file('avatar')->store('public/avatars')
        ]);
        return redirect()->back();
    }

    public function destroy() {

        Auth::user()->delete();

        return redirect(route('homepage'))->with('userDeleted', 'Account deleted');
    }
}