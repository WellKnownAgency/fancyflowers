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
<<<<<<< HEAD
          <form action="{{ route('addresses.store') }}" id="form-account-creation" class="form-horizontal box panel panel-default" method="POST">
=======
          <form action="{{ route('addresses.store') }}" id="form-account-creation" class="form-horizontal box panel panel-default" role="form" data-toggle="validator" method="POST">
>>>>>>> 07f3f29d4b5afd5f3a8518c8c791b4c7fb191dfb
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
                  <label for="apartment">Apartment (Optional)<sup>*</sup></label>
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
<<<<<<< HEAD
=======
<script type="text/javascript">

   $(document).ready(function() {
    $('#form-account-creation').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },

            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },

	 email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },



            }
        })


        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#reg_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});




 </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
>>>>>>> 07f3f29d4b5afd5f3a8518c8c791b4c7fb191dfb
@stop
