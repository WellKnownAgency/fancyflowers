@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 100%;">
        <div class="card-header">
          Fancy Flowers Posts
        </div>
        <div class="card-body">
          <a href="/admin/posts" class="btn btn-info">All Posts</a>
          <br><br>
          <a href="/admin/posts/" class="btn btn-danger">Delete Post</a>
        </div>
      </div>
      <br>
      <div class="card" style="width: 100%;">
        <div class="card-header">
          Date
        </div>
        <div class="card-body">
          <strong>Created:</strong> {{ $post->created_at }}<br>
          <strong>Updated:</strong> {{ $post->updated_at }}
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card" style="width: 100%;">
        <h2 class="card-header">
         {{ $post->name }}

         <span style="float:right;"><a href="/admin/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit Post</a></span>
       </h2>

       <ul class="list-group list-group-flush">
         <li class="list-group-item">{{ $post->title }}</li>
         <li class="list-group-item">{{ $post->slug }}</li>
         <li class="list-group-item">{{ $post->metatitle }}</li>
         <li class="list-group-item">{{ $post->dscr }}</li>
         <li class="list-group-item">{{ $post->excerpt }}</li>
         <li class="list-group-item">{{ $post->body }}</li>
         <li class="list-group-item"><img src="/images/blog/{{ $post->image }}" height="200px"/>

       </ul>
      </div>
    </div>
  </div>
</div>
@stop
