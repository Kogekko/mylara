<!-- Header Section Begin -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>
                    hello.colorlib@gmail.com
                </div>
                <div class="phone-service">
                    <i class=" fa fa-phone"></i>
                    +65 11.188.888
                </div>
            </div>
            <div class="ht-right">
                @if(Auth::check())
                <a href="#" class="login-panel"><i class="fa fa-user"></i>Chào bạn, {{Auth::customers()->ten}}</a>
                <a href="#" class="login-panel"><i class="fa fa-user"></i>Đăng xuất</a>
                @else
                <a href="{{route('dangnhap')}}" class="login-panel"><i class="fa fa-user"></i>Đăng nhập</a>
                @endif
                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                        <option value='yt' data-image="{{ asset('img/flag-1.jpg') }}" data-imagecss="flag yt"
                            data-title="English">English</option>
                        <option value='yu' data-image="{{ asset('img/flag-2.jpg') }}" data-imagecss="flag yu"
                            data-title="Bangladesh">German </option>
                    </select>
                </div>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="{{route('trangchu')}}">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">All Categories</button>
                        <div class="input-group">
                            <input type="text" placeholder="What do you need?">
                            <button type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#">
                                <i class="icon_heart_alt"></i>
                                <span>1</span>
                            </a>
                        </li>
                        <li class="cart-icon">
                            <a href="#">
                                <i class="icon_bag_alt"></i>
                                @if(Cart::count()!=0)
                                <span id="total-quanty-show">
                                    {{Cart::count()}}
                                </span>
                                @else
                                <span id="total-quanty-show">
                                    0
                                </span>
                                @endif
                            </a>
                            
                            <div class="cart-hover">
                                
                                <div id="change-item-cart">
                                    @foreach(Cart::content() as $product)
                                    @php
                                    $hinhanh=explode(',',$product->options->hinhanh);
                                    @endphp
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="{{ asset('img/products/'.$hinhanh[0]) }}" width="70px" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>{{$product->price}} x {{$product->qty}}</p>
                                                            <h6>{{$product->name}}</h6>
                                                            <h6>Kích cỡ: {{$product->options->kichco}}</h6>
                                                            <h6>Màu sắc: {{$product->options->mausac}}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i onclick="RemoveCart('{{$product->rowId}}')" class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    @endforeach
                                    
                                </div>
                                <div class="select-total">
                                    <span>Tổng giá:</span>
                                    <h5>
                                    @if(Cart::count()!=0)
                                    <div id="total-price-show2">
                                        {{Cart::subtotal()}} VNĐ
                                    </div>
                                    @else
                                    <div id="total-price-show2">
                                        0 VNĐ
                                    </div>
                                    @endif                                        
                                    </h5>
                                </div>
                                <div class="select-button">
                                    <a href="{{route('giohang')}}" class="primary-btn view-card">GIỎ HÀNG</a>
                                    <a href="{{route('thanhtoan')}}" class="primary-btn checkout-btn">THANH TOÁN</a>
                                </div>
                                
                            </div>
                            
                        </li>
                        <li class="cart-price">
                        @if(Cart::count()!=0)
                        <span id="total-price-show">
                            {{Cart::subtotal()}} VNĐ
                        </span>
                        @else
                        <span id="total-price-show">
                            0 VNĐ
                        </span>
                        @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>Danh mục sản phẩm</span>
                    <ul class="depart-hover">
                        @foreach($listcategory as $lc)
                        <li><a href="{{route('danhmuc',$lc->id)}}">{{$lc->tendanhmuc}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="active"><a href="{{route('trangchu')}}">Trang chủ</a></li>
                    <li><a href="{{route('cuahang')}}">Cửa hàng</a></li>
                    <li><a href="{{route('baiviet')}}">Bài viết</a></li>
                    <li><a href="{{route('hoidap')}}">Hỏi đáp</a></li>
                    <li><a href="{{route('lienhe')}}">Liên hệ</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
<!-- Header End -->