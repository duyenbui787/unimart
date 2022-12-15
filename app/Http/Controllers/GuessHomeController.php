<?php

namespace App\Http\Controllers;
use App\Models\Feature_product;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_cat;
class GuessHomeController extends Controller
{
    //
    // function show(){
    //     $products = Product::all();
    //     return view('guess.home.show',compact('products'));

    // }

    function show(){
        $products = Product::where('product_cat_id',15)->get();
        $laptops= Product::where('product_cat_id',16)->get();
        $tivis= Product::where('product_cat_id',17)->get();
        $ipads= Product::where('product_cat_id',3)->get();
        $sounds= Product::where('product_cat_id',18)->get();
        $watchs= Product::where('product_cat_id',19)->get();
        $cases= Product::where('product_cat_id',20)->get();

        $mobile_cat=Product_cat::where('id',15)->get();
        $laptop_cat=Product_cat::where('id',16)->get();
        $tivi_cat=Product_cat::where('id',17)->get();
        $ipad_cat=Product_cat::where('id',3)->get();
        $sound_cat=Product_cat::where('id',18)->get();
        $watch_cat=Product_cat::where('id',19)->get();
        $case_cat=Product_cat::where('id',20)->get();

        $feature_product = Feature_product::all();
        return view('guess.home.show',compact('products','laptops','tivis','ipads','sounds','watchs','cases','mobile_cat','laptop_cat','tivi_cat','ipad_cat','sound_cat','watch_cat','case_cat','feature_product'));

    }

    function search(Request $request){
        // $keyword ="";
        //     if($request->input('keyword')){
        //         $keyword=$request->input('keyword');
        //     }
        //     $products = Product::where('name','LIKE',"%{$keyword}%")->paginate(3);
        //     // $data = $_GET['products'];
           
        //     // dd($products);
            
        //     return view('guess.product.search',compact('products','keyword'));

            

        

        $products =Product::where('name','LIKE','%'.$request->keyword.'%')->paginate(3);
            return view('guess.product.search',compact('products'));
        }
}
