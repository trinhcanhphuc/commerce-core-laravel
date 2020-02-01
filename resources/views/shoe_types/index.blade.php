@extends('layouts.app') @section('content')
<div class="heighttop"></div>
<div class="mainpage">
    <div class="container">
        <h1 class="cateh1">All shoes</h1>
        <div class="breacrumb">
            <a class="breacrumb-home" href="/" title="Home">Home</a>
            <a href="/all-shoes" title="Home">All shoes</a>
        </div>
        <br>
        <div class="row">
            @foreach ($shoes as $shoe)
            <div class="col-md-4 products-item">
                <div class="products-item-img">
                <a href="shoes/coffee-captoe-oxford-brown" title="{{ strtoupper($shoe->type_name)}}"><img src="{{ $shoe->image_url }}" data-alt-src="{{ $shoe->image_thumb_url }}" title="{{ $shoe->type_name }}" alt="{{ strtoupper($shoe->type_name) }}"></a>
                </div>
                <div class="products-item-name"><a href="/shoes/coffee-captoe-oxford-brown.html" title="{{ strtoupper($shoe->type_name) }}">{{ strtoupper($shoe->type_name) }}</a></div>
                <div class="products-item-name-ct">{{ strtoupper($shoe->style_name) }} - {{ strtoupper($shoe->color) }}</div>
                <div class="products-item-price">
                    <div class="price-g">{{ $shoe->style_price + $shoe->color_price }} VNĐ</div>
                </div>
                <div class="danhgiasp-m danhgiasp-box">
                    <div class="danhgiasp1">
                        <span class="zxczxcxz btn-warning"> <i class="fa fa-star "></i> </span>
                        <span class="zxczxcxz btn-warning"> <i class="fa fa-star "></i> </span>
                        <span class="zxczxcxz btn-warning"> <i class="fa fa-star "></i> </span>
                        <span class="zxczxcxz btn-warning"> <i class="fa fa-star "></i> </span>
                        <span class="zxczxcxz btn-warning"> <i class="fa fa-star "></i> </span>
                    </div> Reviews</div>
            </div>
            @endforeach
        </div>
        <div id="padding"></div>
    </div>
</div>

@endsection