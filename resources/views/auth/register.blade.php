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
				<li><span>Register</span></li>
			</ul>
			<h2 class="bread-title">Register</h2>
		</div>
	</div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
	<!-- container -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
				<form action="{{ route('register') }}" id="form-account-creation" class="form-horizontal box panel panel-default" method="POST">
					{{ csrf_field() }}
					<h3 class="panel-heading">Create an account</h3>
					<div class="form_content panel-body clearfix">
						<div class="form-group required
						    @if($errors->has('firstname')) has-error @endif
                        ">
							<div class="col-lg-12">
								<label for="firstname">First name <sup>*</sup></label>
								<input type="text" class="form-control" id="firstname" name="firstname" value="{{old('firstname')}}">
                                @if($errors->has('firstname'))
                                    <span class="help-block">{{$errors->first('firstname')}}</span>
                                @endif
                            </div>
						</div>
						<div class="form-group required
						    @if($errors->has('lastname')) has-error @endif
                            ">
							<div class="col-lg-12">
								<label for="lastname">Last Name <sup>*</sup></label>
								<input type="text" class="form-control" id="lastname" name="lastname" value="{{old('lastname')}}">
                                @if($errors->has('lastname'))
                                    <span class="help-block">{{$errors->first('lastname')}}</span>
                                @endif
                            </div>
						</div>
						<div class="form-group required
						    @if($errors->has('email')) has-error @endif
                            ">
							<div class="col-lg-12">
								<label for="email">Email address <sup>*</sup></label>
								<input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                                @if($errors->has('email'))
                                    <span class="help-block">{{$errors->first('email')}}</span>
                                @endif
							</div>
						</div>
						<div class="form-group required
						    @if($errors->has('phonenumber')) has-error @endif
                            ">
							<div class="col-lg-12">
								<label for="phonenumber">Phone Number <sup>*</sup></label>
								<input type="text" class="form-control" id="phonenumber" name="phonenumber" value="{{old('phonenumber')}}">
                                @if($errors->has('phonenumber'))
                                    <span class="help-block">{{$errors->first('phonenumber')}}</span>
                                @endif
                            </div>
						</div>
						<div class="form-group required
						    @if($errors->has('password')) has-error @endif
                            ">
							<div class="col-lg-12">
								<label for="password">Password <sup>*</sup></label>
								<input type="password" class="form-control" id="password" name="password">
                                @if($errors->has('password'))
                                    <span class="help-block">{{$errors->first('password')}}</span>
                                @endif
							</div>
						</div>

						<div class="form-group required
						    @if($errors->has('password_confirmation')) has-error @endif
                            ">
							<div class="col-lg-12">
								<label for="password-confirm">Confirm Password<sup>*</sup></label>
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                @if($errors->has('password_confirmation'))
                                    <span class="help-block">{{$errors->first('password_confirmation')}}</span>
                                @endif
                            </div>
						</div>

                        <div class="form-group required
						    @if($errors->has('g-recaptcha-response')) has-error @endif
                            ">
                            <div class="col-lg-12">
                                <label for="password-confirm">Captcha<sup>*</sup></label>
                                <div class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_KEY')}}"></div>
                                @if($errors->has('g-recaptcha-response'))
                                    <span class="help-block">{{$errors->first('g-recaptcha-response')}}</span>
                                @endif
                            </div>
                        </div>

						<div class="form-group">
							<div class="col-lg-12">
								<button type="submit" class="btn button btn-default">Register</button>
								<p class="pull-right required"><span><sup>*</sup>Required field</span></p>
							</div>
						</div>
					</div>
				</form><!--end form -->
			</div>
		</div>
	</div> <!-- end container -->
</div><!--end columns -->


@stop
