<div class="product-slider owl-carousel">
	@foreach($product as $lp)
	<div class="product-item">
	    <div class="pi-pic">
            @php
            $hinhanh=explode(',',$lp->hinhanh);
            @endphp
	        <a href="{{route('sanpham',$lp->id)}}"><img src="img/products/{{$hinhanh[0]}}" alt=""></a>
	        <div class="sale">Sale</div>
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
	@endforeach
</div>
<script src="js/main.js"></script>