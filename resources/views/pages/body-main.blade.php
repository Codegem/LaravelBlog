@extends('main')
@section('content')
<div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-50">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">
                                                @foreach($posts as $post)
                                                <!-- Single Blog Post -->
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{$post->blogimage}}" alt="">
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="/single-blog.{{$post->id}}">travel</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="/single-blog.{{$post->id}}" class="headline">
                                                            <h5>{{$post->blogname}}</h5>
                                                        </a>
                                                        <p>{{substr($post->blogcontent, 0,  20)}}</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="/single-blog.{{$post->id}}" class="post-author"> {{$post->username}} </a> on <a href="/single-blog.{{$post->id}}" class="post-date">{{$post->created_at}}</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            @foreach($posts as $post)
                                                <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <img src="{{$post->blogimage}}" alt="">
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="/single-blog.{{$post->id}}" class="headline">
                                                            <h5>{{$post->blogname}}</h5>
                                                        </a>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="/single-blog.{{$post->id}}" class="post-author">{{$post->username}}</a> on <a href="/single-blog.{{$post->id}}" class="post-date">{{$post->created_at}}</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Catagory Area -->
                    </div>
                </div>

<!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Top Stories</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                @foreach($posts as $post)
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{$post->blogimage}}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="/single-blog.{{$post->id}}" class="headline">
                                            <h5 class="mb-0">{{substr($post->blogcontent, 0,  20)}}</h5>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                        <!-- Widget Area -->
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
<!--======== Bottom Caruso ========== -->
            <div class="row justify-content-center">
                <!-- ========== Single Blog Post ========== -->
                @foreach($posts as $post)
                    <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.6s">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="{{$post->blogimage}}" alt="">
                                    <!-- Post Content -->
                                    <div class="post-content d-flex align-items-center justify-content-between">
                                        <!-- Catagory -->
                                        <div class="post-tag"><a href="/single-blog.{{$post->id}}">travel</a></div>
                                        <!-- Headline -->
                                        <a href="/single-blog.{{$post->id}}" class="headline">
                                            <h5>{{ substr($post->blogcontent, 0,  25) }}</h5>
                                        </a>
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <p><a href="/single-blog.{{$post->id}}" class="post-author">{{ $post->username }}</a> on <a href="/single-blog.{{$post->id}}" class="post-date">{{ $post->created_at }}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach 
            </div>
        </div>
    </div>
</div>
@endsection