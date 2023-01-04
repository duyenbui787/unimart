<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_cat;

class GuessCategoryController extends Controller
{
    //
    function show($id){
        if(isset($_GET['sort_by'])){
            $sort_by = $_GET['sort_by'];
            if($sort_by=='giam_dan'){
                $products = Product::where('product_cat_id',$id)->orderBy('price','DESC')->paginate(4);
                
            }elseif($sort_by=='tang_dan'){
                $products = Product::where('product_cat_id',$id)->orderBy('price','ASC')->paginate(4);

            }
        }else{

            $products = Product::where('product_cat_id',$id)->paginate(4);
        }
        
        $product_cats = Product_cat::where('id',$id)->get();
        return view ('guess.product-cat.show',compact('products','product_cats'));
    }
}
