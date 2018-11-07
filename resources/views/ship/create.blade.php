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
      <h2 class="bread-title">Create a Shipping Address</h2>
    </div>
  </div>
</div><!-- end breadcrumb -->
  <div class="container">
    <div class="row">
      <div class=" col-md-8 col-md-offset-2">
          <form action="{{ route('addresses.store') }}" id="form-account-creation" class="form-horizontal box panel panel-default" method="POST">
            @csrf
            <h3 class="panel-heading">Create a Shipping Address </h3>

            <div class="form_content panel-body clearfix">
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="name">Relationship Name<sup>*</sup></label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="firstname">First Name<sup>*</sup></label>
                  <input type="text" class="form-control" id="firstname" name="firstname">
                   <p class="help-block hidden">Please enter a name 3 characters or more.</p>
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="lastname">Last Name<sup>*</sup></label>
                  <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="street">Address<sup>*</sup></label>
                  <input type="text" class="form-control" id="street" name="street">
              </div>
            </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="apartment">Apartment (Optional)</label>
                  <input type="text" class="form-control" id="apartment" name="apartment">
              </div>
            </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="city">City <sup>*</sup></label>
                  <input type="text" class="form-control" id="city" name="city">
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
                  <input type="number" class="form-control" id="zipcode" name="zipcode">
                </div>
              </div>
              <div class="form-group required">
                <div class="col-lg-12">
                  <label for="phone">Phone Number<sup>*</sup></label>
                  <input type="text" class="form-control" id="phone" name="phone">
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-12">
                  <button type="submit" class="btn button btn-default" id="submitButton" >Create</button>
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
 <script src="{!! asset('js/jquery.validation.js') !!}"></script>
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
<script>
$(function() {

  $.validator.setDefaults({
    errorClass: 'help-block',
    highlight: function(element) {
      $(element)
        .closest('.form-group')
        .addClass('has-error');
    },
    unhighlight: function(element) {
      $(element)
        .closest('.form-group')
        .removeClass('has-error');
    },
    errorPlacement: function (error, element) {
      if (element.prop('type') === 'checkbox') {
        error.insertAfter(element.parent());
      } else {
        error.insertAfter(element);
      }
    }
  });

  $.validator.addMethod('zipcodeMy', function(value, element) {
   return this.optional(element)
     || /08002/.test(value)
     || /08003/.test(value)
     || /08004/.test(value)
     || /08007/.test(value)
     || /08009/.test(value)
     || /08010/.test(value)
     || /08011/.test(value)
     || /08012/.test(value)
     || /08016/.test(value)
     || /08018/.test(value)
     || /08020/.test(value)
     || /08021/.test(value)
     || /08026/.test(value)
     || /08029/.test(value)
     || /08030/.test(value)
     || /08031/.test(value)
     || /08032/.test(value)
     || /08033/.test(value)
     || /08034/.test(value)
     || /08035/.test(value)
     || /08036/.test(value)
     || /08043/.test(value)
     || /08045/.test(value)
     || /08046/.test(value)
     || /08048/.test(value)
     || /08049/.test(value)
     || /08051/.test(value)
     || /08052/.test(value)
     || /08053/.test(value)
     || /08054/.test(value)
     || /08055/.test(value)
     || /08057/.test(value)
     || /08059/.test(value)
     || /08060/.test(value)
     || /08061/.test(value)
     || /08063/.test(value)
     || /08065/.test(value)
     || /08066/.test(value)
     || /08071/.test(value)
     || /08073/.test(value)
     || /08075/.test(value)
     || /08076/.test(value)
     || /08077/.test(value)
     || /08078/.test(value)
     || /08080/.test(value)
     || /08081/.test(value)
     || /08083/.test(value)
     || /08084/.test(value)
     || /08086/.test(value)
     || /08089/.test(value)
     || /08090/.test(value)
     || /08091/.test(value)
     || /08093/.test(value)
     || /08096/.test(value)
     || /08097/.test(value)
     || /08099/.test(value)
     || /08101/.test(value)
     || /08102/.test(value)
     || /08103/.test(value)
     || /08104/.test(value)
     || /08105/.test(value)
     || /08106/.test(value)
     || /08107/.test(value)
     || /08108/.test(value)
     || /08109/.test(value)
     || /08110/.test(value)
     || /19012/.test(value)
     || /19019/.test(value)
     || /19020/.test(value)
     || /19021/.test(value)
     || /19027/.test(value)
     || /19092/.test(value)
     || /19093/.test(value)
     || /19099/.test(value)
     || /19101/.test(value)
     || /19102/.test(value)
     || /19103/.test(value)
     || /19104/.test(value)
     || /19105/.test(value)
     || /19106/.test(value)
     || /19107/.test(value)
     || /19108/.test(value)
     || /19109/.test(value)
     || /19110/.test(value)
     || /19111/.test(value)
     || /19112/.test(value)
     || /19114/.test(value)
     || /19115/.test(value)
     || /19120/.test(value)
     || /19121/.test(value)
     || /19122/.test(value)
     || /19123/.test(value)
     || /19124/.test(value)
     || /19125/.test(value)
     || /19126/.test(value)
     || /19129/.test(value)
     || /19130/.test(value)
     || /19131/.test(value)
     || /19132/.test(value)
     || /19133/.test(value)
     || /19134/.test(value)
     || /19135/.test(value)
     || /19136/.test(value)
     || /19137/.test(value)
     || /19138/.test(value)
     || /19139/.test(value)
     || /19140/.test(value)
     || /19141/.test(value)
     || /19142/.test(value)
     || /19143/.test(value)
     || /19144/.test(value)
     || /19145/.test(value)
     || /19146/.test(value)
     || /19147/.test(value)
     || /19148/.test(value)
     || /19149/.test(value)
     || /19150/.test(value)
     || /19151/.test(value)
     || /19152/.test(value)
     || /19153/.test(value)
     || /19154/.test(value)
     || /19155/.test(value)
     || /19160/.test(value)
     || /19161/.test(value)
     || /19162/.test(value)
     || /19170/.test(value)
     || /19171/.test(value)
     || /19172/.test(value)
     || /19173/.test(value)
     || /19174/.test(value)
     || /19175/.test(value)
     || /19176/.test(value)
     || /19177/.test(value)
     || /19178/.test(value)
     || /19179/.test(value)
     || /19180/.test(value)
     || /19181/.test(value)
     || /19182/.test(value)
     || /19183/.test(value)
     || /19184/.test(value)
     || /19185/.test(value)
     || /19186/.test(value)
     || /19187/.test(value)
     || /19188/.test(value)
     || /19189/.test(value)
     || /19190/.test(value)
     || /19191/.test(value)
     || /19192/.test(value)
     || /19193/.test(value)
     || /19194/.test(value)
     || /19195/.test(value)
     || /19196/.test(value)
     || /19197/.test(value)
     || /19244/.test(value)
     || /19255/.test(value)
     ;
 }, 'Unfotunatelly we do not serve this area')

  $("#form-account-creation").validate({
    rules: {
      name: {
        required: true,
        nowhitespace: false,
        lettersonly: false
      },
      firstname: {
        required: true,
        nowhitespace: true,
        lettersonly: true
      },
      lastname: {
        required: true,
        nowhitespace: true,
        lettersonly: true
      },
      street: {
        required: true,
        nowhitespace: false,
        lettersonly: false
      },
      apartment: {
        required: false,
        nowhitespace: false,
        lettersonly: false
      },
      city: {
        required: true,
        nowhitespace: true,
        lettersonly: true
      },
      state: {
        required: true,
        nowhitespace: false,
        lettersonly: false
      },
      zipcode: {
        required: true,
        maxlength: 5,
        zipcodeMy: true
      },
      phone: {
        required: true,
        nowhitespace: false,
        digits: true
      }
    },
    messages: {
      email: {
        required: 'Please enter an email address.',
        email: 'Please enter a <em>valid</em> email address.',
        remote: $.validator.format("{0} is already associated with an account.")
      }
    }
  });

});
</script>
@stop
