@extends('admin.master')
@section('controller','Category')
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
                        <th>Parent ID</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 0 ?>
                        @foreach($category as $val)
                    <?php $stt = $stt + 1 ?>
                        <tr>
                            <td>{!! $stt !!}</td>
                            <td>{!! $val["name"] !!}</td>
                            <td>
                                @if ($val["parent_id"] == 0)
                                        {!! "None" !!}
                                    @else
                                    <?php
                                        $nameparent = DB::table('categorys')->where('id',$val["parent_id"])->first();
                                        echo $nameparent->name;
                                     ?>

                                @endif
                            </td>
                            <td><a onclick=" return xacnhanxoa('Do you want delete ?')" href="{{ URL('/admin/cate/delete', [$val['id']])}}"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                            </td>
                            <td><a href="{{ URL('/admin/cate/edit', [$val['id']])}}"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
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

