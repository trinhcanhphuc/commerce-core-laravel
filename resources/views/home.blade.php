@extends('layouts.app')

@section('content')
<div class="banner">
	<link href="{{ asset('css/banner.css') }}" rel="stylesheet">
	<div id="wowslider-container1" style="font-size: 10px;">
		<div class="ws_images"><div style="width: 100%; visibility: hidden; font-size: 0px; line-height: 0;"><img class="imgbannercenter" src="/assets/img/banner/banner.png" alt="" id="wows1_44" style="width: 100%;"></div>
				<ul style="position: absolute; top: 0px; animation: 0s ease 0s 1 normal none running none; width: 100%; left: 0%;">
					<li style="width: 100%; font-size: 0px;"><a href="https://forms.gle/GMCA2gyb8rhjhk4x5" title="1"><img class="imgbannercenter" src="/assets/img/banner/banner.png" alt="" id="wows1_44" style="visibility: visible;"></a></li>
				</ul>
		</div>
		<div class="ws_bullets"><div></div></div>
		<div class="ws_shadow"></div>
	<div style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; z-index: 10; background: rgb(255, 255, 255); opacity: 0;"><a href="https://forms.gle/GMCA2gyb8rhjhk4x5" style="display: block; position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;" target=""></a></div><a href="#" class="ws_next"></a><a href="#" class="ws_prev"></a><div class="ws-title" style="display:none"></div><a href="#" class="ws_playpause ws_pause"></a></div>
	<script type="text/javascript" src="engine/wowslider.js"></script>
	<script type="text/javascript" src="engine/script.js"></script>	
</div>
<div class="bannerbottom">
    <div class="bannerbottom-b">
			<div class="colmd5 col-nova-1 padding-left-30">
				 <div class="content-slide-block-1">
					<a href="https://shoex.net/coffee.html" title="">
					<img src="/assets/img/banner/sh.jpg" alt="">
					<div class="content-block1">
						<div class="img-slider1"></div>
						<p class="content-sale"></p>
						<p class="up-to"><span></span></p>
						<!--<span class="free-delivery"></span>-->
					</div>
					 </a>
				</div>
			</div>
			
			<div class="col-nova-2 ">
				<div class="colbanner-right">
					
						<div class="colmd8 bann-c">
							<a href="https://shoex.net/coffee.html" title="">
					<div class="autumwinter">
						<img src="/assets/img/banner/cp.png" alt="">
						<div class="content-autum">
							<!--<p class="autum">Oxford Cap Toe</p>-->
							<p class="festival-tribal"></p>
						</div>
					</div>
				</a>
						</div>
						<div class="colmd4 bann-c">
							
			<a href="https://shoex.net/coffee.html" title="GIẢI CỨU MÔI TRƯỜNG">
					<div class="autumwinter">
						<img src="/assets/img/banner/Shoes on coffee - brown(small).jpg" alt="GIẢI CỨU MÔI TRƯỜNG">
						<div class="content-autum">
							<!--<p class="autum">Oxford Cap Toe</p>-->
							<p class="festival-tribal">GIẢI CỨU MÔI TRƯỜNG</p>
						</div>
					</div>
				</a>
		
							
						</div>
					
				</div>
			</div>
			<div class="col-nova-3 padding-right-30">
				<div class="colbanner-right">
					<div class="colmd8 bann-c">
						
			<a href="https://shoex.net/coffee.html" title="">
				<div class="img-block-3"><img src="/assets/img/banner/image_2019_12_03T02_12_40_959Z.png" alt="">
					<div class="content-block-3">
						<p class="men-rtl"></p>
					</div>
				</div>
			</a>
		
					</div>
					<div class="colmd4 bann-c">
						
			<a href="https://shoex.net/coffee.html" title="LỊCH LÃM">
				<div class="img-block-3"><img src="/assets/img/banner/IMG_71041.JPG" alt="LỊCH LÃM">
					<div class="content-block-3">
						<p class="men-rtl">LỊCH LÃM</p>
					</div>
				</div>
			</a>
		
					</div>
					
				</div>
				

			</div>
	</div>
</div>
<div class="backhome" style="background-image:url(assets/img/banner/banner-home-shoex.jpg);">
    <div class="container">
        <div class="content-block_home_one_3">
            <p class="content-block3-1">GIÀY CÀ PHÊ HƠI THỞ THÀNH THỊ</p>
        </div>
    </div>
</div>
<div class="mainben">
	<div class="container">
		<div class="mainbenTitle">SHOEXCOFFEE TECHNOLOGIES</div>
		<div class="row">
			<div class="col-md-3 mainbenItem">
				<div class="mainbenItemImg"><img src="/assets//icons/technologies/breathable.png" alt="giày coffee khử mùi"></div>
				<div class="mainbenItemName">Khử mùi</div>
			</div>
			<div class="col-md-3 mainbenItem">
				<div class="mainbenItemImg"><img src="/assets//icons/technologies/antibacterial.png" alt="giày coffee kháng khuẩn"></div>
				<div class="mainbenItemName">Kháng khuẩn</div>
			</div>
			<div class="col-md-3 mainbenItem">
				<div class="mainbenItemImg"><img src="/assets//icons/technologies/water.png" alt="giày coffee chống nước"></div>
				<div class="mainbenItemName">Chống Nước</div>
			</div>
			<div class="col-md-3 mainbenItem">
				<div class="mainbenItemImg"><img src="/assets//icons/technologies/enviroment.png" alt="giày coffee thân thiện môi trường"></div>
				<div class="mainbenItemName">Thân thiện môi trường</div>
			</div>
			
		</div>
	</div>
</div>
<div class="main3">
    <div class="parallax-box" style="background-image: url(assets/img/acemarks-video.jpg);">
        <div class="parallax-content">
            <iframe src="https://www.youtube.com/embed/wwZyGPwI420?rel=0&amp;loop=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
    
        </div>
    </div>
</div>
@endsection
