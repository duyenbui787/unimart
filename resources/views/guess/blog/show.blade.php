@extends('layouts.guess')
@section('content')
<div class="main-content-wp">
    <div class="wp-inner">
        <div class="section" id="breadcrumb-wp">
            <div class="section-detail">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">Blog</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- END BREADCRUMB -->
        <div class="page-body d-flex">
            <div class="wrapper-content">
                <div class="section" id="blog-wp">
                    <div class="section-head">
                        <h3 class="title">BLOG</h3>
                    </div>
                    <div class="section-detail">
                        <ul class="list-item">
                            @foreach($posts as $post)
                            <li class="d-flex">
                                <a href="{{route('detail-blog',$post->id)}}" class="thumb">
                                    <img src="{{asset($post->thumbnail)}}" alt="">
                                </a>
                                <div class="info">
                                    <a href="" class="title">{{$post->title}}</a>
                                    <span class="created-date">28/11/2017</span>
                                    <p class="desc">{!!$post->desc!!}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection