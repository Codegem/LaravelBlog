@extends('main')
@section('content')

<form method="POST" action="/update" class="form-horizontal" enctype="multipart/form-data">
  {{csrf_field()}}
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">

      <!--Header-->
      <div class="text-center">
      </div>

      <div class="md-form">
        <input type="text" id="form100" class="form-control" name="username" value="{{$post->username}}">
        <label for="form100">Your name</label>
      </div>

      <div class="md-form">
        <input type="text" id="form101" class="form-control" name="blogname" value="{{$post->blogname}}">
        <label for="form101">Blog's Name</label>
      </div>

      <div class="md-form">
        <input type="text" id="form102" class="form-control" name="blogabout" value="{{$post->blogabout}}">
        <label for="form102">Subject</label>
      </div>

      <div class="md-form">
        <textarea id="form103" class="md-textarea form-control" rows="5" name="blogcontent" >{{$post->blogcontent}}</textarea>
        <label for="form103">Your text</label>
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
          <button type="submit" class="btn btn-primary btn-block btn-rounded z-depth-1 submitas">Update</button>
        </div>
        <!--Grid column-->
    </div>
  </form>

@endsection