@extends('admin.master')
@section('controller','Customer')
@section('action','List')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- /.col-lg-12 -->
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                </tr>
            </thead>

            <tbody>
                <?php $stt = 0 ?>
                @foreach($customer as $val)
                <?php $stt = $stt + 1 ?>
                <tr class="odd gradeX" align="center">
                    <td>{{$stt}}</td>
                    <td>{{ $val->name }}</td>
                    <td>{{ $val->email }}</td>
                    <td>{{ $val->address }}</td>
                    <td>{{ $val->phonenumber }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.row -->
</div>
@endsection

