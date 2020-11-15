@extends('master')
@section('content')
<section class="characteristics">
    <div class="container">
        <div class="row">

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('image/diamond.png') }}" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Đá tự nhiên 100%</div>

                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('image/vongtay.png') }}" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Sản phẩm được Trì Chú</div>

                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('image/tuvan.png') }}" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Tư vấn miễn phí</div>

                    </div>
                </div>
            </div>

            <!-- Char. Item -->
            <div class="col-lg-3 col-md-6 char_col">

                <div class="char_item d-flex flex-row align-items-center justify-content-start">
                    <div class="char_icon"><img src="{{ asset('image/baohanh.png') }}" alt=""></div>
                    <div class="char_content">
                        <div class="char_title">Bảo hành 6 tháng</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="cart_items">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 ">
                <div class="text-center" style="margin-bottom: 60px;border-bottom: 1px solid black;"> <h3 class="text-success">GIỎ HÀNG CỦA BẠN ({{ Cart::count() }} sản phẩm)</h3></div>
                @if($subtotal != 0)
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr class="product_header">
                            <th>SẢN PHẨM</th>
                            <th>SỐ LƯỢNG</th>
                            <th class="text-center">GIÁ</th>
                            <th class="text-center">TỔNG</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="post" action="">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            @foreach($content as $val)
                            <tr>
                                <td class="col-sm-8 col-md-6">
                                <div class="media">
                                    <a class=" pull-left" href="#" style="margin-right: 20px;"> <img class="media-object" src="{{ asset('image/' .$val->options->img) }}" style="width:72px;height:72px;"> </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="{{ url('chi-tiet-san-pham', [$val->id, $val->name]) }}">{{ $val->name }}</a></h4>
                                        <span>Trạng Thái: </span><span class="text-success"><strong>{{ $val->options->stt }}</strong></span>
                                    </div>
                                </div>
                                </td>
                                <td class="col-sm-1 col-md-1" style="text-align: center">
                                <input onchange="change(this.value,{{ $val->price }} ,'{{ $val->rowId }}')"  class="span1 form-control qty" placeholder="1" value='{{ $val->qty }}' type="text">
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><strong>{{ number_format($val->price,0,',','.') }} VNĐ</strong></td>
                                <td class="col-sm-1 col-md-1 text-center"><strong>{{ number_format($val->price*$val->qty,0,',','.') }} VNĐ </strong></td>
                                <td class="col-sm-1 col-md-1">
                                    <a href="{{ url('gio-hang') }}" class="btn btn-success">
                                        <span class="glyphicon glyphicon-refresh"></span>
                                    </a>
                                    <a href="{{ url('xoa-hang', $val->rowId) }}" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                </td>
                            </tr>
                            <script  type="text/javascript">
                                function change(qty,price,row){
                                //alert(qty+'/'+price+'/'+row);
                                    $.ajax({
                                       url: '{{ route('capnhat') }}',
                                       cache: false,
                                       data: {
                                          qty:qty,
                                          row:row,
                                          price:price,
                                       },
                                       success: function(data){
                                          $('#'+row).html((price*qty).formatMoney(0, '.', ','));
                                          $('#total').html(data);
                                       },
                                       error: function (){
                                          alert('Có lỗi xảy ra');
                                       }
                                    })
                                 }
                            </script>
                            @endforeach
                        </form>
                        <tr>
                            <td colspan="3"></td>
                            <td><h4>Total</h4></td>
                            <td class="text-right"><h4><strong>{{ $subtotal }} VNĐ</strong></h4></td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td>
                            <a href="{{ url('/') }}" class="btn btn-default">
                                <span class="glyphicon glyphicon-shopping-cart"></span> Tiếp Tục Mua Sắm
                            </a>
                            </td>
                            <td>
                            <a href="{{ url('mua-hang/checkout') }}" class="btn btn-success">
                                Đặt Hàng <span class="glyphicon glyphicon-play"></span>
                            </a></td>
                        </tr>
                    </tbody>
                </table>
                @endif
                @if($subtotal==0)
                <div class="text-center noproduct" style="padding: 80px 0px 120px;">
                    <h4 class="text-muted">Không có sản phẩm nào trong giỏ hàng</h4>
                    <a href="{{ url('/') }}" class="btn btn-default">Tiếp tục mua sắm <span class="glyphicon glyphicon-shopping-cart"></span></a>
                </div>
                @endif
            </div>
        </div>
    </div>
</section> <!--/#cart_items-->
<script type="text/javascript">
   Number.prototype.formatMoney = function(c, d, t){
      var n = this,
      c = isNaN(c = Math.abs(c)) ? 2 : c,
      d = d == undefined ? "." : d,
      t = t == undefined ? "," : t,
      s = n < 0 ? "-" : "",
      i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
      j = (j = i.length) > 3 ? j % 3 : 0;
      return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
   };
</script>
@endsection
