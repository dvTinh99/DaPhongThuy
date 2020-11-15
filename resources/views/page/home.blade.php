@extends('master')
@section('content')
<section class="banner">
	<div class="banner_background" style="background-image:url(image/slide1.jpg)"></div>
	<div class="container fill_height">
		<div class="row fill_height">
			<div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>
			<div class="col-lg-5 offset-lg-4 fill_height">
				<div class="banner_content">
					<h2 class="banner_text">Sản Phẩm Mới</h2>
					<h3 class="banner_text">Giảm giá 30%</h3>

					<div class="button banner_button"><a href="" class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"></span> Mua ngay</a></div>

				</div>
			</div>
		</div>
	</div>
</section>



<section class="characteristics">
	<div class="container">
		<div class="row">

			<!-- Char. Item -->
			<div class="col-lg-3 col-md-6 char_col">

				<div class="char_item d-flex flex-row align-items-center justify-content-start">
					<div class="char_icon"><img src="image/diamond.png" alt=""></div>
					<div class="char_content">
						<div class="char_title">Đá tự nhiên 100%</div>

					</div>
				</div>
			</div>

			<!-- Char. Item -->
			<div class="col-lg-3 col-md-6 char_col">

				<div class="char_item d-flex flex-row align-items-center justify-content-start">
					<div class="char_icon"><img src="image/vongtay.png" alt=""></div>
					<div class="char_content">
						<div class="char_title">Sản phẩm được Trì Chú</div>

					</div>
				</div>
			</div>

			<!-- Char. Item -->
			<div class="col-lg-3 col-md-6 char_col">

				<div class="char_item d-flex flex-row align-items-center justify-content-start">
					<div class="char_icon"><img src="image/tuvan.png" alt=""></div>
					<div class="char_content">
						<div class="char_title">Tư vấn miễn phí</div>

					</div>
				</div>
			</div>

			<!-- Char. Item -->
			<div class="col-lg-3 col-md-6 char_col">

				<div class="char_item d-flex flex-row align-items-center justify-content-start">
					<div class="char_icon"><img src="image/baohanh.png" alt=""></div>
					<div class="char_content">
						<div class="char_title">Bảo hành 6 tháng</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
			    @include('sidebar')
			</div>

			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Sản Phẩm Khuyến Mãi</h2>
					@foreach($sale_product as $val)
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<a href="{{ url('chi-tiet-san-pham', [$val->id, $val->name]) }}"><img src="image/{{ $val->image_list }}" alt="" height="250px" /></a>
									<a href="{{ url('chi-tiet-san-pham', [$val->id, $val->name]) }}"><p>{{ $val->name }}</p></a>
									<ul class="list-inline">
										<li><h4 class="text-muted"><del>{{ number_format($val->price,0,",",".") }} đ</del></h4></li>
										<li><h3>{{ number_format($val->promotion_price,0,",",".") }} đ</h3></li>
									</ul>
									<a href="{{ url('mua-hang', [$val->id, $val->name]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>thêm vào giỏ hàng</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div><!--features_items-->
				<div>
					<div class="row">
						<div class="text-center">{{ $sale_product->links() }}</div>

					</div>
				</div>

				<div class="category-tab"><!--category-tab-->
					<div class="col-sm-12">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#moi" data-toggle="tab">Mới</a></li>
							<li><a href="#banchay" data-toggle="tab">Bán Chạy</a></li>
							<li><a href="#khuyenmai" data-toggle="tab">Khuyến Mãi</a></li>
							<li><a href="#combo" data-toggle="tab">Combo Đẹp</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane fade active in" id="moi" >
							@foreach($new_product as $val)
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="{{ url('chi-tiet-san-pham', [$val->id, $val->name]) }}"><img src="image/{{ $val->image_list }}" alt="" height="180px" /></a>
											<h4>{{ number_format($val->price,0,",",".") }} đ</h4>
											<a href="{{ url('chi-tiet-san-pham', [$val->id, $val->name]) }}"><p>{{ $val->name }}</p></a>
											<a href="{{ url('mua-hang', [$val->id, $val->name]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>thêm vào giỏ</a>
										</div>

									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="tab-pane fade" id="banchay" >
							@foreach($banchay_product as $val)
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="{{ url('chi-tiet-san-pham', [$val->id, $val->name]) }}"><img src="image/{{ $val->image_list }}" alt="" /></a>
											<h4>{{ number_format($val->price,0,",",".") }} đ</h4>
											<a href="{{ url('chi-tiet-san-pham', [$val->id, $val->name]) }}"><p>{{ $val->name }}</p></a><span class="text-danger">Hàng đang về</span>
											<a href="{{ url('mua-hang', [$val->id, $val->name]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>thêm vào giỏ</a>
										</div>

									</div>
								</div>
							</div>
							@endforeach
						</div>

						<div class="tab-pane fade" id="khuyenmai" >
							@foreach($sale_product2 as $val)
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="image/{{ $val->image_list }}" alt="" />
											<h4>{{ number_format($val->price) }} đ</h4>
											<h3>{{ number_format($val->promotion_price,0,",",".") }} đ</h3>
											<a href=""><p>{{ $val->name }}</p></a>
											<a href="{{ url('mua-hang', [$val->id, $val->name]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>thêm vào giỏ</a>
										</div>

									</div>
								</div>
							</div>
							@endforeach
						</div>


						<div class="tab-pane fade" id="combo" >
							@foreach($combo_product as $val)
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="{{ url('chi-tiet-san-pham', [$val->id, $val->name]) }}"><img src="image/{{ $val->image_list }}" alt="" height="180px" /></a>
											<h4>{{ number_format($val->price,0,",",".") }} đ</h4>
											<a href="{{ url('chi-tiet-san-pham', [$val->id, $val->name]) }}"><p>{{ $val->name }}</p></a>
											<a href="{{ url('mua-hang', [$val->id, $val->name]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>thêm vào giỏ</a>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div><!--/category-tab-->

				<div class="recommended_items"><!--recommended_items-->
					<h2 class="title text-center">Bài Viết</h2>
					@foreach($new as $val)
					<div class="col-md-12" style="margin-bottom: 20px;">
						<div class="row">
						<div class="col-md-4">
							<a href="{{ url('bai-viet', [$val->id, $val->name]) }}"><img src="{{ asset('image/upload/news/' .$val->image) }}" alt="" width="100%" height="150px;"></a>
						</div>
						<div class="col-md-8">
							<a href="{{ url('bai-viet', [$val->id, $val->name]) }}"><p>{{ $val->name }}</p></a>
						</div>
						</div>
					</div>

					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

