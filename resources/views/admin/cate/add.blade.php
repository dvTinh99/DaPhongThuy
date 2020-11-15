@extends('admin.master')
@section('controller','Category')
@section('action','Add')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
    @include('errors.messages')
    @include('errors.error')
    <form action="" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <div class="form-group">
            <label>Category Parent</label>
            <select class="form-control" name="sltParent">
                <option value="0">Please Choose Category</option>
                <?php cate_parent($parent) ?>
            </select><br>
            <label>Name Categorys</label>
            <input type="text" class="form-control" name="NameCate" placeholder="Category Name">
        </div>
        <button type="submit" class="btn btn-default">Category Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection()

