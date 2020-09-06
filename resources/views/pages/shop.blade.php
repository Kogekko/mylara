@extends('master')
@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                @include('pages.leftbar')
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="product-show-option">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="select-option">
                                <select class="sorting">
                                    <option value="">Default Sorting</option>
                                </select>
                                <select class="p-show">
                                    <option value="">Show:</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 text-right">
                            <p>Show 01- 09 Of 36 Product</p>
                        </div>
                    </div>
                </div>
                <div class="product-list">
                    <div class="row">
                        @foreach($listproduct as $lp)
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    @php
                                    $hinhanh=explode(',',$lp->hinhanh);
                                    @endphp
                                    <a href="{{route('sanpham',$lp->id)}}"><img src="img/products/{{$hinhanh[0]}}" alt=""></a>
                                    <div class="sale pp-sale">Sale</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#a" onclick="AddCart({{collect($lp->variation->first())->get('id')}})"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="#">+ Quick View</a></li>
                                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">{{$lp->category->tendanhmuc}}</div>
                                    <a href="#">
                                        <h5>{{$lp->tensanpham}}</h5>
                                    </a>
                                    <div class="product-price">
                                        {{collect($lp->variation->first())->get('gia')}}
                                        <span>$35.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="loading-more">
                    <i class="icon_loading"></i>
                    <a href="#">
                        Loading More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->
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
<script>
    function AddCart(id){
        $.ajax({
            url:'Add-Cart/'+id,
            type:'GET',
        }).done(function(response){
            RenderCart(response);
            alertify.success('Đã thêm sản phẩm vào giỏ hàng');
        });  
    }
    function RemoveCart(rowId){
        $.ajax({
            url:'/Remove-Cart/'+rowId,
            type:'GET',
        }).done(function(response){
            RenderCart(response);
            alertify.error('Đã xóa sản phẩm khỏi giỏ hàng');
        });  
    }
    function RenderCart(response){
        $("#change-item-cart").empty();
        $("#change-item-cart").html(response);
        $("#total-quanty-show").text($("#tongsoluong").val());
        $("#total-price-show").text($("#tonggia").val()+' VNĐ');
        $("#total-price-show2").text($("#tonggia").val()+' VNĐ');
        // if($("#tongsoluong").val()==0){
        //     $("#entirecart").empty();
        //     $("#entirecart").text('Bạn chưa chọn sản phẩm nào');
        // }
    }
</script>