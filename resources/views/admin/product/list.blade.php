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
            <h5 class="m-0 ">Danh sách sản phẩm</h5>
            <div class="form-search form-inline">
                <form action="#">
                    <input type="text" name="keyword" value="{{request()->input('keyword')}}" class="form-control form-search" placeholder="Tìm kiếm">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="analytic">
                <a href="{{request()->fullUrlWithQuery(['status'=>'stocking'])}}" class="text-primary">Còn hàng<span class="text-muted">({{$count[0]}})</span></a>
                <a href="{{request()->fullUrlWithQuery(['status'=>'sold-out'])}}" class="text-primary">Hết hàng<span class="text-muted">({{$count[1]}})</span></a>
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
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                @if(!empty($products->items()))
                
                    @php
                        $t=0;
                    @endphp

                    @foreach ($products as $product)
                    @php 
                        $t++;
                    @endphp
                    <tr class="">
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>{{$t}}</td>
                        <td><img src="http://via.placeholder.com/80X80" alt=""></td>
                        <td><a href="#">{{$product->name}}</a></td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->product_cat->id}}</td>
                        <td>{{$product->created_at}}</td>
                        <td><span class="badge badge-success">{{$product->Status}}</span></td>
                        <td>
                            <a href="{{route('product_edit',$product->id)}}"   class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="{{route('delete_product',$product->id)}}" onclick="return confirm('Bạn có chắc chắn xóa bản ghi này') " class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
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
            {{$products->links()}}


            <!-- <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">Trước</span>
                            <span class="sr-only">Sau</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav> -->
        </div>
    </div>
</div>

@endsection