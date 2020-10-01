@extends('main')
@section('content')
<h1 class="text-center m-4">Add new blog here!</h1>

  <!--Form without header-->
  <form method="POST" action="/post" class="form-horizontal">
  {{csrf_field()}}
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">

      <!--Header-->
      <div class="text-center">
      </div>

      <div class="md-form">
        <input type="text" id="form100" class="form-control" name="username">
        <label for="form100">Your name</label>
      </div>

      <div class="md-form">
        <input type="text" id="form101" class="form-control" name="blogname">
        <label for="form101">Blog's Name</label>
      </div>

      <div class="md-form">
        <input type="text" id="form102" class="form-control" name="blogabout">
        <label for="form102">Subject</label>
      </div>

      <div class="md-form">
        <textarea id="form103" class="md-textarea form-control" rows="5" name="blogcontent"></textarea>
        <label for="form103">Your text</label>
      </div>

      <div class="md-form">
        <input type="text" id="form102" class="form-control" name="blogtags">
        <label for="form104">Blog Tags</label>
      </div>
      
      <div class="md-form">
          <div class="container">
          <div class="col-md-6">
              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-btn">
                          <span class="btn btn-danger btn-file">
                              Browse… <input type="file" id="imgInp" name="imageid">
                          </span>
                      </span>
                      <input type="text" class="form-control " id="atvaizdas" readonly>
                  </div>
                  <img id='img-upload'/>
              </div>
          </div>
          </div>      
      </div> <!-- cia -->

        <!--Grid column-->
        <div class="text-center col-md-12 mt-3 mb-2">
          <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1">Send</button>
        </div>
        <!--Grid column-->
    </div>
  </form>
      <!--Grid row-->
<div class="row justify-content-center">
                <!-- ========== Single Blog Post ========== -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b4.jpg" alt="">
                            <!-- Post Content -->
                            <div class="post-content d-flex align-items-center justify-content-between">
                                <!-- Catagory -->
                                <div class="post-tag"><a href="#">travel</a></div>
                                <!-- Headline -->
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== Single Blog Post ========== -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.4s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b5.jpg" alt="">
                            <!-- Post Content -->
                            <div class="post-content d-flex align-items-center justify-content-between">
                                <!-- Catagory -->
                                <div class="post-tag"><a href="#">travel</a></div>
                                <!-- Headline -->
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== Single Blog Post ========== -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.6s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="img/blog-img/b6.jpg" alt="">
                            <!-- Post Content -->
                            <div class="post-content d-flex align-items-center justify-content-between">
                                <!-- Catagory -->
                                <div class="post-tag"><a href="#">travel</a></div>
                                <!-- Headline -->
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection