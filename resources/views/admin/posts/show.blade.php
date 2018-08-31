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

         <span style="float:right;"><a href="/admin/posts/" class="btn btn-warning">Edit Post</a></span>
       </h2>

       <ul class="list-group list-group-flush">
         <li class="list-group-item">{{ ->title }}</li>
         <li class="list-group-item">{{ ->slug }}</li>
         <li class="list-group-item">{{ ->metatitle }}</li>
         <li class="list-group-item">{{ ->dscr }}</li>
         <li class="list-group-item">{{ ->excerpt }}</li>
         <li class="list-group-item">{{ ->body }}</li>

         <li class="list-group-item"><img src="/images/product/{{ $post->image1 }}" height="200px"/>

         <li class="list-group-item">
           @if ($post->stock == true)
           <span class="badge badge-success">In Stock</span>
           @else
           <span class="badge badge-danger">Out of Stock</span>
           @endif
         </li>
         <li class="list-group-item">
           @foreach ($post->posts as $post)
           <h4>  <span class="badge badge-secondary">{{ $post->name }}</span></h4>
           @endforeach
         </li>
       </ul>
      </div>
    </div>
  </div>
</div>
@stop
