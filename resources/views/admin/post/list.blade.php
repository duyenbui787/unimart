@extends('layouts.admin')

@section('content')
<div id="content" class="container-fluid">
    <div class="card">
    @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Danh sách bài viết</h5>
            <div class="form-search form-inline">
                <form action="#">
                    <input type="text" name="keyword" value="{{request()->input('keyword')}}" class="form-control form-search" placeholder="Tìm kiếm">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="analytic">
                <a href="{{request()->fullUrlWithQuery(['status'=>'public'])}}" class="text-primary">Công khai<span class="text-muted">({{$count[0]}})</span></a>
                <a href="{{request()->fullUrlWithQuery(['status'=>'wait'])}}" class="text-primary">Chờ duyệt<span class="text-muted">({{$count[1]}})</span></a>
            </div>
            <div class="form-action form-inline py-3">
                <select class="form-control mr-1" id="">
                    <option>Chọn</option>
                    <option>Tác vụ 1</option>
                    <option>Tác vụ 2</option>
                </select>
                <input type="submit" name="btn-search" value="Áp dụng" class="btn btn-primary">
            </div>
            <table class="table table-striped table-checkall">
                <thead>
                    <tr>
                        <th scope="col">
                            <input name="checkall" type="checkbox">
                        </th>
                        <th scope="col">#</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Nội dung</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                @if(!empty($posts->items()))
                
                @php
                    $t=0;
                @endphp

                @foreach ($posts as $post)
                @php 
                    $t++;
                @endphp
                <tr>
                        <td>
                            <input type="checkbox">
                        </td>
                        <td scope="row">{{$t}}</td>
                        <td><img src="" alt=""></td>
                        <td><a href="">{{$post->title}}</a></td>
                        <td>{!!$post->desc!!}</td>
                        <td></td>
                        <!-- $post->post_cat->name -->
                        <td>{{$post->created_at}}</td>
                        <td>
                            <a href="{{route('edit_post',$post->id)}}" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="{{route('delete_post',$post->id)}}" onclick="return confirm('Bạn có chắc chắn xóa bản ghi này')" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>

                    </tr>
                @endforeach
                @else
                <tr>
                            <td colspan=7 class="bg-white">Không tìm thấy bản ghi</td>
                            
                        </tr>
                @endif
                  
                   


                </tbody>
            </table>
            {{$posts->links()}}

           
        </div>
    </div>
</div>
@endsection