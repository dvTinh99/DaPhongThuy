@extends('admin.master')
@section('controller','Category')
@section('action','Edit')
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
                <?php cate_parent($parent, 0, "--", $data['parent_id']) ?>
            </select>
        </div>
        <div class="form-group">
            <label>Category Name Edit</label>
            <input class="form-control" name="NameCate" placeholder="Please Enter Category Name" value="{{ old('NameCate', isset($data) ? $data['name'] : null) }}" />
        </div>

        <button type="submit" class="btn btn-default">Category Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection

