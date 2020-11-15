@extends('admin.master')
@section('controller','New')
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
                    <th>Image</th>
                    <th style="width: 300px;">Content</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php $stt = 0 ?>
                @foreach($listnew as $val)
                <?php $stt = $stt + 1 ?>
                <tr class="odd gradeX" align="center">
                    <td>{{$stt}}</td>
                    <td>{{ $val->name }}</td>
                    <td>{{ $val->image }}</td>
                    <td>{{ $val->content }}</td>
                    <td class="center"><i class="fas fa-trash  fa-fw"></i><a href="{{ URL('/admin/new/delete', $val->id) }}"> Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.row -->
</div>
@endsection
