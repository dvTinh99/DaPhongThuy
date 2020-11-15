<div class="left-sidebar">
    <h2>Danh mục</h2>
    <?php
        $cate_cha = DB::table('categorys')->where('parent_id',0)->get();
    ?>
    @foreach($cate_cha as $val)
    <ul class="list-group">
        <li class="list-group-item active"><a href="" style="color: white;font-weight: bold;">{{ $val->name }}</a></li>
        <?php $cate_con = DB::table('categorys')->where('parent_id', $val->id)->get(); ?>
        @foreach($cate_con as $val_con)
            <li class="list-group-item"><a href="{{ url('loai-san-pham', [$val_con->id, $val_con->name])}}" style="color: black;"><i class="fas fa-genderless"></i>  {{ $val_con->name }}</a></li>
        @endforeach
    </ul>
    @endforeach
<!--/brands_products-->


    <div class="shipping text-center"><!--shipping-->
        <a href=""><img src="{{ asset('image/nn.png') }}" alt="ads" /></a>
    </div><!--/shipping-->


</div>
