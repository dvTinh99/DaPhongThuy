@extends('admin.master')
@section('controller','Product')
@section('action','Edit')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    @include('errors.messages')
    @include('errors.error')
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <div class="form-group">
            <label>Category Parent</label>
            <select class="form-control" name="sltParent">
                <option value="">Please Choose Category</option>
                <?php cate_parent($cate, 0, "--", $product['id']) ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tên</label>
            <input class="form-control" name="name" placeholder="Please Enter Username"  value="{{ old('name', isset($product) ? $product['name'] : null) }}" />
        </div>
        <div class="form-group">
            <label>Giá</label>
            <input class="form-control" name="price" placeholder="Please Enter Price" value="{{ old('price', isset($product) ? $product['price'] : null) }}" />
        </div>
        <div class="form-group">
            <label>Giá khuyến mãi</label>
            <input class="form-control" name="promotion_price" placeholder="Please Enter Price" value="{{ old('promotion_price', isset($product) ? $product['promotion_price'] : null) }}" />
        </div>


        <div class="form-group">
            <label>Hình ảnh</label>
            <input type="file" name="fImages" value="{{ old('fImages') }}">
            {{ old('fImages', isset($product) ? $product['image_list'] : null) }}
        </div>


        <button type="submit" class="btn btn-default">Product Update</button>
        <button type="reset" class="btn btn-default">Reset</button>
        <img src="" alt="">
    <form>
</div>
@endsection

