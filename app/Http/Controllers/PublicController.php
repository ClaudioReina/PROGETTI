<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function homepage() {
        return view('welcome');
    }

    public function contact_us() {
        return view('contact_us');
    }
}
