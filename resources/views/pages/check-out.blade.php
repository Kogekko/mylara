@extends('master')
@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <a href="./shop.html">Shop</a>
                    <span>Check Out</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <form action="{{route('placeOrder')}}" method="post" class="checkout-form">
            <input type="hidden" name="_token" value="{{csrf_token()}}" placeholder="">
            <div class="row">
                <div class="col-lg-6">
                    <div class="checkout-content">
                        <a href="#" class="content-btn">Click Here To Login</a>
                    </div>
                    <h4>Chi tiết khách hàng</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fir">Họ<span>*</span></label>
                            <input type="text" name="ho" id="fir" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="last">Tên<span>*</span></label>
                            <input type="text" name="ten" id="last" required>
                        </div>
                        <div class="col-lg-12">
                            <label for="street">Địa chỉ<span>*</span></label>
                            <input type="text" id="street" name="diachi" class="street-first" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="email">Email<span>*</span></label>
                            <input type="text" name="email" id="email" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="phone">Điện thoại<span>*</span></label>
                            <input type="text" name="dienthoai" id="phone" required>
                        </div>
                        <div class="col-lg-12">
                            <div class="create-item">
                                <label for="acc-create">
                                    Create an account?
                                    <input type="checkbox" id="acc-create">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="checkout-content">
                        <input type="text" placeholder="Enter Your Coupon Code">
                    </div>
                    <div class="place-order">
                        <h4>Chi tiết đơn hàng</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Sản phẩm <span>Tổng giá</span></li>
                                @foreach($productincart as $product)
                                @php
                                $totalofoneproduct = number_format(($product->qty)*($product->price));
                                @endphp
                                <li class="fw-normal">{{$product->name}} ({{$product->options->kichco}},{{$product->options->mausac}}) x {{$product->qty}} <span>{{$totalofoneproduct}}</span></li>
                                @endforeach
                                <li class="total-price">Tổng cộng <span>{{$tonggia}} VNĐ</span></li>
                            </ul>
                            <div class="payment-check">
                                <div class="pc-item">
                                    <label for="pc-check">
                                        Cheque Payment
                                        <input type="checkbox" id="pc-check">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="pc-item">
                                    <label for="pc-paypal">
                                        Paypal
                                        <input type="checkbox" id="pc-paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="order-btn">
                                <button type="submit" class="site-btn place-btn">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Shopping Cart Section End -->
@endsection