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
				<li><span>Login</span></li>
			</ul>
			<h2 class="bread-title">Page login</h2>
		</div>
	</div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
	<!-- container -->
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<form action="" id="create-account-form" class="form-horizontal box panel panel-default">
					<h3 class="panel-heading">Create an account</h3>
					<div class="form_content panel-body clearfix">
						<p>Registration is quick and easy. It allows you to be able to order from our shop. To start shopping click register.</p>
						<a href="/register" class="btn button btn-default" title="Create an account" rel="nofollow"><i class="fa fa-user left"></i> Create an account</a>
					</div>
				</form><!--end form -->
			</div>
			<div class="col-lg-6">
				<form action="{{ route('login') }}" id="form-login" class="form-horizontal box panel panel-default" method="POST">
					{{ csrf_field() }}
					<h3 class="panel-heading">Already registered?</h3>
					<div class="form_content panel-body clearfix">
						<div class="form-group">
							<div class="col-lg-12">
								<label for="email">Email address</label>
								<input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
							</div>
						</div>
						<div class="form-group row">
								<div class="col-md-6 offset-md-4">
										<div class="form-check">
												<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
												<label class="form-check-label" for="remember">
														Remember Me
												</label>
										</div>
								</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<p class="lost_password">
									<a href="{{ route('password.request') }}" title="Recover your forgotten password" rel="nofollow">Forgot your password?</a>
								</p>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<button type="submit" class="btn button btn-default"><i class="fa fa-lock left"></i> Sing in</button>
							</div>
						</div>
					</div>
				</form><!--end form -->
			</div>
		</div>
	</div> <!-- end container -->
</div><!--end columns -->


@stop
