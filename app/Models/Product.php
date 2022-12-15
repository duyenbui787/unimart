<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Product_children;
use App\Models\Product_cat;

class Product extends Model
{
    // use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
   
   /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'Status',
        'product_cat_id',
        'thumbnail'
        
        
        
    ];



    function product_children(){
        return $this->hasMany('App\Models\Product_children');
    }
    function product_cat(){
        return $this->belongsTo('App\Models\Product_cat');
    }
    
}
