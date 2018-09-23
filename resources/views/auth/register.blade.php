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
						<div class="form-group required">
							<div class="col-lg-12">
								<label for="firstname">First name <sup>*</sup></label>
								<input type="text" class="form-control" id="firstname" name="firstname" required>
							</div>
						</div>
						<div class="form-group required">
							<div class="col-lg-12">
								<label for="lastname">Last Name <sup>*</sup></label>
								<input type="text" class="form-control" id="lastname" name="lastname" required>
							</div>
						</div>
						<div class="form-group required">
							<div class="col-lg-12">
								<label for="email">Email address <sup>*</sup></label>
								<input type="email" class="form-control" id="email" name="email" required>
							</div>
						</div>
						<div class="form-group required">
							<div class="col-lg-12">
								<label for="phonenumber">Phone Number <sup>*</sup></label>
								<input type="number" class="form-control" id="phonenumber" name="phonenumber" required>
							</div>
						</div>
						<div class="form-group required">
							<div class="col-lg-12">
								<label for="password">Password <sup>*</sup></label>
								<input type="password" class="form-control" id="password" name="password" required>
							</div>
						</div>

						<div class="form-group required">
							<div class="col-lg-12">
								<label for="password-confirm">Confirm Password<sup>*</sup></label>
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
