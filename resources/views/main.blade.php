<html lang-"en">
  <head>
    @include('partials/_head')
  </head>
  <body class="index home-1">
    <div id="all">
      @include('partials/_nav')
      @include('partials/_slideshow')
      @yield('content')
      @include('partials/_footer')

      <!-- Popup Screen -->
			<div class="tiva-popup-screen">
				<div class="popup-wrap" id="tiva-popupscreen">
					<div class="popup">
						<a class="close" href="#">&times;</a>
						<form action="#" method="post" class="frm-newsletter-h1">
							<h3 class="title_block">Newsletter</h3>
							<p>Subscribe now to get 20% off on any product!</p>
							<div class="form-group">
								<input class="form-control" type="text" name="email" size="18" placeholder="Your email here...">
							</div>
							<button type="submit" name="submitNewsletter" class="btn button btn-primary button-small">
								<span class="submit-icon"></span>
								<span class="submit-text">Subscribe</span>
							</button>
							<div class="checkbox chck-popup">
								<label><input type="checkbox"> Don’t show this popup again</label>
							</div>
						</form>
					</div>
				</div>
			</div>

      <div class="go-up">
				<a href="#"><i class="fa fa-chevron-up"></i></a>
			</div><!-- end go-up -->
    </div>
    @include('partials/_js')
  </body>
</html>
