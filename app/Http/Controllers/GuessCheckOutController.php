<?php

namespace App\Http\Controllers;

use App\Models\Best_seller_product;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Feature_product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;


class GuessCheckOutController extends Controller
{
    //
    function show(){
        // $products = Product::all();
        return view('guess.checkout.show');

    }
    function add(Request $request, $id){
        $product = Product::find($id);
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => ['thumbnail' => $product->thumbnail],
        ]);
        return redirect('checkout/show');
    }
    function add_feature_pro(Request $request, $id){
        $feature_product = Feature_product::find($id);
        Cart::add([
            'id' => $feature_product->id,
            'name' => $feature_product->name_feature_pro,
            'qty' => 1,
            'price' => $feature_product->price,
            'options' => ['thumbnail' => $feature_product->thumbnail],
        ]);
        return redirect('checkout/show');
    }
    function add_best_seller_pro(Request $request, $id){
        $best_seller_product = Best_seller_product::find($id);
        Cart::add([
            'id' => $best_seller_product->id,
            'name' => $best_seller_product->name,
            'qty' => 1,
            'price' => $best_seller_product->price,
            'options' => ['thumbnail' => $best_seller_product->thumbnail],
        ]);
        return redirect('checkout/show');
    }
}
