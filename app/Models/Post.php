<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post_cat;


class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'desc',
        'thumbnail'
        
        
        
    ];

    function post_cat(){
        return $this->belongsTo('App\Models\Post_cat');
    }
   
}
