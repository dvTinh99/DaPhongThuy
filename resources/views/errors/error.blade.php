@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Lỗi!</strong> Có một vài điều xảy ra với dữ liệu bạn nhập vào !.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
