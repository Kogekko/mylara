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
    <input type="hidden" id="tongsoluong" name="" value="{{$tongsoluong}}">
    <input type="hidden" id="tonggia" name="" value="{{$tonggia}}">
    <script src="{{ asset('js/main.js') }}"></script>