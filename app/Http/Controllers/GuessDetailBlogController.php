<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class GuessDetailBlogController extends Controller
{
    //
    function show($id){
        // $detail_post= Post::all();
        $post_detail = Post::where('id', $id)->get();
        return view('guess.detail-blog.show',compact('post_detail'));

    }
}
