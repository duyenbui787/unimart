<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Post_cat;


class AdminPostController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(function($request,$next){
            session(['module_active'=>'post']);
            return $next($request);
        });
    }

    function list(Request $request)
    {
        $status = $request->input('status');
        $keyword = $request->input('keyword');

        if ($status == 'public') {
            $posts = Post::where('status', 'Còn hàng')->simplePaginate(5);
        } elseif ($status == 'wait') {
            $posts = Post::where('status', 'Hết hàng')->simplePaginate(5);
        } else {
            $keyword = "";
            if ($request->input('keyword')) {
                $keyword = $request->input('keyword');
            }
            $posts = Post::where('title', 'LIKE', "%{$keyword}%")->simplePaginate(5);
        }

        $count_post_public = Post::where('status', 'Công khai')->count();
        $count_post_wait = Post::where('status', 'Chờ duyệt')->count();

        $count = [$count_post_public, $count_post_wait];

        return view('admin.post.list', compact('posts', 'count'));
    }

    function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('admin/post/list')->with('status', 'Đã xóa sản phẩm thành công');
    }

    function edit($id)
    {
        $post = Post::find($id);
        return view('admin.post.edit-post', compact('post'));
    }
    function update(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'required| string| max:255',
            ],
            [
                'required' => ':attribute không được để trống',
                'min' => ':attribute có độ dài ít nhất :min ký tự',
                'max' => ':attribute có độ dài tối đa :max ký tự',

            ],
            [
                'title' => 'Tiêu đề bài viết',
            ]
        );
        // $request->all();

        Post::where('id', $id)->update([
            'title' => $request->input('title'),
        ]);
        return redirect('admin/post/list')->with('status', 'Đã cập nhật sản phẩm thành công');
    }
    function add()
    {
        $cats = Post_cat::all();
        return view('admin/post/add-post', compact('cats'));
    }
    function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required| string| max:255',
                'desc' => 'required| string| max:500',
            ],
            [
                'required' => ':attribute không được để trống',
                'min' => ':attribute có độ dài ít nhất :min ký tự',
                'max' => ':attribute có độ dài tối đa :max ký tự',
            ],
            [
                'title' => 'Tên sản phẩm',
                'desc' => 'Nội dung'
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

            $path = $file->move('public/uploads',$file->getClientOriginalName());
            $thumbnail = 'public/uploads/'.$filename;
    
            $input ['thumbnail'] = $thumbnail;
        }
       

        Post::create($input,[
                'title' => $request->input('title'),
                'desc' => $request->input('content')]);
        return redirect('admin/post/list')->with('status', 'Đã thêm sản phẩm thành công');
    }

    function add_cat()
    {
        $add_cats =  Post_cat::all();
        return view('admin/post/add-cat-post', compact('add_cats'));
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
        Post_cat::create([
            'name' => $request->input('name'),
        ]);
        $add_cats = Post_cat::all();
        return view('admin.post.add-cat-post', compact('add_cats'))->with('status', 'Đã thêm sản phẩm thành công');
    }
    function delete_cat($id)
    {
        $add_cats = Post_cat::find($id);
        $add_cats->delete();
        return redirect('admin/post/cat/add')->with('status', 'Đã xóa sản phẩm thành công');
    }

    function edit_cat($id)
    {
        $post_cats = Post_cat::find($id);
        return view('admin/post/edit-cat-post', compact('post_cats'));
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
                'name' => 'Tên danh mục',
            ]
        );
        // $request->all();

        Post_cat::where('id', $id)->update([
            'name' => $request->input('name'),
        ]);
        return redirect('admin/post/cat/add')->with('status', 'Đã cập nhật sản phẩm thành công');
    }
}
