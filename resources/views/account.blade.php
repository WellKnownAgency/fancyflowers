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
      <div class="col-md-4">
        <h2>Personal Information</h2>
        <p>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</p>
        <p>{{Auth::user()->email}}</p>
        <p>{{Auth::user()->phonenumber}}</p>
        <p><a href="{{route('users.edit' , Auth::user())}}" class="button btn btn-edit" style="padding-right:15px; padding-left:15px;">Edit</a></p>
      </div>
      <div class="col-md-8">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><h4>Shipping Information</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><h4>Payment Information</h4></a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade active in" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <br>
            <a href="{{route('addresses.create')}}" class="button btn btn-primary">Add New Address</a>
            <br>
            <ul class="list-group">
              <div class="table-responsive-md">
                <table class="table">
                  <tbody>
                    @foreach (Auth::user()->ships as $ship)
                      <tr>
                        <td>{{ $ship->name }}</td>
                        <td>{{ $ship->street }} {{ $ship->city }}, {{ $ship->state }} {{ $ship->zipcode }}</td>
                        <td><a href="{{route('addresses.edit', $ship->id )}}" class="list-edit">Edit</a></td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </ul>
          </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <br>
            <a href="{{route('cards.create')}}" class="button btn btn-primary">Add New Card</a>
            <br>
            <ul class="list-group">
              <div class="table-responsive-md">
                <table class="table">
                  <tbody>
                    @foreach (Auth::user()->cards as $card)
                      <tr>
                        <td>{{ $card->name }}</td>
                        <td>**** **** **** {{ substr($card->number, -4)}}</td>
                        <td>{{ $card->zipcode }}</td>
                        <td>{{ $card->phone }}</td>
                        <td>{{ $card->email }}</td>
                        <td><a href="{{route('cards.edit', $card->id )}}" class="list-edit">Edit</a></td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- end container -->
</div><!--end columns -->
</br>

@stop
