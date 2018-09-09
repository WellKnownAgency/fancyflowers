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
        <li><a href="index.html" title="Home">Account</a></li>
      </ul>
      <h2 class="bread-title">Create a Payment Method</h2>
    </div>
  </div>
</div><!-- end breadcrumb -->
  <div class="container">
    <div class="row">
      <div class=" col-md-8 col-md-offset-2">
          <form action="{{ route('cards.store') }}" id="form-account-creation" class="form-horizontal box panel panel-default" method="POST">
            @csrf
            <h3 class="panel-heading">Add a Card </h3>

            <div class="form_content panel-body clearfix">
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="name">Name on card<sup>*</sup></label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="number">Card Number<sup>*</sup></label>
                  <input type="text" class="form-control" id="number" name="number" required>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="month">Month<sup>*</sup></label>
                  <input type="text" class="form-control" id="month" name="month" required>
                </div>
              </div>
                <div class="form-group required">
                  <div class="col-lg-12">
                    <label for="year">Year<sup>*</sup></label>
                    <input type="text" class="form-control" id="year" name="year" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <button type="submit" class="btn button btn-default">Add</button>
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
