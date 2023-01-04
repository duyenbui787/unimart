@extends('layouts.guess')
@section('content')
<div class="main-content-wp" id="checkout-page">
    <div class="wp-inner">
        <div class="section" id="breadcrumb-wp">
            <div class="section-detail">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">Thanh toán</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- END BREADCRUMB-WP -->
        <div class="section" id="order-info-wp">
        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
            <div class="row">
                <div class="col-md-6" id="customer-info-wp">
                    <div class="section-head">
                        <h1 class="title">Thông tin khách hàng</h1>
                    </div>
                    <div class="section-detail">
                        <form action="{{route('order')}}" method="GET">
                            @csrf
                            <div class="form-row">
                                <div class="form-col col-left">
                                    <label for="fullname">Họ tên</label>
                                    <input type="text" name="fullname" id="fullname">
                                </div>
                                <div class="form-col col-right">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-col col-left">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" name="address" id="address">
                                </div>
                                <div class="form-col col-right">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="tel" name="phone" id="phone">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-col">
                                    <label for="notes">Ghi chú</label>
                                    <textarea name="note"></textarea>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- END CUSTOMER-INFO-WP -->
                <div class="col-md-6" id="order-review-wp">
                    <div class="section-head">
                        <h1 class="title">Thông tin đơn hàng</h1>
                    </div>
                    <div class="section-detail">
                        <table class="shop-table">
                            <thead>
                                <tr>
                                    <td>Sản phẩm</td>
                                    <td>Tổng</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(Cart::content() as $row)
                                <tr class="cart-item">
                                    <td class="product-name">{{$row->name}}<strong class="product-quantity"> x {{$row->qty}}</strong></td>
                                    <td class="product-total">{{number_format($row->price,0, ',', '.')}}đ</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="order-total">
                                    <td>Tổng đơn hàng:</td>
                                    <td><strong class="total-price">{{Cart::total()}}đ</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                        <div id="payment-checkout-wp">
                            <ul id="payment_methods">
                                <li>
                                    <input type="radio" id="direct-payment" name="payment-method" value="direct-payment">
                                    <label for="direct-payment">Thanh toán tại cửa hàng</label>
                                </li>
                                <li>
                                    <input type="radio" id="payment-home" name="payment-method" value="payment-home">
                                    <label for="payment-home">Thanh toán tại nhà</label>
                                </li>
                            </ul>
                        </div>
                        <div class="place-order-wp">
                            <input type="submit" id="order-now" name="btn-order" value="Đặt hàng">
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection