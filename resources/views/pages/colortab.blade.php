<div class="pd-color-choose">
    @foreach($variationbysize as $vbsize)
    <div class="cc-item">
        <input onclick="RenderGia({{$vbsize->product_id}},'{{$vbsize->mausac}}','{{$vbsize->kichco}}')" value="{{$vbsize->kichco}}" type="radio" id="cc-{{$vbsize->mausac}}">
        <label for="cc-{{$vbsize->mausac}}" class="cc-{{$vbsize->mausac}}"></label>
    </div>
    @endforeach
</div>