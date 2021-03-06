@section('title', 'Edit Shipping Address | Fancy Flowers')
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
      <h2 class="bread-title">Edit a Shipping Address</h2>
    </div>
  </div>
</div><!-- end breadcrumb -->
  <div class="container">
    <div class="row">
      <div class=" col-md-8 col-md-offset-2">
          <form action="{{ action('ShipController@update', $ship->id) }}" id="form-account-creation" class="form-horizontal box panel panel-default" method="POST">
            @csrf
            <h3 class="panel-heading">Edit {{$ship->name}} Address </h3>

            <div class="form_content panel-body clearfix">
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="name">Relationship Name<sup>*</sup></label>
                  <input type="text" class="form-control" id="name" name="name" value="{{$ship->name}}" required>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="firstname">First Name<sup>*</sup></label>
                  <input type="text" class="form-control" id="firstname" name="firstname" value="{{$ship->firstname}}" required>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="lastname">Last Name<sup>*</sup></label>
                  <input type="text" class="form-control" id="lastname" name="lastname" value="{{$ship->lastname}}" required>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="street">Address<sup>*</sup></label>
                  <input type="text" class="form-control" id="street" name="street" value="{{$ship->street}}" required>
              </div>
            </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="apartment">Apartment<sup>*</sup></label>
                  <input type="text" class="form-control" id="apartment" value="{{$ship->apartment}}" name="apartment">
              </div>
            </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="city">City <sup>*</sup></label>
                  <input type="text" class="form-control" id="city" name="city" value="{{$ship->city}}" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-12">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1" name="state">
                  <option value="NJ">NJ</option>
                  <option value="PA">PA</option>
                </select>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="zipcode">Zip Code <sup>*</sup></label>
                  <input type="number" class="form-control" id="zipcode" name="zipcode" value="{{$ship->zipcode}}" required>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="phone">Phone Number<sup>*</sup></label>
                  <input type="text" class="form-control" id="phone" name="phone" value="{{$ship->phone}}" required>
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
