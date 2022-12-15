<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuessContactController extends Controller
{
    //
    function show(){
        return view('guess.contact.show');
    }
}
