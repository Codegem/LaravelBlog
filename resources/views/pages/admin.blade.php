@extends('main')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">User</th>
      <th scope="col">BlogName</th>
      <th scope="col">BlogAbout</th>
      <th scope="col">BlogContent</th>
      <th scope="col">Posted Date</th>
      <th scope="col">IMG LINK</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($posts as $post):?>
    <tr>
      <th scope="row"><?=$post['username'];?></th>
      <th scope="row"><?=$post['blogname'];?></th>
      <th scope="row"><?=$post['blogabout'];?></th>
      <th scope="row"><?=$post['blogcontent'];?></th>
      <th scope="row"><?=$post['created_at'];?></th>
      <th scope="row"><?=$post['blogimage'];?></th>
      <th scope="row"><a href="/delete.{{$post->id}}" class="btn btn-danger">Delete</a></th>
      <th scope="row"><a href="/editblog.{{$post->id}}" class="btn btn-primary">Edit</a></th>
    </tr>
    <?php endforeach?>
  </tbody>
</table>
@endsection