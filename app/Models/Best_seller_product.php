<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Best_seller_product extends Model
{
    use HasFactory;
    function product(){
        return $this->belongsTo('App\Models\Product');
    }
}
