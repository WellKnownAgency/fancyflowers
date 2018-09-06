@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('main')

@section('content')
<div id="breadcrumb" class="clearfix">
  <div class="container">
    <div class="breadcrumb clearfix">
      <ul class="ul-breadcrumb">
        <li><a href="index.html" title="Home">Home</a></li>
      </ul>
      <h2 class="bread-title">Account</h2>
    </div>
  </div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
  <!-- container -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 ">
        <div class="card">
          <h3 class="card-header">
            Personal Info
          </h3>
          <div class="card-body">
            <p>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</p>
            <p>{{Auth::user()->email}}</p>
            <p>{{Auth::user()->phonenumber}}</p>
          </div>
        </div>

      </div><!-- end center_column -->
      <div class="col-lg-9 col-md-9 ">
        <div class="card">
          <div class="card-header">

          </div>
          <div class="card-body">
          </div>
        </div>
      </div>
    </div>
  </div> <!-- end container -->
</div><!--end columns -->
</br>

@stop
