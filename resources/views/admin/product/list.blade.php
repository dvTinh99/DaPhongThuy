@extends('admin.master')
@section('controller','Product')
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
                    <th>Category</th>
                    <th>Price</th>
                    <th>Promotion_Price</th>
                    <th>Material</th>
                    <th>Meaning</th>
                    <th>Size</th>
                    <th>Status</th>
                    <th>Image_list</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>

            <tbody>
                <?php $stt = 0 ?>
                @foreach($product as $val)
                <?php $stt = $stt + 1 ?>
                <tr class="odd gradeX" align="center">
                    <td>{{$stt}}</td>
                    <td>{{ $val["name"] }}</td>
                    <td>
                        <?php $parent = DB::table('products')->join('categorys', 'products.category_id' , '=', 'categorys.id')->where('category_id', $val["category_id"])->first();
                            echo $parent->name;
                        ?>
                    </td>
                    <td>{{ number_format($val["price"]) }} VNĐ</td>
                    <td>{{ number_format($val["promotion_price"]) }} VNĐ</td>
                    <td>{{ $val["material"] }}</td>
                    <td>{{ $val["meaning"] }}</td>
                    <td>{{ $val["size"] }}</td>
                    <td>{{ $val["status"] }}</td>
                    <td>{{ $val["image_list"] }}</td>
                    <td class="center"><a href="{{ URL('/admin/product/delete', $val->id) }}"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
                    <td class="center"><a href="{{ URL('/admin/product/edit', $val->id) }}"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.row -->
</div>
@endsection
