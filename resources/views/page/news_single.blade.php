@extends('master')
@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="margin-bottom: 50px;">
                <div class="blog-post-area">
                    <h2 class="title text-center">Bài Viết Phong Thủy</h2>
                    @foreach($new as $val)
                    <div class="single-blog-post">
                        <a href=""><h3>{{ $val->name }}</h3></a>
                        <div class="post-meta">
                            <ul>
                                <li><i class="fas fa-bookmark"></i> {{ $val->id }}</li>
                                <li><i class="fas fa-clock"></i> {{ $val->created_at }}</li>
                            </ul>
                        </div>
                        <a href="">
                            <img src="images/blog/blog-one.jpg" alt="">
                        </a>
                        <p>{!! $val->content !!}</p>

                    </div>
                    @endforeach
                </div>

                <div class="response-area">
                    <h2>BÌNH LUẬN :</h2>
                    <div class="fb-comments" data-href="http://localhost/DaPhongThuy/"  width="700" data-numposts="5" ></div>

                </div>
            </div>
            <h3 style="margin-top: 30px;">Bài Viết Khác : </h3>
            <div class="row">
                @foreach($new_def as $val)
                <div class="col-md-4">
                    <a href="{{ url('bai-viet', [$val->id, $val->name]) }}"><img src="{{ asset('image/upload/news/' .$val->image) }}" alt="" height="200px;" width="100%"></a>
                    <a href="{{ url('bai-viet', [$val->id, $val->name]) }}"><h6>{{ $val->name }}</h6></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
