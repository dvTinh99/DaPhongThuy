@extends('admin.master')
@section('content')
    <section class="content-header">
        <h1>
            Danh sách đơn hàng
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
    @include('errors.messages')
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Địa Chỉ</th>
                                    <th>Date Oder</th>
                                    <th>Email</th>
                                    <th>Trạng thái</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->id }}</td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->address }}</td>
                                        <td>{{ $customer->created_at }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>
                                            <?php  $data = DB::table('customers')->join('bills','customers.id', '=', 'bills.customer_id')->where('customer_id', $customer['id'])->first();
                                              
                                            ?>
                                            
                                            @if($data->payment == 1)
                                              {{ "Đã thanh toán" }}
                                            @else
                                              {{ "Chưa thanh toán" }}
                                            @endif
                                          

                                        </td>
                                        <td><a href="{{ route('admin.bill.getView', $customer->id) }}">Chi tiết</a></td>
                                        <td>
                                            <a href="{{ route('admin.bill.delete', $customer->id) }}" class="btn btn-danger"> Xóa Đơn Hàng</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
