<?php

namespace App\Http\Controllers;

use App\Models\Best_seller_product;
use App\Models\Feature_product;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_cat;
use App\Models\Product_children;
use App\Models\Product_product_children;


class GuessDetailProductController extends Controller
{
    //
    function show($id)
    {
        $products = Product::where('id', $id)->get();
        $product_childrens = Product::find($id)->product_children;
        $best_seller_product = Best_seller_product::all();
        return view('guess.detail-product.show', compact('product_childrens', 'products', 'best_seller_product'));
    }
}
