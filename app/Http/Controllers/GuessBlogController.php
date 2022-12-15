<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class GuessBlogController extends Controller
{
    //
    function show(){
        $posts=Post::all();
        return view('guess.blog.show',compact('posts'));
    }
}
