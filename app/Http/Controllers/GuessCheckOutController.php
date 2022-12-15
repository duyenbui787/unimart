<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuessCheckOutController extends Controller
{
    //
    function show(){
        // $products = Product::all();
        return view('guess.checkout.show');

    }

}
