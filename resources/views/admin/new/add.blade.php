@extends('admin.master')
@section('controller','New')
@section('action','Add')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    @include('errors.messages')
    @include('errors.error')
    <form action="{{ URL('/admin/new/add') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <div class="form-group">
            <label>Tên</label>
            <input class="form-control" name="namenew" placeholder="Nhập vào tên bài viết"  value="{{ old('name') }}" />
        </div>
        <div class="form-group">
            <label>Hình ảnh</label>
            <input type="file" name="fImagesnew" value="{{ old('fImagesnew') }}">
        </div>
        <div class="form-group">
            <label>Nội Dung</label>
            <textarea class="form-control" rows="3" name="content"  >{!! old('content') !!}</textarea>
            <script type="text/javascript">ckeditor("content")</script>
        </div>

        <button type="submit" class="btn btn-default">Thêm Bài Viết</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection





