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
      <h2 class="bread-title">Create a Shipping Address</h2>
    </div>
  </div>
</div><!-- end breadcrumb -->
  <div class="container">
    <div class="row">
      <div class=" col-md-8 col-md-offset-2">
          <form action="{{ route('addresses.store') }}" id="form-account-creation" class="form-horizontal box panel panel-default" onSubmit="javascript:validate()" method="POST">
            @csrf
            <h3 class="panel-heading">Create a Shipping Address </h3>

            <div class="form_content panel-body clearfix">
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="name">Relationship Name<sup>*</sup></label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="firstname">First Name<sup>*</sup></label>
                  <input type="text" class="form-control" id="firstname" name="firstname" required>
                   <p class="help-block hidden">Please enter a name 3 characters or more.</p>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="lastname">Last Name<sup>*</sup></label>
                  <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="street">Address<sup>*</sup></label>
                  <input type="text" class="form-control" id="street" name="street" required>
              </div>
            </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="apartment">Apartment (Optional)<sup>*</sup></label>
                  <input type="text" class="form-control" id="apartment" name="apartment" required>
              </div>
            </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="city">City <sup>*</sup></label>
                  <input type="text" class="form-control" id="city" name="city" required>
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
                  <input type="number" class="form-control" id="zipcode" name="zipcode" required>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="phone">Phone Number<sup>*</sup></label>
                  <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-12">
                  <button type="submit" class="btn button btn-default">Create</button>
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

@section('customjs')
<script type="text/javascript">

var showErrorSuccess = function(element, status) {
if (status === false) {
  element.parent().next().removeClass('hidden').parent().addClass('has-error');
  return false;
}
element.parent().next().addClass('hidden').parent().removeClass('has-error').addClass('has-success');
};

var validate = function() {
event.preventDefault();
//validate name
var name = $('#firstname').val();
if (name.length < 3) {
  return showErrorSuccess($('#firstname'), false);
}
showErrorSuccess($('#firstname'));

var lastname = $('#lastname').val();
if (lastname.length < 3) {
  return showErrorSuccess($('#lastname'), false);
}
showErrorSuccess($('#lastname'));

//validate email
var email = $('#email').val(),
  emailReg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/
if (!emailReg.test(email) || email == '') {
  return showErrorSuccess($('#email'), false);
}
showErrorSuccess($('#email'));

//validate phone
var phone = $('#phone').val(),
  intRegex = /[0-9 -()+]+$/;
if ((phone.length < 6) || (!intRegex.test(phone))) {
  return showErrorSuccess($('#phone'), false);
}
showErrorSuccess($('#phone'));
};


 </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
@stop
