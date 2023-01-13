<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Open+Sans:wght@400;600;700&family=Roboto&family=Roboto+Flex:opsz,wght@8..144,100;8..144,300&family=Roboto+Mono:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('guess/reset.css')}}">
    <link rel="stylesheet" href="{{asset('guess/style.css')}}">
    <link rel="stylesheet" href="{{asset('guess/responsive.css')}}">
    <!-- Carousel -->
    <link rel="stylesheet" href="{{asset('guess/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('guess/owlcarousel/assets/owl.theme.default.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Unimart</title>
</head>

<body>

    <div id="wrapper">
        <div id="header-wp">
            <div id="header-top">
                <div id="banner-top">
                    <!-- <img src="public/guess/img/home/banner-header.webp" alt=""> -->
                    <i class="fa-solid fa-truck truck"></i>
                    <div id="freeship">Miễn phí vận chuyển</div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-sm-4 col-4  header-top-left">
                        <ul class="menu-header-left d-md-flex">
                            <li class="active">
                                <a href="{{url('/')}}" title="TRANG CHỦ" class="item-wp">
                                    <span class="item">TRANG CHỦ</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{url('product/show')}}" title="SẢN PHẨM" class="item-wp">
                                    <span class="item">SẢN PHẨM</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('blog/show')}}" title="BLOG" class="item-wp">
                                    <span class="item">BLOG</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('introduce/show')}}" title="GIỚI THIỆU" class="item-wp">
                                    <span class="item">GIỚI THIỆU</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('contact/show')}}" title="LIÊN HỆ" class="item-wp">
                                    <span class="item">LIÊN HỆ</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="owl-carousel carousel-header owl-theme d-sm-block d-md-none">
                            <li class="item active">
                                <a href="{{url('/')}}" title="TRANG CHỦ" class="item-wp">
                                    <span class="item">TRANG CHỦ</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="{{url('product/show')}}" title="SẢN PHẨM" class="item-wp">
                                    <span class="item">SẢN PHẨM</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="{{url('blog/show')}}" title="BLOG" class="item-wp">
                                    <span class="item">BLOG</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="{{url('introduce/show')}}" title="GIỚI THIỆU" class="item-wp">
                                    <span class="item">GIỚI THIỆU</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="{{url('contact/show')}}" title="LIÊN HỆ" class="item-wp">
                                    <span class="item">LIÊN HỆ</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END HEADER-TOP-LEFT -->
                    <div class="col-md-2 col-4 header-logo">
                        <a href="{{url('/')}}" id="logo">UNIMART</a>
                    </div>
                    <!-- END HEADER-LOGO -->
                    <div class="col-md-5 col-sm-3 col-3 header-top-right">
                        <div id="action-wp" class="d-flex justify-content-end">
                            <div id="cart-wp" class="d-inline-block">
                                <div id="btn-cart">
                                    <div id="cart">
                                        <a href="{{route('cart')}}"><i class="fa-sharp fa-solid fa-cart-shopping icon"></i></a>
                                        <span id="num">{{Cart::count()}}</span>
                                    </div>
                                    <div id="dropdown">
                                        @if(Cart::count()>0)
                                        <p class="desc">Có <span>{{Cart::count()}}</span> sản phẩm trong giỏ hàng</p>
                                        <ul class="list-cart">
                                            @foreach(Cart::content() as $row)
                                            <li>
                                                <a href="" class="thumb">
                                                    <img src="{{asset($row->options->thumbnail)}}" alt="">
                                                </a>
                                                <div class="info">
                                                    <a href="" class="product-name">{{$row->name}}</a>
                                                    <p class="price mb-0">{{number_format($row->price,0, ',', '.')}}đ</p>
                                                    <p class="qty mb-0">Số lượng: <span>{{$row->qty}}</span></p>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        <div class="total-price d-flex justify-content-between">
                                            <p class="title mb-0">Tổng:</p>
                                            <p class="price mb-0">{{Cart::total()}}đ</p>
                                        </div>
                                        <div class="action-cart d-flex justify-content-between">
                                            <a href="{{route('cart')}}" class="cart">Giỏ hàng</a>
                                            <a href="{{route('checkout')}}" class="check-out">Thanh toán</a>
                                        </div>
                                        @else
                                        <div class="empty-bag-img">
                                            <img class="w-64 h-64" src="{{asset('guess/img/index/icon-bag.webp')}}" alt="">
                                        </div>
                                        <p class="empty-bag">Giỏ hàng rỗng</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div id="advisory-wp" class="d-inline-block">
                                <span class="title d-block">Tư vấn</span>
                                <span class="phone ">0987.654.321</span>
                            </div>
                        </div>
                    </div>
                    <!-- END HEADER-TOP-RIGHT -->
                </div>
            </div>
            <!-- END HEADER-TOP -->
            <div id="header-bottom">
                <div id="nav-wrapper">
                    <div id="header-body" class="d-flex justify-content-between align-items-center">
                        <div id="toggle" class="d-block d-sm-none">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                        <nav id="header-body-left">
                            <ul id="main-menu" class="d-none d-sm-flex">
                                <li>
                                    <a href="{{url('category/show/15')}}" class="category">Điện thoại</a>
                                    <nav class="header-cell-category">
                                        <div class="cell-list-category">
                                            <div class="header-float">
                                                <h6 class="header-float-title"><a href="{{url('category/show/15')}}">CHỌN THEO HÃNG</a></h6>
                                                <div>
                                                    <p><a href="{{url('category/show/15')}}">Iphone</a></p>
                                                    <p><a href="{{url('category/show/15')}}">Samsung</a></p>
                                                    <p><a href="{{url('category/show/15')}}">Xiaomi</a></p>
                                                    <p><a href="{{url('category/show/15')}}">Oppo</a></p>
                                                    <p><a href="{{url('category/show/15')}}">Nokia</a></p>
                                                    <p><a href="{{url('category/show/15')}}">Realme</a></p>
                                                    <p><a href="{{url('category/show/15')}}">Vivo</a></p>
                                                    <p><a href="{{url('category/show/15')}}">Techno</a></p>
                                                    <p><a href="{{url('category/show/15')}}">Asus</a></p>
                                                </div>
                                            </div>
                                            <div class="header-float">
                                                <h6>
                                                    <a href="{{url('category/show/15')}}">CHỌN THEO MỨC GIÁ</a>
                                                </h6>
                                                <div>
                                                    <p><a href="{{url('category/show/15')}}">Dưới 5 triệu</a></p>
                                                </div>
                                                <div>
                                                    <p><a href="{{url('category/show/15')}}">Từ 5 - 10 triệu</a></p>
                                                </div>
                                                <div>
                                                    <p><a href="{{url('category/show/15')}}">Từ 10 - 15 triệu</a></p>
                                                </div>
                                                <div>
                                                    <p><a href="{{url('category/show/15')}}">Từ 15 - 20 triệu</a></p>
                                                </div>
                                                <div>
                                                    <p><a href="{{url('category/show/15')}}">Trên 20 triệu</a></p>
                                                </div>
                                            </div>
                                            <div class="header-float border-right">
                                                <h6>
                                                    <a href="{{url('category/show/15')}}">CHỌN THEO NHU CẦU </a>
                                                </h6>
                                                <p>
                                                    <a href="{{url('category/show/15')}}">Hỗ trợ 5G</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/15')}}">Điện thoại gaming</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/15')}}">Dung lượng lớn</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/15')}}">Pin trâu</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/15')}}">Sạc không dây</a>
                                                </p>
                                            </div>
                                            <div class="cell-img">
                                                <div class=" header-float header-float-img">
                                                    <a href=""><img src="{{asset('guess/img/home/dt-1.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </li>
                                <li>
                                    <a href="{{url('category/show/3')}}" class="category">Máy tính bảng</a>
                                    <nav class="header-cell-category">
                                        <div class="cell-list-category">
                                            <div class="header-float">
                                                <h6 class="header-float-title"><a href="{{url('category/show/3')}}">CHỌN THEO HÃNG</a></h6>
                                                <div>
                                                    <p><a href="{{url('category/show/3')}}">Ipad</a></p>
                                                    <p><a href="{{url('category/show/3')}}">Samsung</a></p>
                                                    <p><a href="{{url('category/show/3')}}">Xiaomi</a></p>
                                                    <p><a href="{{url('category/show/3')}}">Lenovo</a></p>
                                                    <p><a href="{{url('category/show/3')}}">Nokia</a></p>
                                                    <p><a href="{{url('category/show/3')}}">Alcatel</a></p>
                                                    <p><a href="{{url('category/show/3')}}">Kindle</a></p>
                                                    <p><a href="{{url('category/show/3')}}">Máy đọc sách</a></p>
                                                </div>
                                            </div>
                                            <div class="header-float">
                                                <h6>
                                                    <a href="{{url('category/show/3')}}">CHỌN THEO MỨC GIÁ</a>
                                                </h6>
                                                <div>
                                                    <p><a href="{{url('category/show/3')}}">Dưới 3 triệu</a></p>
                                                </div>
                                                <div>
                                                    <p><a href="{{url('category/show/3')}}">Từ 3 - 6 triệu</a></p>
                                                </div>
                                                <div>
                                                    <p><a href="{{url('category/show/3')}}">Từ 6 - 9 triệu</a></p>
                                                </div>
                                                <div>
                                                    <p><a href="{{url('category/show/3')}}">Từ 9 - 12 triệu</a></p>
                                                </div>
                                                <div>
                                                    <p><a href="{{url('category/show/3')}}">Trên 12 triệu</a></p>
                                                </div>
                                            </div>
                                            <div class="header-float border-right">
                                                <h6>
                                                    <a href="{{url('category/show/3')}}">CHỌN THEO NHU CẦU </a>
                                                </h6>
                                                <p>
                                                    <a href="{{url('category/show/3')}}">Chơi game</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/3')}}">Học tập - Văn phòng</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/3')}}">Giải trí</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/3')}}">Đồ họa - Sáng tạo</a>
                                                </p>
                                            </div>
                                            <div class="cell-img">
                                                <div class=" header-float header-float-img">
                                                    <a href=""><img src="{{asset('guess/img/home/mtb-1.jpg')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </li>
                                <li>
                                    <a href="{{url('category/show/16')}}" class="category">Laptop</a>
                                    <nav class="header-cell-category">
                                        <div class="cell-list-category">
                                            <div class="header-float">
                                                <h6 class="header-float-title"><a href="{{url('category/show/16')}}">CHỌN THEO HÃNG</a></h6>
                                                <div>
                                                    <p><a href="{{url('category/show/16')}}">Mac</a></p>
                                                    <p><a href="{{url('category/show/16')}}">HP</a></p>
                                                    <p><a href="{{url('category/show/16')}}">Dell</a></p>
                                                    <p><a href="{{url('category/show/16')}}">ASUS</a></p>
                                                    <p><a href="{{url('category/show/16')}}">Acer</a></p>
                                                    <p><a href="{{url('category/show/16')}}">Lenovo</a></p>
                                                    <p><a href="{{url('category/show/16')}}">Xiaomi</a></p>
                                                    <p><a href="{{url('category/show/16')}}">Huawei</a></p>
                                                    <p><a href="{{url('category/show/16')}}">LG</a></p>
                                                    <p><a href="{{url('category/show/16')}}">Intel</a></p>
                                                </div>
                                            </div>
                                            <div class="header-float">
                                                <h6>
                                                    <a href="{{url('category/show/16')}}">CHỌN THEO MỨC GIÁ</a>
                                                </h6>
                                                <div>
                                                    <p><a href="{{url('category/show/16')}}">Dưới 5 triệu</a></p>
                                                </div>
                                                <div>
                                                    <p><a href="{{url('category/show/16')}}">Từ 5 - 10 triệu</a></p>
                                                </div>
                                                <div>
                                                    <p><a href="{{url('category/show/16')}}">Từ 10 - 15 triệu</a></p>
                                                </div>
                                                <div>
                                                    <p><a href="{{url('category/show/16')}}">Từ 15 - 20 triệu</a></p>
                                                </div>
                                                <div>
                                                    <p><a href="{{url('category/show/16')}}">Trên 20 triệu</a></p>
                                                </div>
                                            </div>
                                            <div class="header-float border-right">
                                                <h6>
                                                    <a href="{{url('category/show/16')}}">CHỌN THEO NHU CẦU </a>
                                                </h6>
                                                <p>
                                                    <a href="{{url('category/show/16')}}">Văn phòng</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/16')}}">Gaming</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/16')}}">Mỏng nhẹ</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/16')}}">Đồ họa - Sáng tạo</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/16')}}">Sinh viên</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/16')}}">Cảm ứng</a>
                                                </p>
                                            </div>
                                            <div class="cell-img">
                                                <div class=" header-float header-float-img">
                                                    <a href=""><img src="{{asset('guess/img/home/lt-1.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </li>
                                <li>
                                    <a href="{{url('category/show/18')}}" class="category">Tai nghe</a>
                                    <nav class="header-cell-category">
                                        <div class="cell-list-category">
                                            <div class="header-float">
                                                <h6 class="header-float-title"><a href="{{url('category/show/18')}}">CHỌN THEO HÃNG</a></h6>
                                                <div>
                                                    <p><a href="{{url('category/show/18')}}">Apple</a></p>
                                                    <p><a href="{{url('category/show/18')}}">Samsung</a></p>
                                                    <p><a href="{{url('category/show/18')}}">Xiaomi</a></p>
                                                    <p><a href="{{url('category/show/18')}}">JBL</a></p>
                                                    <p><a href="{{url('category/show/18')}}">LG</a></p>
                                                    <p><a href="{{url('category/show/18')}}">Sony</a></p>
                                                    <p><a href="{{url('category/show/18')}}">Huawei</a></p>
                                                </div>
                                            </div>
                                            <div class="header-float">
                                                <h6>
                                                    <a href="{{url('category/show/18')}}">CHỌN LOẠI TAI NGHE</a>
                                                </h6>
                                                <p><a href="{{url('category/show/18')}}">Tai nghe Bluetooth</a></p>
                                                <p><a href="{{url('category/show/18')}}">Tai nghe chụp tai</a></p>
                                                <p><a href="{{url('category/show/18')}}">Tai nghe có dây</a></p>
                                                <p><a href="{{url('category/show/18')}}">Tai nghe Gaming</a></p>
                                            </div>
                                            <div class="header-float border-right">
                                                <h6>
                                                    <a href="{{url('category/show/18')}}">HãNG LOA</a>
                                                </h6>
                                                <p>
                                                    <a href="{{url('category/show/18')}}">JBL</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/18')}}">LG</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/18')}}">Sony</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/18')}}">Huawei</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/18')}}">B&O</a>
                                                </p>
                                            </div>
                                            <div class="cell-img">
                                                <div class=" header-float header-float-img">
                                                    <a href=""><img src="{{asset('guess/img/home/tn-6n.jpg')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </li>
                                <li>
                                    <a href="{{url('category/show/19')}}" class="category">Đồng hồ</a>
                                    <nav class="header-cell-category">
                                        <div class="cell-list-category">
                                            <div class="header-float">
                                                <h6 class="header-float-title"><a href="{{url('category/show/19')}}">CHỌN THEO HÃNG</a></h6>
                                                <div>
                                                    <p><a href="{{url('category/show/19')}}">Apple</a></p>
                                                    <p><a href="{{url('category/show/19')}}">Samsung</a></p>
                                                    <p><a href="{{url('category/show/19')}}">Xiaomi</a></p>
                                                    <p><a href="{{url('category/show/19')}}">ASUS</a></p>
                                                    <p><a href="{{url('category/show/19')}}">Oppo</a></p>
                                                    <p><a href="{{url('category/show/19')}}">Huawei</a></p>
                                                </div>
                                            </div>
                                            <div class="header-float">
                                                <h6>
                                                    <a href="{{url('category/show/19')}}">LOẠI ĐỒNG HỒ</a>
                                                </h6>
                                                <p><a href="{{url('category/show/19')}}">Đồng hồ thông minh</a></p>
                                                <p><a href="{{url('category/show/19')}}">Vòng đeo tay thông minh</a></p>
                                                <p><a href="{{url('category/show/19')}}">Đồng hồ định vị trẻ em</a></p>
                                                <p><a href="{{url('category/show/19')}}">Dây đeo</a></p>
                                            </div>
                                            <div class="header-float">
                                                <h6>
                                                    <a href="{{url('category/show/19')}}">TÍNH NĂNG</a>
                                                </h6>
                                                <p>
                                                    <a href="{{url('category/show/19')}}">Hỗ trợ Esim</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/19')}}">Màn hình luôn bật</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/19')}}">Đo oxy trong máu SpO2</a>
                                                </p>
                                            </div>
                                            <div class="header-float border-right">
                                                <h6>
                                                    <a href="{{url('category/show/19')}}">KÍCH CỠ ĐỒNG HỒ</a>
                                                </h6>

                                                <p>
                                                    <a href="{{url('category/show/19')}}">Cho nam 42-47mm</a>
                                                </p>

                                                <p>
                                                    <a href="{{url('category/show/19')}}">Cho nữ < 42mm</a>
                                                </p>
                                            </div>
                                            <div class="cell-img">
                                                <div class=" header-float header-float-img">
                                                    <a href=""><img src="{{asset('guess/img/home/dh-6.jpg')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </li>
                                <li>
                                    <a href="{{url('category/show/20')}}" class="category">Phụ kiện</a>
                                    <nav class="header-cell-category">
                                        <div class="cell-list-category">
                                            <div class="header-float">
                                                <h6 class="header-float-title"><a href="{{url('category/show/20')}}">PHỤ KIỆN ĐIỆN THOẠI</a></h6>
                                                <div>
                                                    <p><a href="{{url('category/show/20')}}">Phụ kiện Apple</a></p>
                                                    <p><a href="{{url('category/show/20')}}">Dán màn hình</a></p>
                                                    <p><a href="{{url('category/show/20')}}">Ốp lưng</a></p>
                                                    <p><a href="{{url('category/show/20')}}">Bao da</a></p>
                                                    <p><a href="{{url('category/show/20')}}">Thẻ nhớ</a></p>
                                                    <p><a href="{{url('category/show/20')}}">Cáp,sạc</a></p>
                                                </div>
                                            </div>
                                            <div class="header-float">
                                                <h6>
                                                    <a href="{{url('category/show/20')}}">PHỤ KIỆN LAPTOP</a>
                                                </h6>
                                                <p><a href="{{url('category/show/20')}}">Chuột bàn phím</a></p>
                                                <p><a href="{{url('category/show/20')}}">Balo - Túi xách</a></p>
                                                <p><a href="{{url('category/show/20')}}">Phần mềm</a></p>
                                                <p><a href="{{url('category/show/20')}}">Giá đỡ</a></p>
                                            </div>
                                            <div class="header-float border-right">
                                                <h6>
                                                    <a href="{{url('category/show/20')}}">THIẾT BỊ MẠNG</a>
                                                </h6>
                                                <p>
                                                    <a href="{{url('category/show/20')}}">Thiết bị phát sóng wifi</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/20')}}">Bộ phát wifi di động</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/20')}}">Bộ kích sóng wifi</a>
                                                </p>
                                            </div>
                                            <div class="cell-img">
                                                <div class=" header-float header-float-img">
                                                    <a href=""><img src="{{asset('guess/img/home/pk-green-4.jpg')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </li>
                                <li>
                                    <a href="{{url('category/show/17')}}" class="category">Tivi</a>
                                    <nav class="header-cell-category">
                                        <div class="cell-list-category">
                                            <div class="header-float">
                                                <h6 class="header-float-title"><a href="{{url('category/show/17')}}">CHỌN THEO HÃNG</a></h6>
                                                <div>
                                                    <p><a href="{{url('category/show/17')}}">Samsung</a></p>
                                                    <p><a href="{{url('category/show/17')}}">Xiaomi</a></p>
                                                    <p><a href="{{url('category/show/17')}}">LG</a></p>
                                                    <p><a href="{{url('category/show/17')}}">Sony</a></p>
                                                    <p><a href="{{url('category/show/17')}}">Casper</a></p>
                                                    <p><a href="{{url('category/show/17')}}">Toshiba</a></p>
                                                </div>
                                            </div>
                                            <div class="header-float">
                                                <h6>
                                                    <a href="">CHỌN THEO MỨC GIÁ</a>
                                                </h6>
                                                <p><a href="{{url('category/show/17')}}">Từ 9 - 12 triệu</a></p>
                                                <p><a href="{{url('category/show/17')}}">Từ 12 - 15 triệu</a></p>
                                                <p><a href="{{url('category/show/17')}}">Trên 15 triệu</a></p>
                                            </div>
                                            <div class="header-float">
                                                <h6>
                                                    <a href="{{url('category/show/17')}}">LOẠI TIVI</a>
                                                </h6>
                                                <p>
                                                    <a href="{{url('category/show/17')}}">Smart tivi</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/17')}}">Tivi LED</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/17')}}">Tivi Nanocell</a>
                                                </p>
                                            </div>
                                            <div class="header-float border-right">
                                                <h6>
                                                    <a href="{{url('category/show/17')}}">CHỌN THEO KÍCH THƯỚC</a>
                                                </h6>
                                                <p>
                                                    <a href="{{url('category/show/17')}}">Tivi 32 inch</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/17')}}">Tivi 43 inch</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/17')}}">Tivi 50 inch</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/17')}}">Tivi 55 inch</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/17')}}">Tivi 65 inch</a>
                                                </p>
                                                <p>
                                                    <a href="{{url('category/show/17')}}">Tivi 85 inch</a>
                                                </p>
                                            </div>
                                            <div class="cell-img">
                                                <div class=" header-float header-float-img">
                                                    <a href=""><img src="{{asset('guess/img/home/tv-4.jpg')}}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </li>
                            </ul>
                        </nav>
                        <!-- MENU RESPONSIVE -->
                        <div class="menu-responsive d-sm-none">
                            <div class="menu-responsive-inner">
                                <div class="close">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                                <div class="list-item">
                                    <div class="item">
                                        <div class="item-title d-flex">
                                            <h3>Điện thoại</h3>
                                            <i class="fa-solid fa-minus icon-minus"></i>
                                            <i class="fa-solid fa-plus icon-plus"></i>
                                        </div>
                                        <div class="item-content-wp">
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span href="" class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Chọn theo hãng</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="{{url('category/show/15')}}" class="radio-label">Iphone</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="{{url('category/show/15')}}" class="radio-label">Samsung</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="{{url('category/show/15')}}" class="radio-label">Xiaomi</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="{{url('category/show/15')}}" class="radio-label">Oppo</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="{{url('category/show/15')}}" class="radio-label">Nokia</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="{{url('category/show/15')}}" class="radio-label">Realme</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="{{url('category/show/15')}}" class="radio-label">Vivo</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="{{url('category/show/15')}}" class="radio-label">Techno</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="{{url('category/show/15')}}" class="radio-label">Asus</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <a href="" class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </a>
                                                        <span class="radio-label">Chọn theo mức giá</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="{{url('category/show/15')}}" class="radio-label">Dưới 5 triệu</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="{{url('category/show/15')}}" class="radio-label">Từ 5 triệu - 10 triệu</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="{{url('category/show/15')}}" class="radio-label">Từ 10 triệu - 15 triệu</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="{{url('category/show/15')}}" class="radio-label">Từ 15 triệu - 20 triệu</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="{{url('category/show/15')}}" class="radio-label">Trên 20 triệu</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <a href="" class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </a>
                                                        <span class="radio-label">Chọn theo nhu cầu</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <span class="radio-label">Hỗ trợ 5G</span>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <span class="radio-label">Điện thoại gaming</span>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <span class="radio-label">Dung lượng lớn</span>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <span class="radio-label">Pin trâu</span>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <span class="radio-label">Sạc không dây</span>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title d-flex">
                                            <h3>Máy tính bảng</h3>
                                            <i class="fa-solid fa-minus icon-minus"></i>
                                            <i class="fa-solid fa-plus icon-plus"></i>
                                        </div>
                                        <div class="item-content-wp">
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Chọn theo hãng</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Ipad</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Samsung</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Xiaomi</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Lenovo</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Nokia</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Alcatel</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Kindle</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Máy đọc sách</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                                <i class="fa-solid fa-plus"></i>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Chọn theo mức giá</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Dưới 3 triệu</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Từ 3 - 6 triệu</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Từ 6 - 9 triệu</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Từ 9 - 12 triệu</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Trên 12 triệu</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Chọn theo nhu cầu</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Chơi game</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Học tập - Văn phòng</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Giải trí</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Đồ họa - Sáng tạo</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title d-flex">
                                            <h3>Laptop</h3>
                                            <i class="fa-solid fa-minus icon-minus"></i>
                                            <i class="fa-solid fa-plus icon-plus"></i>
                                        </div>
                                        <div class="item-content-wp">
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Chọn theo hãng</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Mac</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">HP</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Dell</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">ASUS</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Chọn theo mức giá</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Dưới 5 triệu</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Từ 5 - 10 triệu</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Từ 10 - 15 triệu</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Chọn theo nhu cầu</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Văn phòng</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Gaming</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Mỏng nhẹ</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title d-flex">
                                            <h3>Tai nghe</h3>
                                            <i class="fa-solid fa-minus icon-minus"></i>
                                            <i class="fa-solid fa-plus icon-plus"></i>
                                        </div>
                                        <div class="item-content-wp">
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Chọn theo hãng</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Samsung</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Apple</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Chọn loại tai nghe</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Tai nghe Bluetooth</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Tai nghe chụp tai</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Hãng loa</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">JBL</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">LG</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title d-flex">
                                            <h3>Đồng hồ</h3>
                                            <i class="fa-solid fa-minus icon-minus"></i>
                                            <i class="fa-solid fa-plus icon-plus"></i>
                                        </div>
                                        <div class="item-content-wp">
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Chọn theo hãng</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Apple</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Samsung</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                                <i class="fa-solid fa-plus"></i>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Loại đồng hồ</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Đồng hồ thông minh</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Dây đeo</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                                <i class="fa-solid fa-plus"></i>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Tính năng</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Hỗ trợ Esim</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Màn hình luôn bật</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                                <i class="fa-solid fa-plus"></i>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Kích cỡ đồng hồ</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Cho nam 42-47mm</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Cho nữ < 42mm</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                                <i class="fa-solid fa-plus"></i>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title d-flex">
                                            <h3>Phụ kiện</h3>
                                            <i class="fa-solid fa-minus icon-minus"></i>
                                            <i class="fa-solid fa-plus icon-plus"></i>
                                        </div>
                                        <div class="item-content-wp">
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Phụ kiện điện thoại</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Phụ kiện Apple</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Dán màn hình</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                                <i class="fa-solid fa-plus"></i>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Phụ kiện Laptop</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Chuột bàn phím</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Giá đỡ</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                                <i class="fa-solid fa-plus"></i>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Thiết bị mạng</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Bộ kích sóng wifi</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Bộ phát wifi di động</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                                <i class="fa-solid fa-plus"></i>
                                            </section>

                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title d-flex">
                                            <h3>Tivi</h3>
                                            <i class="fa-solid fa-minus icon-minus"></i>
                                            <i class="fa-solid fa-plus icon-plus"></i>
                                        </div>
                                        <div class="item-content-wp">
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Chọn theo hãng</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Samsung</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">LG</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                                <i class="fa-solid fa-plus"></i>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Chọn theo mức giá</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Từ 9 - 12 triệu</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Từ 12 - 15 triệu</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                                <i class="fa-solid fa-plus"></i>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Loại tivi</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Smart TV</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Tivi LED</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                                <i class="fa-solid fa-plus"></i>
                                            </section>
                                            <section class="item-content">
                                                <label for="">
                                                    <div class="item-title-sub">
                                                        <span class="radio-input">
                                                            <i class="icon-circle"></i>
                                                        </span>
                                                        <span class="radio-label">Chọn theo kích thước</span>
                                                        <i class="fa-solid fa-minus icon-minus-sub"></i>
                                                        <i class="fa-solid fa-plus icon-plus-sub"></i>
                                                    </div>
                                                    <div class="sub-menu">
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Tivi 32 inch</a>
                                                            </label>
                                                        </section>
                                                        <section class="item-content">
                                                            <label for="" class="item-title-sub">
                                                                <a href="" class="radio-input">
                                                                    <i class="icon-circle"></i>
                                                                </a>
                                                                <a href="" class="radio-label">Tivi 43 inch</a>
                                                            </label>
                                                        </section>
                                                    </div>
                                                </label>
                                                <i class="fa-solid fa-plus"></i>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- END NAV-->
                        <div id="header-body-right">
                            <form action="{{route('search')}}" method="GET">
                                @csrf
                                <input type="text" name="keyword" value="{{request()->input('keyword')}}" id="s" placeholder="Bạn cần tìm gì?">
                                <button type="submit" id="sm" name="btn-search">
                                    <i class="fa-solid fa-magnifying-glass search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END HEADER-BODY -->
        </div>
        <!-- END HEADER -->
        <div id="wp-content">
            @yield('content')
        </div>
        <!-- END BODY -->
        <div id="footer">
            <div id="foot-top">
                <div class="wp-inner">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="title">UNIMART</h3>
                            <p class="desc">
                                UNIMART luôn cung cấp luôn là sản phẩm chính hãng có thông tin rõ ràng, chính sách ưu đãi cực lớn cho khách hàng có thẻ thành viên.
                            </p>
                        </div>
                        <div class="col-md-3 menu-ft" id="info-shop">
                            <h3>Thông tin cửa hàng</h3>
                            <ul class="list-item">
                                <li>
                                    <p>106 - Trần Bình - Cầu Giấy - Hà Nội</p>
                                </li>
                                <li>
                                    <p>0987.654.321 - 0989.989.989</p>
                                </li>
                                <li>
                                    <p>vshop@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 policy">
                            <h3>Chính sách mua hàng</h3>
                            <ul class="list-item">
                                <li>
                                    <a>Quy định - chính sách</a>
                                </li>
                                <li>
                                    <a>Chính sách bảo hành - đổi trả</a>
                                </li>
                                <li>
                                    <a>Chính sách hội viện</a>
                                </li>
                                <li>
                                    <a>Giao hàng - lắp đặt</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3" id="newfeed">
                            <h3>Bảng tin</h3>
                            <p class="desc">Đăng ký với chung tôi để nhận được thông tin ưu đãi sớm nhất</p>
                            <form action="">
                                <input type="text" name="email" id="email" placeholder="Nhập email tại đây">
                                <button type="submit">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END FOOT-TOP -->
            <div id="foot-bot">
                <p id="copy-right">© Bản quyền thuộc về UNIMART</p>
            </div>
        </div>
    </div>
    <div id="btn-top">
        <i class="fa-solid fa-angle-up"></i>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="{{asset('guess/js/elevatezoom-master/jquery.elevatezoom.js')}}" type="text/javascript"></script>
    <script src="{{asset('guess/js/app.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#sort').change(function() {
                var url = $(this).val();
                // alert(url);
                if (url) {
                    window.location = url;
                }
                return false;
            })
        })
    </script>

    <script src="{{asset('guess/owlcarousel/owl.carousel.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel.carousel-top').owlCarousel({
                loop: true,
                dots: false,
                autoplay: true,
                nav: false,
                autoplay: true,
                slideBy: 1,
                // smartSpeed: 50,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }

                }
            })
            // END CAROUSEL-TOP
            $('.owl-carousel.carousel-header').owlCarousel({
                loop: false,
                dots: false,
                autoplay: false,
                nav: true,
                slideBy: 2,
                responsive: {
                    375: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
            $('.owl-carousel.carousel-feature-product').owlCarousel({
                loop: true,
                dots: false,
                autoplay: true,
                nav: false,
                autoplay: true,
                slideBy: 1,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
            // END CAROUSEL-FEATURE-PRO
            $('.owl-carousel.owl-carousel-best-seller').owlCarousel({
                loop: true,
                dots: false,
                margin: 10,
                nav: true,
                autoplay: true,
                slideBy: 1,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }


            })
            //END CAROUSEL BEST-SELLER
            $('.owl-carousel.carousel-banner-home').owlCarousel({
                loop: true,
                dots: false,
                margin: 10,
                nav: true,
                autoplay: true,
                slideBy: 1,
                smartSpeed: 1000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }


            })
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>