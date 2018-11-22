@section('title', 'Contact us | Fancy Flowers')
@section('dscr', 'Contact form and information to get in touch with Fancy Flowers')
@section('keywords', '')

@extends('main')


@section('content')

			<div id="breadcrumb" class="clearfix" style="background-image: url(/images/default/breacrum-contact-us.jpg);">
				<div class="container">
					<div class="breadcrumb clearfix">
						<ul class="ul-breadcrumb">
							<li><a href="/" title="Home">home</a></li>
							<li><span>Contact us</span></li>
						</ul>
						<h2 class="bread-title">Contact us</h2>
					</div>
				</div>
			</div><!-- end breadcrumb -->

			<div id="columns" class="columns-container">
				<div class="container">
					<div class="contact-us">
						<div class="row" style="margin-top: 50px;">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<h2 class="title_block">Contact info</h2>
								<div class="contact-box">
									<p>Ask us a question and we'll write back to you promptly! Simply fill out the form below and click "Send Message." Thanks!<p>
									<ul>
										<li><i class="zmdi zmdi-pin"></i><span>3602 Greenwood Terrace, Chalfont, PA, USA</span></li>
										<li><i class="zmdi zmdi-phone"></i><span><img src="images/language/en.jpg" alt="" width="16" height="11" style="margin-right:10px;"><a href="tel:+12673562820" style="" class="">+1 (267) 356-2820</a> / <br><img src="images/language/ru.png" alt="" width="16" height="11" style="margin-right:10px;"><a href="tel:+12679723986">+1 (267) 972-3986</a></span></li>
										<li><i class="zmdi zmdi-email"></i><a href="mailto:myfancyflowers@gmail.com" title="">myfancyflowers@gmail.com</a></li>
									</ul>
								</div><!-- contact-box-->
							</div>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								<div class="contact-form clearfix">
									<h2 class="title_block">Send us a message</h2>
									<form method="post" action="{{route('contact.store')}}" id="cform" autocomplete="on">
										{{ csrf_field() }}
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="text" id="name" name="name" placeholder="Name*" required/>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="email" id="email" name="email" placeholder="Email*" required/>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<input type="text" id="subject" name="subj" placeholder="Subject*" required/>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<textarea id="message" name="body" placeholder="Enter your message*" required></textarea>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<button type="submit" class="btn button btn-primary">Send message</button>
											</div>
										</div>
									</form>
								</div><!-- end contac-form -->
							</div>
						</div>
						<div id="contact-map" class="clearfix">
							<div id="map"></div><!-- end map -->
							<div class="hidden-lg hidden-md hidden-sm hidden-xs contact-address">815 Sunset Boulevard Ca 70079</div>
						</div><!-- end contact-map -->
					</div><!-- end contact-us -->
				</div><!-- end container -->
			</div><!--end columns-->
@stop
@section('customjs')
<!-- Map google -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDzH9dDQUCBCUlalG100KYMFIhXOjqmlcU"></script>
@stop
