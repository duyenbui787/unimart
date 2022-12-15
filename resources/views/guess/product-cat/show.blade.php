@extends('layouts.guess')

@section('content')

<div class="main-content-wp" id="category-product-page">
    <div class="wp-inner">
    <div class="section" id="breadcrumb-wp">
            <div class="section-detail">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item">
                    @foreach($product_cats as $product_cat)
                            <a href="">{{$product_cat->name}}</a>
                    @endforeach

                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- END BREADCRUMB -->
        <div class="wp-content-body">
        <div class="section" id="cat-product-wp">
                <div class="section-head d-flex justify-content-between">
                    @foreach($product_cats as $product_cat)
                    <h3 class="section-title">{{$product_cat->name}}</h3>
                    @endforeach
                    <div class="filter-wp">
                        <p class="desc">Hiển thị 45 trên 50 sản phẩm</p>
                        <div class="form-filter">
                            <form method="" action="">
                                <select name="sort" id="sort">
                                    <option value="{{Request::url()}}?sort_by=none ">Sắp xếp</option>
                                    <option value="{{Request::url()}}?sort_by=giam_dan" >Giá cao xuống thấp</option>
                                    <option value="{{Request::url()}}?sort_by=tang_dan">Giá thấp lên cao</option>
                                </select>
                                <button type="submit">Lọc</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="section-detail">
                    <ul class="list-item d-md-flex">
                        @foreach($products as $product)
                        <li>
                            <a href="{{route('detail_product',$product->id)}}" title="" class="thumb">
                                <img src="{{asset($product->thumbnail)}}">
                            </a>
                            <a href="{{route('detail_product',$product->id)}}" title="" class="product-name">{{$product->name}}</a>
                            <div class="price">
                                <span class="new">{{number_format($product->price)}}đ</span>
                                <span class="old">8.990.000đ</span>
                            </div>
                            <div class="action">
                                <a href="{{route('cart.add',$product->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="{{route('checkout',$product->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{$products->links()}}


        </div>

    </div>
</div>
@endsection