@extends('admin.master')
@section('controller','Product')
@section('action','Add')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    @include('errors.messages')
    @include('errors.error')
    <form action="{{ URL('/admin/product/add') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <div class="form-group">
            <label>Category Parent</label>
            <select class="form-control" name="sltParent">
                <option value="">Please Choose Category</option>
               <?php cate_parent($parent) ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tên</label>
            <input class="form-control" name="name" placeholder="Please Enter Username"  value="{{ old('name') }}" />
        </div>
        <div class="form-group">
            <label>Giá</label>
            <input class="form-control" name="price" placeholder="Please Enter Price" value="{{ old('price') }}" />
        </div>
        <div class="form-group">
            <label>Giá khuyến mãi</label>
            <input class="form-control" name="promotion_price" placeholder="Please Enter Price" value="{{ old('promotion_price') }}" />
        </div>
        <div class="form-group">
            <label>Chất liệu</label>
            <select class="form-control" name="material">
                <option value="Đá Mắt Mèo">Đá Mắt Mèo</option>
                <option value="Đá Thạch Anh">Đá Thạch Anh</option>
                <option value="Đá Hổ Phách">Đá Hổ Phách</option>
                <option value="Đá Mã Não">Đá Mã Não</option>
                <option value="Đá Aquamarine">Đá Aquamarine</option>
                <option value="bạc">bạc</option>
            </select>
        </div>
        <div class="form-group">
            <label>Ý nghĩa</label>
            <select class="form-control" name="txtMeaning">
                <option value="Tài Lộc">Tài Lộc</option>
                <option value="Công Việc">Công Việc</option>
                <option value="Tình Duyên">Tình Duyên</option>
                <option value="Học Vấn">Học Vấn</option>
                <option value="Sức Khỏe">Sức Khỏe</option>
                <option value="Bình An">Bình An</option>
                <option value="Không">Không</option>
            </select>
        </div>
        <div class="form-group">
            <label>Size</label>
            <select class="form-control" name="size">
                <option value="8li">8 li</option>
                <option value="10li">10 li</option>
                <option value="12li">12 li</option>
                <option value="14li">14 li</option>
                <option value="nhỏ">nhỏ</option>
                <option value="vừa">vừa</option>
                <option value="lớn">lớn</option>

            </select>
        </div>
        <div class="form-group">
            <label>Trạng thái</label>
            <label class="radio-inline">
                <input name="rdoStatus" value="Còn hàng" checked="" type="radio">Visible
            </label>
            <label class="radio-inline">
                <input name="rdoStatus" value="Hết hàng" type="radio">Invisible
            </label>
        </div>
        <div class="form-group">
            <label>Hình ảnh</label>
            <input type="file" name="fImages" value="{{ old('fImages') }}">
        </div>


        <button type="submit" class="btn btn-default">Product Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
        <img src="" alt="">
    <form>
</div>
@endsection




