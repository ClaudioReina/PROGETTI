<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\BecomeRevisor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BecomeRevisorForm extends Component
{

public $title;
public $email;
public $message;

public function becomeRevisor(){

    Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
    return redirect('/')->with('becomeRevisor', 'Abbiamo preso a carico la tua richiesta per diventare Revisore!');
}








    public function render()
    {
        return view('livewire.become-revisor-form');
    }

}
