@extends('master')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('sidebar')
            </div>

            <div class="col-sm-9 padding-right">
                <div class="card">
                    <div class="wrapper row">
                        @foreach($product as $val)
                        <div class="preview col-md-6">
                            <div class="preview-pic tab-content">
                              <div class="tab-pane active" id="pic-1"><img src="{{ asset('image/'.$val->image_list) }}" /></div>
                            </div>

                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">{{ $val->name }}</h3>
                            <span style="font-weight: bold;">Ý nghĩa :</span>
                            <p class="product-description">{{ $val->meaning }}</p>
                            <span style="font-weight: bold;">Size : </span>
                            <p class="product-description">{{ $val->size }}</p>
                            <span style="font-weight: bold;">Chất liệu : </span>
                            <p class="product-description">{{ $val->material }}</p>
                            @if($val->promotion_price == 0)
                                <h4 class="price">Giá: <span>{{ number_format($val->price,0,",",".") }} VNĐ</span></h4>
                            @else
                                <h4 class="price">Giá: <span><del>{{ number_format($val->price,0,",",".") }}</del> VNĐ</span></h4>
                                <h4 class="price">Khuyến Mãi: <span>{{ number_format($val->promotion_price,0,",",".") }} VNĐ</span></h4>
                            @endif
                            <div class="action">
                                <a href="{{ url('mua-hang', [$val->id, $val->name]) }}" class="add-to-cart btn btn-default" type="button">thêm vào giỏ hàng</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div><!--/product-details-->

                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#reviews" data-toggle="tab">Đánh giá Sản Phẩm Shop</a></li>
                            <li><a href="#details" data-toggle="tab">Sản Phẩm khác</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="reviews" >
                            <div class="col-sm-12">
                                <p style="padding-left: 15px;"></p>
                                <p><b>Viết Đánh Gía</b></p>
                                @include('errors.error')
                                <form action="{{ action('HomeController@danhgia')}}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <span>
                                        <input type="text" placeholder="Nhập vào tên của bạn ..."/ name="name">
                                        <input type="email" placeholder="...@gmail.com"/ name="email">
                                    </span>
                                    <textarea name="review" placeholder="Nhập nội dung đánh giá "></textarea>
                                    <button type="submit" class="btn btn-default pull-right">
                                        Submit
                                    </button>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                            @foreach($review as $val)
                            <div class="danhgia">
                                <div class="post-meta">
                                    <ul>
                                        <li style="padding-right: 10px;"><i class="fas fa-bookmark" style="color: orange;"></i> {{ $val->id }}</li>
                                        <li><i class="fas fa-clock" style="color: orange;"></i> {{ $val->created_at }}</li>
                                    </ul>
                                </div>
                                <span class="glyphicon glyphicon-user" style="color: orange;"></span> <span class="text-primary">{{ $val->name }}</span> -
                                <span class="text-muted">{{ $val->email }}</span>
                                <p style="margin-top: 20px;">{{ $val->content }}</p>

                            </div>
                            <hr>
                            @endforeach

                        </div>

                        <div class="tab-pane fade" id="details" >


                            @foreach($product_deff as $val)
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="{{ url('chi-tiet-san-pham', [$val->id, $val->name]) }}"><img src="{{ asset('image/'.$val->image_list) }}" alt="" height="170px" /></a>
                                            <h4>{{ number_format($val->price,0,',','.') }} VNĐ</h4>
                                            <a href="{{ url('chi-tiet-san-pham', [$val->id, $val->name]) }}"><p>{{ $val->name }}</p></a>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</button>
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
                            <img src="{{'image/upload/news/' .$val->image}}" alt="" width="100%" height="150px;">
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
