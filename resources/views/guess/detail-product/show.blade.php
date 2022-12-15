@extends('layouts.guess')
@section('content')
<div class="main-content-wp">
    <div class="wp-inner">
        <div class="section" id="breadcrumb-wp">
            <div class="section-detail">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item">
                            @foreach($products as $product)
                            <a href="">{{$product->product_cat->name}}</a>
                            @endforeach
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- END BREADCRUMB -->
        <div class="wp-content">
            <div class="section" id="detail-product-wp">
                <div class="section-detail">
                    <div class="row">
                        <div class="col-12 col-md-6 info-left d-md-flex">
                            <ul class="list-thumb">
                                @foreach($product_childrens as $product_children)
                                <li class="active">
                                    <a href="#"><img src="{{asset($product_children->thumbnail)}}" alt=""></a>
                                </li>
                                @endforeach
                            </ul>
                            <div class="show-picture">
                                @foreach($products as $product)
                                <a href="">
                                    <img src="{{asset($product->thumbnail)}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 info-right">
                            <div class="info-right-inner">
                                <div class="product-head info-right-item">
                                    <h1 class="name-product">
                                        {{$product->name}}
                                    </h1>
                                    <div class="SKU-review-product d-flex">
                                        <div class="SKU-product">
                                            SKU: sw2204141501410063
                                        </div>
                                        <div class="review-product d-flex">
                                            <div class="common-rate">
                                                <span>
                                                    <i class="fa-solid fa-star icon-star"></i>
                                                    <i class="fa-solid fa-star icon-star"></i>
                                                    <i class="fa-solid fa-star icon-star"></i>
                                                    <i class="fa-solid fa-star icon-star"></i>
                                                    <i class="fa-solid fa-star icon-star"></i>
                                                </span>
                                            </div>
                                            <div class="comment">
                                                <span> (9999+ Nhận xét)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-product">
                                        <span class="price">{{number_format($product->price)}}</span>
                                    </div>
                                </div>
                                <div class="product-color-size info-right-item">
                                    <div class="info-right-item">
                                        <div class="desc">
                                            <h5 class="info">Thông tin sản phẩm:</h5>
                                            <p>Bộ vi xử lý :Intel Core i505200U 2.2 GHz (3MB L3)</p>
                                            <p>Cache upto 2.7 GHz</p>
                                            <p>Bộ nhớ RAM :4 GB (DDR3 Bus 1600 MHz)</p>
                                            <p>Đồ họa :Intel HD Graphics</p>
                                            <p>Ổ đĩa cứng :500 GB (HDD)</p>
                                        </div>
                                    </div>
                                    <div class="card-product-add info-right-item">
                                        <div class="product-add-icon-heart d-flex">
                                            <div class="product-add">
                                                <a href="{{route('cart.add',$product->id)}}" class="btn-product-add">Thêm vào giỏ hàng</a>
                                            </div>
                                            <div class="icon-heart">
                                                <i class="fa-regular fa-heart icon-heart-inner"></i>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="product-freeship info-right-item">
                                        <div class="freeship product-freeship-item">
                                            <div class="row">
                                                <div class="col-md-2 icon-product-freeship">
                                                    <i class="fa-solid fa-truck-fast icon-truck"></i>
                                                </div>
                                                <div class="col-md-10 detail-product-freeship">
                                                    <div class="title">Miễn phí vận chuyển</div>
                                                    <div class="text">Giao hàng miễn phí tiêu chuẩn cho các đơn hàng trên 230.000₫. Giao hàng dự kiến vào ngày 15/08/2022 - 17/08/2022.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="COD-rule product-freeship-item">
                                            <div class="row">
                                                <div class="col-md-2 icon-product-freeship">
                                                    <i class="fa-solid fa-money-bill-wave"></i>
                                                </div>
                                                <div class="col-md-10 detail-product-freeship">

                                                    <div class="title">Quy tắc COD</div>
                                                    <div class="text">Tìm hiểu thêm</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="return-policy product-freeship-item">
                                            <div class="row">
                                                <div class="col-md-2 icon-product-freeship">
                                                    <i class="fa-solid fa-building-shield"></i>
                                                </div>
                                                <div class="col-md-10 detail-product-freeship">
                                                    <div class="title">Chính sách hoàn trả</div>
                                                    <div class="text">Tìm hiểu thêm</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END DEATAIL-PRODUCT-WP -->
            <div class="section" id="best-seller-category-wp">
                <div class="section-head">
                    <h3 class="section-title">Sản phẩm bán chạy</h3>
                </div>
                <div class="section-detail">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-deck">
                                @foreach($best_seller_product as $item)
                                <div class="card border-0 rounded-0">
                                    <img src="{{asset($item->product->thumbnail)}}" alt="" class="card-img">
                                    <div class="buy-product" data-toggle="modal" data-target="#demo-modal">
                                        <a href="{{route('checkout',$item->id)}}">Mua sản phẩm này</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SAME-CATEGORY-WP -->
        </div>
    </div>
</div>
@endsection