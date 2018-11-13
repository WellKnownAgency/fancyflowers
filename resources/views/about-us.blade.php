@section('title', 'About us | Fancy Flowers')
@section('dscr', 'Everything about our team, how we work and more. Fancy Flowers team.')
@section('keywords', '')

@extends('main')

@section('content')
<div id="breadcrumb" class="clearfix" style="background-image: url(/images/default/breacrum-about-us.jpg);">
  <div class="container">
    <div class="breadcrumb clearfix">
      <ul class="ul-breadcrumb">
        <li><a href="/" title="Home">Home</a></li>
        <li><span>about us</span></li>
      </ul>
      <h2 class="bread-title">About us</h2>
    </div>
  </div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
  <!-- container -->
  <div class="container">
      <div class="we-are">
        <h2 class="title_block">Who we are</h2>
          <p style="font-size:1.25em; text-indent:2em;">Fancy Flowers is a young company, but our team consists of true professionals who love their work, get joy from their work and want to share this joy with you. We created Fancy Flowers to create a miracle of flowers every day, making life more beautiful and receiving your smiles as a reward. Every day we receive fresh flowers from the best suppliers and our couriers rush to deliver ready-made bouquets of roses, lilies, hydrangeas, chrysanthemums, orchids to your homes, offices, restaurants or any other place wherever your favorite people are waiting for them. If you did not find the bouquet you dreamed about on our website, just write to us about your favorite flowers and we are ready to create your dream. Creating something new and beautiful is our goal.
          </p>
      </div>
      <div class="row">
        <div  align="middle">
          <a href="/contact-us" class="btn-join btn button btn-primary">Contact Us!</a>
        </div>
      </div><!--end row-->

    <div class="about-weare">
      <h4 class="title_block">Our team</h4>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12">
          <div class="weare-item">
            <div class="weare-image"><img class="img-responsive" src="images/about-us/370x270/team2.jpg" alt=""></div>
          </div>
        </div>
      </div>
    </div><!-- end about-weare -->
  </div> <!-- end container -->
</div><!--end columns -->
@stop
