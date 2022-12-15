@extends('layouts.guess')
@section('content')
<div class="main-content-wp" id="product">
    <div class="wp-inner">
        <div class="section list-product-wp">
            <div class="section-head">
                @foreach($mobile_cat as $item)
                <a href="{{route('category',$item->id)}}" class="section-title">{{$item->name}}</a>
                @endforeach
            </div>
            <div class="section-detail">
                <ul class="list-item">
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
        <div class="section list-product-wp">
            <div class="section-head">
                @foreach($laptop_cat as $item)
                <a href="{{route('category',$item->id)}}" class="section-title">{{$item->name}}</a>
                @endforeach
            </div>
            <div class="section-detail">
                <ul class="list-item">
                    @foreach($laptops as $laptop)
                    <li>
                        <a href="{{route('detail_product',$laptop->id)}}" title="" class="thumb">
                            <img src="{{asset($laptop->thumbnail)}}">
                        </a>
                        <a href="{{route('detail_product',$laptop->id)}}" title="" class="product-name">{{$laptop->name}}</a>
                        <div class="price">
                            <span class="new">{{number_format($laptop->price)}}đ</span>
                            <span class="old">8.990.000đ</span>
                        </div>
                        <div class="action">
                            <a href="{{route('cart.add',$laptop->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                            <a href="{{route('checkout',$product->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="section list-product-wp">
            <div class="section-head">
                @foreach($tivi_cat as $item)
                <a href="{{route('category',$item->id)}}" class="section-title">{{$item->name}}</a>
                @endforeach
            </div>
            <div class="section-detail">
                <ul class="list-item">
                    @foreach($tivis as $tivi)
                    <li>
                        <a href="{{route('detail_product',$tivi->id)}}" title="" class="thumb">
                            <img src="{{asset($tivi->thumbnail)}}">
                        </a>
                        <a href="{{route('detail_product',$tivi->id)}}" title="" class="product-name">{{$tivi->name}}</a>
                        <div class="price">
                            <span class="new">{{number_format($tivi->price)}}đ</span>
                            <span class="old">8.990.000đ</span>
                        </div>
                        <div class="action">
                            <a href="{{route('cart.add',$tivi->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                            <a href="{{route('checkout',$product->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="section list-product-wp">
            <div class="section-head">
                @foreach($ipad_cat as $item)
                <a href="{{route('category',$item->id)}}" class="section-title">{{$item->name}}</a>
                @endforeach
            </div>
            <div class="section-detail">
                <ul class="list-item ">
                    @foreach($ipads as $ipad)
                    <li>
                        <a href="{{route('detail_product',$ipad->id)}}" title="" class="thumb">
                            <img src="{{asset($ipad->thumbnail)}}">
                        </a>
                        <a href="{{route('detail_product',$ipad->id)}}" title="" class="product-name">{{$ipad->name}}</a>
                        <div class="price">
                            <span class="new">{{number_format($ipad->price)}}đ</span>
                            <span class="old">8.990.000đ</span>
                        </div>
                        <div class="action">
                            <a href="{{route('cart.add',$ipad->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                            <a href="{{route('checkout',$product->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="section list-product-wp">
            <div class="section-head">
                @foreach($sound_cat as $item)
                <a href="{{route('category',$item->id)}}" class="section-title">{{$item->name}}</a>
                @endforeach
            </div>
            <div class="section-detail">
                <ul class="list-item">
                    @foreach($sounds as $sound)
                    <li>
                        <a href="{{route('detail_product', $sound->id)}}" title="" class="thumb">
                            <img src="{{asset($sound->thumbnail)}}">
                        </a>
                        <a href="{{route('detail_product', $sound->id)}}" title="" class="product-name">{{$sound->name}}</a>
                        <div class="price">
                            <span class="new">{{number_format($sound->price)}}đ</span>
                            <span class="old">8.990.000đ</span>
                        </div>
                        <div class="action">
                            <a href="{{route('cart.add',$sound->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                            <a href="{{route('checkout',$product->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="section list-product-wp">
            <div class="section-head">
                @foreach($watch_cat as $item)
                <a href="{{route('category',$item->id)}}" class="section-title">{{$item->name}}</a>
                @endforeach
            </div>
            <div class="section-detail">
                <ul class="list-item">
                    @foreach($watchs as $watch)
                    <li>
                        <a href="{{route('detail_product', $watch->id)}}" title="" class="thumb">
                            <img src="{{asset($watch->thumbnail)}}">
                        </a>
                        <a href="{{route('detail_product', $watch->id)}}" title="" class="product-name">{{$watch->name}}</a>
                        <div class="price">
                            <span class="new">{{number_format($watch->price)}}đ</span>
                            <span class="old">8.990.000đ</span>
                        </div>
                        <div class="action">
                            <a href="{{route('cart.add',$watch->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                            <a href="{{route('checkout',$product->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="section list-product-wp">
            <div class="section-head">
                @foreach($case_cat as $item)
                <a href="{{route('category',$item->id)}}" class="section-title">{{$item->name}}</a>
                @endforeach
            </div>
            <div class="section-detail">
                <ul class="list-item">
                    @foreach($cases as $case)
                    <li>
                        <a href="{{route('detail_product', $case->id)}}" title="" class="thumb">
                            <img src="{{asset($case->thumbnail)}}">
                        </a>
                        <a href="{{route('detail_product', $case->id)}}" title="" class="product-name">{{$case->name}}</a>
                        <div class="price">
                            <span class="new">{{number_format($case->price)}}đ</span>
                            <span class="old">8.990.000đ</span>
                        </div>
                        <div class="action">
                            <a href="{{route('cart.add',$case->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                            <a href="{{route('checkout',$product->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
    <!-- END WP-CONTENT-TOP -->
</div>
@endsection