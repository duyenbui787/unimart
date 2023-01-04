<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\customer;
use App\Models\bill;
use App\Models\Feature_product;
use Illuminate\Support\Facades\Session;


class GuessCartController extends Controller
{
    //
    function show()
    {
        // $products = Product::all();
        return view('guess.cart.show');
    }
    function add(Request $request, $id)
    {
        $product = Product::find($id);
        $feature_product = Feature_product::find($id);
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => ['thumbnail' => $product->thumbnail]
        ]);
        return redirect('cart/show');
    }
    function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect('cart/show');
    }
    function destroy()
    {
        Cart::destroy();
        return redirect('cart/show');
    }
    function cart()
    {
        return redirect('cart/show');
    }
    function checkout()
    {
        return redirect('checkout/show');
    }
    function order(Request $request)
    {
        $cart=Cart::content();
        $total = Cart::total();
        // dd($total);
        Customer::create([
            'name' => $request->input('fullname'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone'),
            'note' => $request->input('note'),
        ]);
        
        Bill::create([
            'date_order' => date('Y-m-d'),
            'payment' => $request->input('payment-method'),
            'total_price' => (int)$total,
        ]);
        Session::forget('cart');
        return redirect()->back()->with('status','Đặt hàng thành công');
        // ==============================================
        $data =[
            'name' => $request->input('fullname'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone'),
            'note' => $request->input('note'),
            'payment' => $request->input('payment-method'),
            'date_order' => date('Y-m-d'),
            'total'=>$total

        ];
        
        // dd($data);
    }

    function update(Request $request)
    {
        $data = $request->get('qty');

        foreach ($data as $k => $v) {
            Cart::update($k, $v);
        }
        return redirect('cart/show');
    }
}
