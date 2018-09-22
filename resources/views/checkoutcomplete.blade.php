@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('main')

@section('content')
<div id="breadcrumb" class="clearfix">
  <div class="container">
    <div class="breadcrumb clearfix">
      <ul class="ul-breadcrumb">
        <li><a href="/" title="Home">Home</a></li>
        <li><span>privacy policy</span></li>
      </ul>
      <h2 class="bread-title">Checkout Complete</h2>

    </div>
  </div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
  <!-- container -->
  <div class="container text-center">
        <h2 class="title_block">Your Order Payed</h2>
        <p>Your Order was <strong style="color: ;">Successfully</strong> placed. </p>
        <p>Expect a call to confirm your <strong style="color: ;">Order</strong> within 15 minutes.</p>
  </div>
</div><!--end columns -->
@stop
