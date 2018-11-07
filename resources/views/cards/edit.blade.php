@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('main')

@section('content')
<div id="breadcrumb" class="clearfix breadcrumb_back">
  <div class="container">
    <div class="breadcrumb clearfix">
      <ul class="ul-breadcrumb">
        <li><a href="index.html" title="Home">Home</a></li>
        <li><a href="index.html" title="Home">Account</a></li>
      </ul>
      <h2 class="bread-title">Edit a Card Information</h2>
    </div>
  </div>
</div><!-- end breadcrumb -->
  <div class="container">
    <div class="row">
      <div class=" col-md-8 col-md-offset-2">
          <form action="{{ action('CardController@update', $card->id) }}" id="form-account-creation" class="form-horizontal box panel panel-default" method="POST">
            @csrf
            <h3 class="panel-heading">Edit {{$card->name}} Information </h3>

            <div class="form_content panel-body clearfix">
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="name">Name on card<sup>*</sup></label>
                  <input type="text" class="form-control" id="name" name="name" value="{{$card->name}}" required>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="number">Card Number<sup>*</sup></label>
                  <input type="text" class="form-control" id="number" name="number" value="{{$card->number}}" required>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="month">Expiration Month<sup>*</sup></label>
                  <input type="text" class="form-control" id="month" name="month" value="{{$card->month}}" required>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="year">Expiration Year<sup>*</sup></label>
                  <input type="text" class="form-control" id="year" name="year" value="{{$card->year}}" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-12">
                  <button type="submit" class="btn button btn-default">Save</button>
                  <p class="pull-right required"><span><sup>*</sup>Required field</span></p>
                </div>
              </div>
            </div>
          </form><!--end form -->
        </div>
      </div>
  </div> <!-- end container -->
</br>

@stop
