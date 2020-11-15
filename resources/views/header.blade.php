<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Phước Lộc</title>
    <link href="{{ url('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('fontawesome-free-5.0.13/csss/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ url('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ url('css/animate.css') }}"  rel="stylesheet">
    <link href="{{ url('css/main.css') }}"  rel="stylesheet">
    <link href="{{ url('css/responsive.css') }}"  rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('image/title.png')}}">
    <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href=""><span class="glyphicon glyphicon-phone"></span> 0965893632</a></li>
                                <li><a href=""><span class="glyphicon glyphicon-envelope"></span>dvtinh.17it3@vku.udn.vn</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right" style="padding-right: 20px;">
                            <ul class="nav navbar-nav">
                                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="logo pull-left">
                            <a href="{{ url('/') }}"><img src="{{ asset('image/a.jpg') }}" alt="" width="100px" height="40px;" /></a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <form class="navbar-form" role="search" action="{{ action('HomeController@timkiem') }}" method="get">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nhập sản phẩm ..." width="100%" style="border-radius: 0px;" name="search">
                                <div class="input-group-btn">
                                  <button href="" class="btn btn-warning" type="submit" style="border-radius: 0px; ">
                                    <i class="fas fa-search"></i>
                                  </button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                @if (Auth::guest())
                                    <li><a href="{{ url('/auth/register') }}"><i class="fas fa-user"></i> Register</a></li>
                                    <li><a href="{{ url('/auth/login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Chào, {{ Auth::user()->username }} <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ Auth::logout() }}">Logout</a></li>
                                        </ul>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav categorymenu">
                            <li><a href="{{ url('/') }}">Trang Chủ</a></li>
                            <li><a href="{{ url('gioi-thieu') }}">Giới  Thiệu</a></li>
                            <?php
                                $cate_cha = DB::table('categorys')->where('parent_id',0)->get();
                            ?>
                            @foreach($cate_cha as $val)
                            <li class="dropdown"><a href="">{{ $val->name }}</a>
                                <ul role="menu" class="sub-menu">
                                    <?php
                                        $cate_con = DB::table('categorys')->where('parent_id', $val->id)->get();
                                    ?>
                                    @foreach($cate_con as $val_con)
                                    <li><a href="{{ url('loai-san-pham', [$val_con->id, $val_con->name]) }}">{{ $val_con->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach()
                            <li><a href="{{ url('bai-viet') }}">Tin Tức</a></li>
                            <li><a href="{{ url('lien-he') }}">Liên Hệ</a></li>
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li><a href="{{ url('gio-hang') }}"><span class="glyphicon glyphicon-shopping-cart" style="color: #269c91;font-size: 16px;"></span><code>{{ Cart::count() }}</code> Giỏ Hàng</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </div><!--/header-bottom-->
    </header><!--/header-->
