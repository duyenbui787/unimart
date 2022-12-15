@extends('layouts.guess')
@section('content')
<div class="main-content-wp" id="search">
    <div class="wp-inner">
        <div class="section list-product-wp">
            <div class="section-head">
                <a href="" class="section-title">Kết quả tìm kiếm</a>
            </div>
            <div class="section-detail">
                @if(!empty($products->items()))
                <ul class="list-item">
                    @foreach($products as $product)
                    <li>
                        <a href="{{route('detail_product',$product->id)}}" title="" class="thumb">
                            <img src="{{asset($product->thumbnail)}}">
                        </a>
                        <a href="{{route('detail_product',$product->id)}}" title="" class="product-name">{{$product->name}}</a>
                        <div class="price">
                            <span class="new">{{$product->price}}</span>
                            <span class="old">8.990.000đ</span>
                        </div>
                        <div class="action">
                            <a href="{{route('cart.add',$product->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                            <a href="{{route('checkout',$product->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                        </div>
                    </li>
                    @endforeach
                    @else
                    <p>Không tìm thấy sản phẩm</p>
                    @endif
                </ul>
                {{ $products->appends(Request::all())->links('pagination::bootstrap-4') }}

            </div>
        </div>
        <!-- END WP-CONTENT-TOP -->
    </div>
</div>
@endsection