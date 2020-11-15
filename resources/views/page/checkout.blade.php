@extends('master')
@section('content')
<section class="characteristics">
    <div class="container">
        <div class="row">

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('image/diamond.png') }}" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Đá tự nhiên 100%</div>

                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('image/vongtay.png') }}" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Sản phẩm được Trì Chú</div>

                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('image/tuvan.png') }}" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Tư vấn miễn phí</div>

                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('image/baohanh.png') }}" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Bảo hành 6 tháng</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="cart_items">
    <div class="container">
        <div class="row">
            <form action="{{ route('postcheckout') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="text-center" style="margin-bottom: 60px;border-bottom: 1px solid black;"> <h3 class="text-success">CHECKOUT</h3>
                </div>
                <div class="col-md-10 col-md-offset-1 item1">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            @include('errors.messages')
                            @include('errors.error')
                        </div>
                        <div class="clearfix"></div>
                        <h3 class="text-muted">Thông tin khách hàng</h3>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name="namecheck" placeholder="Nhập vào tên ">
                            <input type="text" class="form-control" name="emailcheck" placeholder="Nhập vào email">
                            <input type="text" class="form-control" name="location" placeholder="Ngũ Hành Sơn - Đà Nẵng">
                            <input type="text" class="form-control" name="phone" placeholder="01264 899 290">
                            <label for="thanhtoan">Chọn hình thức thanh toán :</label><br>
                            <label class="radio-inline"><input type="radio" name="optradio" value="1">Thanh toán khi nhận hàng</label>
                            <label class="radio-inline"><input type="radio" name="optradio" value="2">Chuyển Khoản</label>
                            <p class="text-danger">(*) Thông tin quý khách phải nhập chính xác và đầy đủ !</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <textarea name="note" id="" cols="30" rows="10" placeholder="Ghi chú đơn hàng ..."></textarea>
                            <button type="submit" class="btn btn-default pull-right" style="border-radius: 0px;border: 0px; background-color: orange;color: white;" href="{{ route('postcheckout') }}"> Đặt Hàng</button>
                        </div>

                    </div>
                </div><!-- end form -->

                <div class="col-md-10 col-md-offset-1">
                    <h3>Giỏ Hàng Của Bạn</h3>
                    <div class="table">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="product_header">
                                    <th>SẢN PHẨM</th>
                                    <th>QTY</th>
                                    <th class="text-center">GIÁ</th>
                                    <th class="text-center">TỔNG</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($content as $val)
                                <tr>
                                    <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class=" pull-left" href="#" style="margin-right: 20px;"> <img class="media-object" src="{{ asset('image/' .$val->options->img) }}" style="width:72px;height:72px;"> </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="{{ url('chi-tiet-san-pham', [$val->id, $val->name]) }}">{{ $val->name }}</a></h4>
                                            <span>Trạng Thái: </span><span class="text-success"><strong>{{ $val->options->stt }}</strong></span>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="col-sm-1 col-md-2" style="text-align: center">
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $val->qty }}">
                                    </td>
                                    <td class="col-sm-1 col-md-2 text-center"><strong>{{ number_format($val->price,0,',','.') }} VNĐ</strong></td>
                                    <td class="col-sm-1 col-md-2 text-center"><strong>{{ number_format($val->price*$val->qty,0,',','.') }} VNĐ </strong></td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="2"></td>
                                    <td><h4>Total</h4></td>
                                    <td class="text-right">
                                        <h4><strong>{{ $subtotal }} VNĐ</strong></h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ url('/') }}" class="btn btn-success">Tiếp tục mua hàng <span class="glyphicon glyphicon-shopping-cart"></span></a>
                    </div>
                </div> <!-- end table -->
            </form>
        </div>
    </div>
</section> <!--/#cart_items-->
@endsection


