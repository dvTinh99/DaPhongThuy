@extends('master')
@section('content')
    <section id="advertisement">
        <div class="container">
            <img src="images/shop/advertisement.jpg" alt="" />
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('sidebar')
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Sản Phẩm</h2>
                        @foreach($type_product as $val)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{ url('chi-tiet-san-pham', [$val->id, $val->name]) }}"><img src="{{ asset('image/'.$val->image_list) }}" alt="" height="250px" /></a>
                                        <a href="{{ url('chi-tiet-san-pham', [$val->id, $val->name]) }}"><h5 class="text-muted">{{ $val->name }}</h5></a>
                                        <h3 class="text-muted">{{ number_format($val->price,0,",",".") }} VNĐ</h3>

                                        <a href="{{ url('mua-hang', [$val->id, $val->name]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>
@endsection
