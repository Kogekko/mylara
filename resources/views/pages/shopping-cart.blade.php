@extends('master')
@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                    <a href="./shop.html">Shop</a>
                    <span>Shopping Cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div id="rendershopcart">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th class="p-name">Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng giá</th>
                                <th><i class="ti-close"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productincart as $product)
                            @php
                            $hinhanh=explode(',',$product->options->hinhanh);
                            @endphp
                            <tr>
                                <td class="cart-pic first-row"><img src="{{ asset('img/products/'.$hinhanh[0]) }}" width="170px" alt=""></td>
                                <td class="cart-title first-row">
                                    <h5>{{$product->name}}<br>Kích cỡ: {{$product->options->kichco}}<br>Màu sắc: {{$product->options->mausac}}</h5>
                                </td>
                                <td class="p-price first-row">{{number_format($product->price)}}</td>
                                <td class="qua-col first-row">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" data-id="{{$product->rowId}}" id="quanty-variation-{{$product->rowId}}" value="{{$product->qty}}">
                                        </div>
                                    </div>
                                </td>
                                @php
                                $totalofoneproduct = number_format(($product->qty)*($product->price));
                                @endphp
                                <td class="total-price first-row">{{$totalofoneproduct}}</td>
                                <td class="close-td first-row"><i onclick="RemoveCart('{{$product->rowId}}')" class="ti-close"></i></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cart-buttons">
                            <a href="{{route('cuahang')}}" class="primary-btn continue-shop">Tiếp tục mua hàng</a>
                            <a href="#a" class="primary-btn up-cart edit-all">Cập nhật giỏ hàng</a>
                        </div>
                        <div class="discount-coupon">
                            <h6>Discount Codes</h6>
                            <form action="#" class="coupon-form">
                                <input type="text" placeholder="Enter your codes">
                                <button type="submit" class="site-btn coupon-btn">Apply</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-2">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="cart-total">Tổng cộng <span>{{$tonggia}} VNĐ</span></li>
                            </ul>
                            <a href="{{route('thanhtoan')}}" class="proceed-btn">TIẾN HÀNH THANH TOÁN</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
@endsection
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script>
    function RemoveCart(rowId){
        $.ajax({
            url:'/Remove-Cart/'+rowId,
            type:'GET',
        }).done(function(response){
            alertify.error('Đã xóa sản phẩm khỏi giỏ hàng');
            RenderCart(response);
            
        });  
    }
    function RenderCart(response){
        location.reload();
    }
</script>