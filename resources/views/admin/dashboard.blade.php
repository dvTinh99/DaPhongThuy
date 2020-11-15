@extends('admin.master')
@section('controller','DASHBOARD')
@section('content')
<div class="col-md-12" style="padding-bottom:120px">
    <div class="row">
        <div class="col-md-6">
        <h2 class="text-success">Tình Trạng Đơn Hàng</h2>
            <div class="bg-success" style="padding: 10px;"> <span style="font-size: 30px;">{{ count($count1) }}</span> đơn hàng đã thanh toán </div><br>

            <div class="bg-danger" style="padding: 10px;"> <span style="font-size: 30px;">{{ count($count2) }}</span> đơn hàng chưa thanh toán </div><br>


            <a href="{{ route('admin.bill.list') }}" class="btn btn-info"> Xem chi tiết</a>
        </div>
        <div class="col-md-6">
            <h2 class="text-success">Số lượng đơn đặt hàng</h2>
            <div class="bg-info" style="padding: 20px;"> Có <span style="font-size: 30px;">{{ count($dashboard  ) }}</span> Đơn đặt hàng</div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-success">Liên hệ</h2>
            <div class="bg-danger" style="padding: 20px;"> Có {{ count($contact) }} tin nhắn liên hệ mới </div>
            <div class="clearfix"></div><br>
            <a href="{{ route('admin.contact.list') }}" class="btn btn-info"> Xem chi tiết</a>

        </div>
    </div>

</div>
@endsection
