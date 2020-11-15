@extends('master')
@section('content')
<section class="characteristics">
    <div class="container">
        <div class="row">

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('public/image/diamond.png') }}" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Đá tự nhiên 100%</div>

                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('public/image/vongtay.png') }}" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Sản phẩm được Trì Chú</div>

                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('public/image/tuvan.png') }}" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Tư vấn miễn phí</div>

                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('public/image/baohanh.png') }}" alt=""></div>
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
            <div class="text-center" style="margin-bottom: 60px;border-bottom: 1px solid black;"> <h3 class="text-success">CHECKOUT</h3></div>
            <div class="col-md-6 col-md-offset-3" style="margin-bottom: 30px;">
                <a href="{{ url('/') }}" class="btn btn-default pull-right"><span class="glyphicon glyphicon-arrow-left"></span> Quay lại mua sắm</a>
            </div>

            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Vui lòng Đăng nhập để tiếp tục
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST" role="form" class="form-horizontal">

                            <div class="form-group">
                                <label for="" class="control-label col-md-3">UserName :</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter UserName">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">PassWord :</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <a href="" type="submit" class="btn btn-primary">Đăng Nhập</a>
                                <div><a href="">Bạn chưa có tài khoản ?</a></div>

                            </div>


                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3" style="margin-bottom: 50px;margin-top: 10px;">
                <a href="{{ url('mua-hang/checkout
                ') }}" class="btn btn-success"> Mua hàng không cần đăng kí <span class="glyphicon glyphicon-arrow-right"></span></a>
            </div>
        </div>
    </div>
</section> <!--/#cart_items-->
@endsection

