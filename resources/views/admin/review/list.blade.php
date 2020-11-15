@extends('admin.master')
@section('controller','Review')
@section('action','List')
<!-- Page Content -->
@section('content')

    <div class="container-fluid">
        <div class="row">
            @include('errors.messages')
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Content</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 0 ?>
                        @foreach($review as $val)
                    <?php $stt = $stt + 1 ?>
                        <tr>
                            <td>{{ $stt }}</td>
                            <td>{{ $val->name }}</td>
                            <td>{{ $val->email }}</td>
                            <td>{{ $val->content }}</td>
                            <td>{{ $val->created_at }}</td>


                        </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

@endsection
<!-- /#page-wrapper -->

