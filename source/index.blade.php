@extends('_layouts.master')
@section('body')
	<!-- Hero section -->
	<section class="hero-section overflow-hidden">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="/assets/img/slider-bg-1.jpg">
				<div class="container">
                    <div class="row">         
                        <h2>Leeswijzer</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum efficitur, ante vel dapibus interdum, diam nisi consequat diam, vitae suscipit lacus felis at nibh. Mauris dui ex, vulputate eu elementum vel, euismod nec enim. Maecenas maximus condimentum neque non euismod. Suspendisse malesuada odio in elit lacinia, eget vehicula purus tempor. Nam pharetra mauris a ornare pulvinar. Mauris porta porttitor ante, non euismod nisi congue at. Sed faucibus nunc et pulvinar dictum. Ut pellentesque lacus nec quam scelerisque hendrerit. Suspendisse ullamcorper enim nec dolor laoreet, a volutpat orci luctus.</p>
                        <a href="#" class="site-btn">Read More  <img src="/assets/img/icons/double-arrow.png" alt="#"/></a>     
                </div>
                </div>
			</div>
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="/assets/img/slider-bg-2.jpg">
				<div class="container">
					<h2>Game on!</h2>
					<p>Fusce erat dui, venenatis et erat in, vulputate dignissim lacus. Donec vitae tempus dolor,<br>sit amet elementum lorem. Ut cursus tempor turpis.</p>
					<a href="#" class="site-btn">Read More  <img src="/assets/img/icons/double-arrow.png" alt="#"/></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end-->
@endsection