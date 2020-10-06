@extends('main')
@section('content')

<div class="main-content-wrapper section-padding-100" >
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-8">
                    <div class="single-blog-content mb-100">
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p><a href="#" class="post-author">{{$post->username}}</a> on <a href="#" class="post-date">{{$post->crated_at}}</a></p>
                        </div>
                        <!-- Post Content -->
                        <div class="post-image" style="text-align: center;">
                            <img src="{{$post->blogimage}}" alt="imagetest">
                        </div>
                        <div class="post-content">
                            <h6></h6>
                                <blockquote class="mb-30">
                                <h3>{{$post->blogname}}</h3>
                                <div class="post-author">
                                    <p>{{$post->username}}</p>
                                </div>
                            </blockquote>
                            <h6>{{$post->blogcontent}}</h6>
                            <div class="post-meta second-part">
                                <p><a href="#" class="post-author">{{$post->username}}</a> on <a href="#" class="post-date">{{$post->crated_at}}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-widget-area">
                    <h5 class="title">Stay Connected</h5>
                    <div class="widget-content">
                        <div class="social-area d-flex justify-content-between">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-vimeo"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google"></i></a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection