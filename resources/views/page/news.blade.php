@extends('master')
@section('content')
<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog-post-area">
                        <h2 class="title text-center">Bài Viết Phong Thủy</h2>
                        @foreach($new as $val)
                        <div class="single-blog-post">
                            <a href="{{ url('bai-viet', [$val->id, $val->name]) }}"><h3>{{ $val->name }}</h3></a>
                            <div class="post-meta">
                                <ul>
                                    <li><i class="fas fa-bookmark"></i> {{ $val->id }}</li>
                                    <li><i class="fas fa-clock"></i> {{ $val->created_at }}</li>
                                </ul>
                            </div>
                            <a href="">
                                <img src="{{'image/news/' .$val->image}}" alt="" >
                            </a>
                            <div class="content-new"><p>{!! $val->content !!}</p></div>

                            <a  class="btn btn-primary" href="{{ url('bai-viet', [$val->id, $val->name]) }}">Xem thêm</a>
                        </div>
                        <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
