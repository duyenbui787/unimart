@extends('layouts.guess')
@section('content')
<div class="main-content-wp" id="cart-page">
    <div class="wp-inner">
        <div class="section" id="breadcrumb-wp">
            <div class="section-detail">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">Giỏ hàng</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- END BREADCRUMB -->
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <form action="{{route('cart.update')}}" method="POST">
                    @csrf
                    @if(Cart::count()>0)
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Mã sản phẩm</td>
                                <td>Ảnh sản phẩm</td>
                                <td>Tên sản phẩm</td>
                                <td>Giá sản phẩm</td>
                                <td>Số lượng</td>
                                <td colspan="2">Thành tiền</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $t=0;
                            @endphp
                            @foreach(Cart::content() as $row)
                            @php
                            $t++;
                            @endphp
                            <tr>
                                <td>HCA00031</td>
                                <td>
                                    <a href="" title="" class="thumb">
                                        <img src="{{asset($row->options->thumbnail)}}" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="" title="" class="name-product">{{$row->name}}</a>
                                </td>
                                <td>{{number_format($row->price,0, ',', '.')}}đ</td>
                                <td>
                                    <button class="minus-btn" onclick="handleMinus()">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                    <input type="text" name="qty[{{$row->rowId}}]" id="amount" value="{{$row->qty}}">
                                    <button class="plus-btn" onclick="handlePlus()">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                    <!-- <input type="number" min='1' name="qty[{{$row->rowId}}]" value="{{$row->qty}}" class="num-order"> -->
                                </td>
                                <td>{{number_format($row->total,0, ',', '.')}}đ</td>
                                <td>
                                    <a href="{{route('cart.remove',$row->rowId)}}" title="" class="del-product"><i class="fa-regular fa-trash-can"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <p id="total-price" class="fl-right">Tổng giá: <span>{{Cart::total()}}đ</span></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <div id="action">
                                            <input type="submit" id="update-cart" name="btn-update" value="Cập nhật giỏ hàng">
                                            <a href="{{url('checkout/show')}}" title="" id="checkout-cart">Thanh toán</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

            </div>
        </div>
        <!-- END INFO-CART-WP -->
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                <a href="{{route('home')}}" title="" id="buy-more">Mua tiếp</a><br />
                <a href="{{route('cart.destroy')}}" title="" id="delete-cart">Xóa giỏ hàng</a>
            </div>
        </div>
        @else
        <p>Hiện tại giỏ hàng rỗng</p>
        @endif
        </form>
    </div>
</div>
@endsection