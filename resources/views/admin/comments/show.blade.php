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
          Fancy Flowers Comments
        </div>
        <div class="card-body">
          <a href="/admin/contacts" class="btn btn-info">All Comments</a>
          <br><br>
          <a href="/admin/contacts/" class="btn btn-danger">Delete Comment</a>
        </div>
      </div>
      <br>
      <div class="card" style="width: 100%;">
        <div class="card-header">
          Date
        </div>
        <div class="card-body">
          <strong>Created:</strong> {{ $comment->created_at }}<br>
          <strong>Updated:</strong> {{ $comment->updated_at }}
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card" style="width: 100%;">
        <h2 class="card-header">
         {{ $comment->user_id }}

       </h2>

       <ul class="list-group list-group-flush">
         <li class="list-group-item">{{ $comment->user_id }}</li>
         <li class="list-group-item">{{ $comment->post_id }}</li>
         <li class="list-group-item">{{ $comment->body }}</li>
         <li class="list-group-item">{{ $comment->date }}</li>
       </ul>
      </div>
    </div>
  </div>
</div>
@stop
