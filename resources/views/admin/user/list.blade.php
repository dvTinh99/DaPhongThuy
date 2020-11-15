@extends('admin.master')
@section('controller','List')
@section('action','User')
@section('content')
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Name</th>
            <th>UserName</th>
            <th>Email</th>
            <th>Vai trò</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 0 ?>
        @foreach($user as $val)
        <?php $stt += 1 ?>
        <tr class="odd gradeX" align="center">
            <td>{{ $stt }}</td>
            <td>{{ $val->name }}</td>
            <td>{{ $val->username }}</td>
            <td>{{ $val->email }}</td>
            <td>
                @if($val->role == 2)
                    User
                @else
                    Admin
                @endif
            </td>
            <td class="center"><a href="{{ url('admin/user/delete' , $val->id) }}"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
            <td class="center"> <a href="#"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection


