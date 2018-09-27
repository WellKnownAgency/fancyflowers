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
$("form").validate({
	rules: {
		Zip: {zipCodeValidation: true} // hook in custom zip code validation
	}
});

$.validator.addMethod("zipCodeValidation", function() {
	var zipCode = $('input#zipcode').val();
	return (/(^\d{5}$)|(^\d{5}-\d{4}$)/).test(zipCode); // returns boolean
}, "Please enter a valid US zip code (use a hyphen if 9 digits).");
</script>
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
     || /^(08003 08034 08045 08043 08033 08002 08026 08049 08052 08053 08083 08007 08084 08035 08108 08106 08054 08078 08107 08029 08021 08057 08109 08091 08059 08031 08099 08110 08105 08104 08030 08077 08103 08101 08012 08065 08076 08055 08032 08102 19137 08036 08093 08096 19134 19148 08009 08075 19135 19125 19106 19147 08048 08073 19112 19109 19123 08046 19136 19107 19190 19195 08097 08004 08081 19124 19110 19122 19092 19093 19099 19101 19105 19019 19155 19160 19161 19162 19170 19171 19172 19173 19175 19177 19178 19179 19181 19182 19183 19184 19185 19187 19188 19191 19192 19193 19194 19196 19197 19244 19255 19108 19102 08063 08090 08010 19133 19149 19103 19145 19146 08080 19130 08086 19114 19140 19152 19120 08018 19121 19132 19104 08060 19111 08051 08061 08066 19012 19141 08071 19143 19176 19142 19154 08089 19129 19115 19021 19126 08020 19144 19020 19139 08016 19131 19027 08011 19153)/.test(value);
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
        zipcodeMy: true
      },
      phone: {
        required: true,
        nowhitespace: false,
        lettersonly: false
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
