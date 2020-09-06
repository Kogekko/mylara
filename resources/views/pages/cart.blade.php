@foreach($productincart as $product)
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
<input type="hidden" id="tongsoluong" name="" value="{{$tongsoluong}}">
<input type="hidden" id="tonggia" name="" value="{{$tonggia}}">


