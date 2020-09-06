@extends('master')
@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Register</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Form Section Begin -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            @if(count($errors)>0)
            <div class="m-auto alert alert-danger">
                @foreach($errors->all() as $err)
                {{$err}}<br>
                @endforeach
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form">
                    <h2>Đăng ký</h2>
                    <form action="{{route('postRegister')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" placeholder="">
                        <div class="group-input">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" value="{{old('email')}}" required>
                        </div>
                        <div class="group-input">
                            <label for="ho">Họ *</label>
                            <input type="text" id="ho" name="ho" value="{{old('ho')}}" required>
                        </div>
                        <div class="group-input">
                            <label for="ten">Tên *</label>
                            <input type="text" id="ten" name="ten" value="{{old('ten')}}" required>
                        </div>
                        <div class="group-input">
                            <label for="diachi">Địa chỉ *</label>
                            <input type="text" id="diachi" name="diachi" value="{{old('diachi')}}" required>
                        </div>
                        <div class="group-input">
                            <label for="dienthoai">Điện thoại *</label>
                            <input type="text" id="dienthoai" name="dienthoai" value="{{old('dienthoai')}}" required>
                        </div>
                        <div class="group-input">
                            <label for="pass">Mật khẩu *</label>
                            <input type="password" id="pass" name="matkhau" required>
                        </div>
                        <div class="group-input">
                            <label for="con-pass">Nhập lại mật khẩu *</label>
                            <input type="password" id="con-pass" name="re_matkhau" required>
                        </div>
                        <button type="submit" class="site-btn register-btn">ĐĂNG KÝ</button>
                    </form>
                    <div class="switch-login">
                        <a href="{{route('dangnhap')}}" class="or-login">Hoặc đăng nhập</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->
@endsection