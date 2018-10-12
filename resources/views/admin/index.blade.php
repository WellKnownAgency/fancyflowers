@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('content')
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3">
      <div class="card" style="width: 100%;">
        <div class="card-header">
          <h3> Website Links </h>
        </div>
        <div class="card-body">
          <ul class="list-group">
          <li class="list-group-item"><a href="/" class="list-group-item list-group-item-action">Main Page</a></li>
          <li class="list-group-item"><a href="collections/all" class="list-group-item list-group-item-action">All Collections</a></li>
          <li class="list-group-item"><a href="/blog" class="list-group-item list-group-item-action">Blog</a></li>
          <li class="list-group-item"><a href="/about-us" class="list-group-item list-group-item-action">About Us</a></li>
          <li class="list-group-item"><a href="/contact-us" class="list-group-item list-group-item-action">Contact Us</a></li>
          <li class="list-group-item"><a href="/privacy-policy" class="list-group-item list-group-item-action">Privacy</a></li>
        </ul>
        </div>
      </div>
    </div>
    <br>

    <div class="col-sm-9">
      <div class="well">
        <h4><b>FancyFlowers Dashboard</b></h4>
        <p>Some text..</p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <a class="nav-link" href="/admin/products">Total Products</a>
            <p class="well-count">{{ $flowers->count() }}</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <a class="nav-link" href="/admin/collections">Total Collections</a>
            <p class="well-count">{{ $collections->count() }}</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <a class="nav-link" href="/admin/posts">Total Posts</a>
            <p class="well-count">{{ $posts->count() }}</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <a class="nav-link" href="/admin/users">Total Users</a>
            <p class="well-count">{{ $users->count() }}</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="well com">
            <a class="nav-link" href="/admin/comments">Last Comments</a>
          @foreach ($comments as $comment)
            <p>{{ $comment->body }}</p>
          @endforeach
          </div>
        </div>
        <div class="col-sm-6">
          <div class="well com">
            <a class="nav-link" href="/admin/contacts">Last messages</a>
            @foreach ($contacts as $contact)
              <p>{{ $contact->body }}</p>
            @endforeach
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
            <p><b>ORDERS SUMMARY :</b></p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            <p><b>$ ORDERS SUMMARY :</b></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






@stop
