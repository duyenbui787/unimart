<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\Product_cat;

class AdminProductController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(function ($request, $next) {
            session(['module_active' => 'product']);
            return $next($request);
        });
    }

    function list(Request $request)
    {
        $status = $request->input('status');
        $keyword = $request->input('keyword');

        if ($status == 'stocking') {
            $products = Product::where('status', 'Còn hàng')->simplePaginate(5);
        } elseif ($status == 'sold-out') {
            $products = Product::where('status', 'Hết hàng')->simplePaginate(5);
        } else {
            $keyword = "";
            if ($request->input('keyword')) {
                $keyword = $request->input('keyword');
            }
            $products = Product::where('name', 'LIKE', "%{$keyword}%")->simplePaginate(5);
        }
        $count_user_active = Product::where('status', 'Còn hàng')->count();
        $count_user_trash = Product::where('status', 'Hết hàng')->count();

        $count = [$count_user_active, $count_user_trash];

        return view('admin.product.list', compact('products', 'count'));
    }

    function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product/list')->with('status', 'Đã xóa sản phẩm thành công');
    }

    function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required| string| max:255',
                'price' => 'required| string| max:255',
            ],
            [
                'required' => ':attribute không được để trống',
                'min' => ':attribute có độ dài ít nhất :min ký tự',
                'max' => ':attribute có độ dài tối đa :max ký tự',
            ],
            [
                'name' => 'Tên sản phẩm',
                'price' => 'Giá',
            ]
        );
        Product::where('id', $id)->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
        ]);
        return redirect('admin/product/list')->with('status', 'Đã cập nhật sản phẩm thành công');
    }

    function add()
    {
        $cats = Product_cat::all();
        $products = Product::all();
        return view('admin/product/add', compact('cats', 'products'));
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required| string| max:255',
                'price' => 'required| string| max:255',
            ],
            [
                'required' => ':attribute không được để trống',
                'min' => ':attribute có độ dài ít nhất :min ký tự',
                'max' => ':attribute có độ dài tối đa :max ký tự',
            ],
            [
                'name' => 'Tên sản phẩm',
                'price' => 'Giá',
            ]
        );
        $input = $request->all();
        if ($request->hasFile('file')) {
            $file = $request->file;
            //Tên file
            $filename = $file->getClientOriginalName();
            echo "<br>";
            //Lấy đuôi file
            echo $file->getClientOriginalExtension();
            echo "<br>";

            //Lấy kích thước file
            echo $file->getSize();
            echo "<br>";

            $path = $file->move('public/uploads', $file->getClientOriginalName());
            $thumbnail = 'public/uploads/' . $filename;

            $input['thumbnail'] = $thumbnail;
        }
        Product::create($input, [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'Status' => $request->input('exampleRadios'),

            // 'product_cat_id'=>$request->input('cat'),

            // 'product_cat_id'=>$request->string=implode(',', $request->input('cat'))
        ]);
        return redirect('admin/product/list')->with('status', 'Đã thêm sản phẩm thành công');
    }

    function add_cat()
    {
        // $add_cats =  Product_cat::all();
        return view('admin/product/add-cat');
    }

    function store_cat(Request $request)
    {
        $request->validate(
            [
                'name' => 'required| string| max:255',

            ],
            [
                'required' => ':attribute không được để trống',
                'min' => ':attribute có độ dài ít nhất :min ký tự',
                'max' => ':attribute có độ dài tối đa :max ký tự',
            ],
            [
                'name' => 'Tên sản phẩm',
            ]
        );
        Product_cat::create([
            'name' => $request->input('name'),
        ]);
        $add_cats = Product_cat::all();
        return view('admin.product.add-cat', compact('add_cats'))->with('status', 'Đã thêm sản phẩm thành công');
    }



    function delete_cat($id)
    {
        $add_cats = Product_cat::find($id);
        $add_cats->delete();
        return redirect('admin/product/cat/add')->with('status', 'Đã xóa sản phẩm thành công');
    }

    function edit_cat($id)
    {
        $product_cats = Product_cat::find($id);
        return view('admin/product/edit-cat', compact('product_cats'));
    }

    function update_cat(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required| string| max:255',
            ],
            [
                'required' => ':attribute không được để trống',
                'min' => ':attribute có độ dài ít nhất :min ký tự',
                'max' => ':attribute có độ dài tối đa :max ký tự',
            ],
            [
                'name' => 'Tên sản phẩm',
            ]
        );
        Product_cat::where('id', $id)->update([
            'name' => $request->input('name'),
        ]);
        return redirect('admin/product/cat/add')->with('status', 'Đã cập nhật sản phẩm thành công');
    }
}
