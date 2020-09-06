@extends('master')
@section('content')
<div class="text-center">
  <div class="heading" style="text-align: center; margin-bottom: 20px; margin-top: 50px;"> <h2>Mua hàng thành công</h2> </div>
  <div class="alert alert-success" style="text-align: center; margin-bottom: 50px;">
     <p>Bạn đã mua hàng thành công. </p>
     <p>Kiểm tra đơn hàng trong lịch sử giao dịch nếu muốn.</p>
  </div>
</div>
<section class="checkout-section spad">
    <div class="container">
        <div  class="checkout-form">
<div class="row">
    <div class="col-lg-6">
        <h4>Chi tiết khách hàng</h4>
        <div class="row">
            <div class="col-lg-6">
                <label for="fir">Họ</label>
                <p>{{$bill->ho}}</p>
            </div>
            <div class="col-lg-6">
                <label for="last">Tên</label>
                <p>{{$bill->ten}}</p>
            </div>
            <div class="col-lg-12">
                <label for="street">Địa chỉ</label>
                <p>{{$bill->diachi}}</p>
            </div>
            <div class="col-lg-6">
                <label for="email">Email</label>
                <p>{{$bill->email}}</p>
            </div>
            <div class="col-lg-6">
                <label for="phone">Điện thoại</label>
                <p>{{$bill->dienthoai}}</p>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="place-order">
            <h4>Chi tiết đơn hàng</h4>
            <div class="order-total">
                <ul class="order-table">
                    <li>Sản phẩm <span>Tổng giá</span></li>
                    @php
                    $i=0;
                    $totalprice=0;
                    @endphp
                    @foreach($listbilldetail as $billdetail)
                    @php
                    $totalofonebilldetail = ($billdetail->soluong)*($billdetail->variation->gia);
                    @endphp
                    <li class="fw-normal">{{$listproductname[$i]}} ({{$billdetail->variation->kichco}},{{$billdetail->variation->mausac}}) x {{$billdetail->soluong}} <span>{{number_format($totalofonebilldetail)}}</span></li>
                    @php
                    $i++;
                    $totalprice=$totalprice+$totalofonebilldetail;
                    @endphp
                    @endforeach
                    <li class="total-price">Tổng cộng <span>{{number_format($totalprice)}} VNĐ</span></li>
                </ul>
            </div>
        </div>
    </div>
</div></div>
    </div>
</section>
@endsection