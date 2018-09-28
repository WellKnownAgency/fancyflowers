@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('content')
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;}
    }

    .well{
      box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
    }
    
  </style>
</head>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3">

    </div>
    <br>

    <div class="col-sm-9">
      <div class="well">
        <h4>Dashboard</h4>
        <p>Some text..</p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <a class="nav-link" href="/admin/products">Total Products</a>
            <p></p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <a class="nav-link" href="/admin/collections">Total Collections</a>
            <p></p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <a class="nav-link" href="/admin/posts">Total Posts</a>
            <p></p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <a class="nav-link" href="/admin/users">Total Users</a>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <p>Last comments</p>
            <p>Text</p>
            <p>Text</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Last messages from contact us</p>
            <p>Text</p>
            <p>Text</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Some other bullshit</p>
            <p>Text</p>
            <p>Text</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>orders summary</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>$ orders summary</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






@stop
