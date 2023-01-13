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
            <div class="section d-none d-xl-block" id="discount-wp">
                <div class="section-detail d-flex banner-discount-right">
                    <div class="discount-outside" style="background-color:rgb(74, 74, 74)">
                        <div>
                            <i class="fa-solid fa-caret-down icon-arrow"></i>
                        </div>

                        <div class="discount" style="color: rgb(255, 255, 255)">GIẢM 70K</div>
                    </div>

                    <div class="discount-inside">
                        <div class="img-banner">
                            <img src="{{asset('guess/img/home/banner-discount-right.png')}}" alt="">
                        </div>

                        <div class="register-form">
                            <div class="inside-input-btn d-flex">
                                <div class="inside-input">
                                    <input type="text" placeholder="Nhập địa chỉ email của bạn">
                                </div>

                                <div class="btn-register">
                                    <button>Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="detail-product-wp">
                <div class="section-detail">
                    <div class="row">
                        <div class="col-12 col-md-6 info-left d-md-flex">
                            <ul class="list-thumb" id="list-thumb">
                                @foreach($product_childrens as $product_children)
                                <li class="active">
                                    <a href="#">
                                        <img src="{{asset($product_children->thumbnail)}}" alt="">
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <div class="show-picture">
                                @foreach($products as $product)
                                <a href="" id="main-thumb">
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
                                                <span> (125+ Nhận xét)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-product">
                                        <span class="price">{{number_format($product->price)}}đ</span>
                                    </div>
                                </div>
                                <div class="product-color-size info-right-item">
                                    <div class="info-right-item">
                                        <div class="desc">
                                            <div id="promotion">
                                                <i class="fa-solid fa-gift"></i>
                                                <h5>Ưu đãi thêm</h5>
                                            </div>
                                            <div id="wp-list-promotion">
                                                <div class="item">
                                                    <div class="title">
                                                        <i class="fa-sharp fa-solid fa-diamond"></i>
                                                        <span>Ưu đãi cổng thanh toán:</span>
                                                    </div>
                                                    <div class="content-first">
                                                        <i class="fa-sharp fa-solid fa-circle"></i>
                                                        <p>Giảm 5% tối đa 300.000đ khi thanh toán qua MOCA</p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="title">
                                                        <i class="fa-sharp fa-solid fa-diamond"></i>
                                                        <span>Ưu đãi khi mua kèm:</span>
                                                    </div>
                                                    <div class="content">
                                                        <ul id="list-content">
                                                            <li>Giảm 200.000đ khi mua Apple Care</li>
                                                            <li>Giảm 20% gói báo hành kim cương 12 tháng và 24 tháng</li>
                                                            <li>Mua combo 3 phụ kiện giảm 200.000đ</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <h5 class="info">Thông tin sản phẩm:</h5>
                                            <p>{!! str_replace("," ,"<br />", $product->desc) !!}</p></br> -->
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
                                                    <div class="text">Giao hàng miễn phí tiêu chuẩn cho các đơn hàng trên 1.000.000₫.
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
            <div class="section" id="desc-wp">
                <div class="section-head">
                    <div class="section-title">
                        <h3>Mô tả sản phẩm</h3>
                    </div>
                    <div class="detail-desc">
                        <h5>Đặc điểm nổi bật:</h5>
                        <p>{!! str_replace("/n" ,"<br />", $product->desc) !!}</p></br>
                    </div>
                </div>
            </div>
            <!-- END DESC-PRODUCT -->
            <div class="section" id="best-seller-category-wp">
                <div class="section-head">
                    <h3 class="section-title">Sản phẩm bán chạy</h3>
                </div>
                <div class="section-detail">
                    <div class="owl-carousel owl-carousel-best-seller owl-theme">
                        @foreach($best_seller_product as $item)
                        <div class="item">
                            <a href="{{route('detail_product',$item->product->id)}}" class="thumb">
                                <img class="card-img" src="{{asset($item->product->thumbnail)}}" alt="">
                            </a>
                            <a href="{{route('detail_product',$item->product->id)}}" class="product-name">{{$item->name}}</a>
                            <div class="price">
                                <span class="new">{{number_format($item->price)}}đ</span>
                                <span class="old">40.000.000đ</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                  
                    <!-- <div class="row">
                            <div class="col-sm-12">
                                <div class="card-deck">
                                    @foreach($best_seller_product as $item)
                                    <div class="card border-0 rounded-0">
                                        <img src="{{asset($item->product->thumbnail)}}" alt="" class="card-img">
                                        <div class="buy-product" data-toggle="modal" data-target="#demo-modal">
                                            <a href="{{route('checkout.add_bestseller_pro',$item->id)}}">Mua sản phẩm này</a>


                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>
            <!-- END SAME-CATEGORY-WP -->
        </div>
    </div>
</div>
@endsection