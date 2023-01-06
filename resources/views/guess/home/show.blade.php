@extends('layouts.guess')
@section('content')
<div class="main-content-wp" class="home-page">
    <div class="wp-inner">
        <div id="wp-content-top" class="d-flex">
            <div id="left-banner">
                <div class="section d-none d-sm-block">
                    <div class="section-detail ">
                        <ul class="list-item">
                            <li>
                                <a href="">
                                    <img src="public/guess/img/home/Fold3.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="public/guess/img/home/rightbanner-des-ipapro11.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="public/guess/img/home/zenbook 14.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END LEFT BANNER -->
            <div id="main-banner">
                <div class="section">
                    <div class="owl-carousel carousel-top owl-theme">
                        <div class="item">
                            <a href="">
                                <img class="card-img" src="public/guess/img/home/main-banner-1.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img class="card-img" src="public/guess/img/home/main-banner-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img class="card-img" src="public/guess/img/home/main-banner-3.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN-BANNER -->
        </div>
        <div class="wp-content-body">
            <div class="section d-none d-xl-block" id="discount-wp">
                <div class="section-detail d-flex banner-discount-right">
                    <div class="discount-outside" style="background-color:#000">
                        <div>
                            <i class="fa-solid fa-caret-down icon-arrow"></i>
                        </div>

                        <div class="discount" style="color: rgb(255, 255, 255)">GIẢM 70K</div>
                    </div>

                    <div class="discount-inside">
                        <div class="img-banner">
                            <img src="public/guess/img/home/banner-discount-right.png" alt="">
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
            <div class="section" id="support">
                <div class="section-detail">
                    <ul class="list-item d-flex">
                        <li>
                            <div class="thumb">
                                <img src="public/guess/img/home/support-1.png" alt="">
                            </div>
                            <h3 class="title">Miễn phí vận chuyển</h3>
                            <p class="desc">Tới tận tay khách hàng</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/guess/img/home/support-2.png" alt="">
                            </div>
                            <h3 class="title">Tư vấn 24/7</h3>
                            <p class="desc">1900.9999</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/guess/img/home/support-3.png" alt="">
                            </div>
                            <h3 class="title">Tiết kiệm hơn</h3>
                            <p class="desc">Với nhiều ưu đãi cực lớn</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/guess/img/home/support-4.png" alt="">
                            </div>
                            <h3 class="title">Thanh toán nhanh</h3>
                            <p class="desc">Hỗ trợ nhiều hình thức</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/guess/img/home/support-5.png" alt="">
                            </div>
                            <h3 class="title">Đặt hàng online</h3>
                            <p class="desc">Thao tác đơn giản</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END SUPPORT -->
            <div class="section" id="feature-product-wp">
                <div class="section-head">
                    <a class="section-title">Sản phẩm nổi bật</a>
                </div>
                <div class="section-detail">
                    <div class="owl-carousel carousel-feature-product owl-theme">
                        @foreach($feature_product as $item)
                        <div class="item">
                            <a href="{{route('detail_product',$item->product->id)}}" class="thumb">
                                <img class="card-img" src="{{asset($item->thumbnail)}}" alt="">
                            </a>
                            <a href="" class="product-name">{{$item->product->name}}</a>
                            <div class="price">
                                <span class="new">{{number_format($item->product->price)}}đ</span>
                                <span class="old">40.000.000đ</span>
                            </div>
                            <div class="action">
                                <a href="{{route('checkout.add_feature_pro',$item->id)}}" class="buy">Mua ngay</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="keyword d-flex">
                        <ul class="list-keyword d-flex">
                            <li>
                                <div class="keyword-item" style="background-color:rgb(231, 86, 227)">
                                    <a href="">Điện thoại</a>
                                </div>
                            </li>
                            <li>
                                <div class="keyword-item" style="background-color:#b7c948">
                                    <a href="">Laptop</a>
                                </div>
                            </li>
                            <li>
                                <div class="keyword-item" style="background-color:#d87a2d">
                                    <a href="">Máy tính bảng</a>
                                </div>
                            </li>
                            <li>
                                <div class="keyword-item" style="background-color:#487cf2 ">
                                    <a href="">Đồng hồ</a>
                                </div>
                            </li>
                            <li>
                                <div class="keyword-item" style="background-color:#239c28 ">
                                    <a href="">Tivi</a>
                                </div>
                            </li>
                            <li>
                                <div class="keyword-item" style="background-color:#6a2768 ">
                                    <a href="">Phụ kiện</a>
                                </div>
                            </li>
                            <li>
                                <div class="keyword-item" style="background-color:#d87a2d">
                                    <a href="">Tai nghe</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END FEATURE-PRODUCT -->
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
                                <span class="old">40.990.000đ</span>
                            </div>
                            <div class="action">
                                <a href="{{route('cart.add',$product->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="{{route('checkout.add',$product->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
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
                                <span class="old">40.990.000đ</span>
                            </div>
                            <div class="action">
                                <a href="{{route('cart.add',$laptop->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="{{route('checkout.add',$laptop->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
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
                                <span class="old">25.990.000đ</span>
                            </div>
                            <div class="action">
                                <a href="{{route('cart.add',$tivi->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="{{route('checkout.add',$tivi->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
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
                    <ul class="list-item">
                        @foreach($ipads as $ipad)
                        <li>
                            <a href="{{route('detail_product',$ipad->id)}}" title="" class="thumb">
                                <img src="{{asset($ipad->thumbnail)}}">
                            </a>
                            <a href="{{route('detail_product',$ipad->id)}}" title="" class="product-name">{{$ipad->name}}</a>
                            <div class="price">
                                <span class="new">{{number_format($ipad->price)}}đ</span>
                                <span class="old">30.990.000đ</span>
                            </div>
                            <div class="action">
                                <a href="{{route('cart.add',$ipad->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="{{route('checkout.add',$ipad->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
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
                                <a href="{{route('checkout.add',$sound->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
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
                                <a href="{{route('checkout.add',$watch->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
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
                                <span class="old">5.000.000đ</span>
                            </div>
                            <div class="action">
                                <a href="{{route('cart.add',$case->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="{{route('checkout.add',$case->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                </div>


            </div>

        </div>
        <!-- END WP-CONTENT-TOP -->

    </div>
</div>
@endsection