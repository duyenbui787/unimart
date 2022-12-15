
<div id="main-content-wp" class="clearfix category-product-page">
    <div class="wp-inner">
    <div class="section" id="breadcrumb-wp">
            <div class="section-detail">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">Điện thoại</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- END BREADCRUMB -->
        <div class="wp-content-body">
        <div class="section" id="cat-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Điện thoại</h3>
                    <div class="filter-wp fl-right">
                        <p class="desc">Hiển thị 45 trên 50 sản phẩm</p>
                        <div class="form-filter">
                            <form method="POST" action="">
                                <select name="select">
                                    <option value="0">Sắp xếp</option>
                                    <option value="1">Từ A-Z</option>
                                    <option value="2">Từ Z-A</option>
                                    <option value="3">Giá cao xuống thấp</option>
                                    <option value="3">Giá thấp lên cao</option>
                                </select>
                                <button type="submit">Lọc</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="section-detail">
                    <ul class="list-item d-flex">
                        
                        <li>
                            <a href="{{route('detail_product',$product->id)}}" title="" class="thumb">
                                <img src="{{asset($product->thumbnail)}}">
                            </a>
                            <a href="{{route('detail_product',$product->id)}}" title="" class="product-name">Điện thoại</a>
                            <div class="price">
                                <span class="new">400000</span>
                                <span class="old">8.990.000đ</span>
                            </div>
                            <div class="action">
                                <a href="{{route('cart.add',$product->id)}}" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="{{route('checkout',$product->id)}}" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


        </div>

    </div>
</div>