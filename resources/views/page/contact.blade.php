@extends('master')
@section('content')
<div id="contact-page" class="container">
        <div class="bg">
            <div class="row" style="margin-bottom: 50px;">
                <div class="col-sm-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61362.10338382271!2d108.21733775262602!3d16.006670663297996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142174c8f171ac3%3A0x5d1534b08f3a1fa0!2zTmfFqSBIw6BuaCBTxqFuLCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1528391027166" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">

                        <h2 class="title text-center">Liên Hệ Tới PHUOCLOC</h2>
                        @include('errors.error')
                        @include('errors.messages')
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="{{ url('lien-he') }}">
                            {{ csrf_field() }}
                            <div class="form-group col-md-6">
                                <input type="text" name="namecontact" class="form-control" placeholder="Nhập vào tên">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="emailcontact" class="form-control" placeholder="Nhập vào Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="titlecontact" class="form-control" placeholder="Chủ đề">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="messagecontact" id="message" class="form-control" rows="8" placeholder="Nội dung lời nhắn"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">thông tin liên hệ</h2>
                        <address>
                            <p><i class="fas fa-gem"></i> Phước Lộc Shop</p><br>
                            <p><i class="fas fa-map-marker"></i> Ngũ Hành Sơn - Đà Nẵng</p><br>
                            <p><span class="glyphicon glyphicon-phone"></span> +1264 899 290</p><br>
                            <p><span class="glyphicon glyphicon-envelope"></span> nguyenvannhan.cit@gmail.com</p>
                        </address>
                        <div class="social-networks" style="padding-top: 10px;">
                            <h2 class="title text-center">Liên kết mxh</h2>
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook" style="color: blue;"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram" style="color: #bb4e24;"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus"style="color: red;"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-youtube"style="color: red;"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/#contact-page-->
@endsection

