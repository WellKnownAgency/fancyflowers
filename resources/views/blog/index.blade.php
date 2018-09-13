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
				<li><span>Latest blogs</span></li>
			</ul>
			<h2 class="bread-title">Latest blogs</h2>
		</div>
	</div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
	<!-- container -->
	<div class="container">
		<div class="row">
			<div id="center_column" class="col-lg-9 col-md-9">
				<div class="blog-posts clearfix">
					<h1 class="title_block">Latest blog</h1>
					<div class="row">
						@foreach ($posts as $post)
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="post post-large">
								<div class="post-image">
									<a href="page-blog-left-detail.html">
										<img src="images/blog/870x578/1.jpg" alt="" class="img-responsive">
									</a>
									<div class="post-meta">
										<div class="post-meta-lr">
											<span class="post-author">
												<i class="zmdi zmdi-account"></i>
												By <a href="#">Tivatheme</a>
											</span>
											<span class="post-date"><i class="zmdi zmdi-calendar"></i> 10 oct, 2017</span>
											<span class="comment"><i class="zmdi zmdi-comment-outline"></i> 10</span>
											<span class="favorite"><i class="zmdi zmdi-favorite-outline"></i> 20</span>
										</div><!-- end post-meta-left -->
									</div><!-- end post-meta -->
								</div>
								<div class="post-content">
									<h4 class="title_block"><a href="page-blog-left-detail.html" title="Nullam ullamcorper nisl quis ornare molestie">Nullam ullamcorper nisl quis ornare molestie</a></h4>
									<div class="des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
									<a class="btn-readmore" href="page-blog-left-detail.html" title="Read more">Read more <i class="zmdi zmdi-chevron-right"></i></a>
								</div>
							</div><!-- end post -->
						</div>
						@endforeach
						@foreach ($postss as $post)
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-sp-12">
							<div class="post post-medium">
								<div class="post-image">
									<a href="page-blog-left-detail.html">
									<img src="images/blog/870x578/2.jpg" alt="" class="img-responsive">
									</a>
								</div>
								<div class="post-content">
									<h4 class="title_block"><a href="page-blog-left-detail.html" title="Turpis at eleifend elit Aenean porta ac sed faucibus">Turpis at eleifend elit Aenean porta ac sed faucibus</a></h4>
									<div class="des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</div>
									<a class="btn-readmore" href="page-blog-left-detail.html" title="Read more">Read more <i class="zmdi zmdi-chevron-right"></i></a>
								</div>
							</div><!-- end post -->
						</div>
						@endforeach
						</div>
					</div><!-- end row -->
					<div class="content_sortPagiBar bottom clearfix">
						<nav>
							<ul class="pagination">
							<li>
								<a href="#" aria-label="Previous">
								<span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
								</a>
							</li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li class="truncate"><span>...</span></li>
							<li><a href="#">12</a></li>
							<li>
								<a href="#" aria-label="Next">
								<span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
								</a>
							</li>
							</ul>
						</nav>
					</div><!-- end content_sortPagiBar -->
				</div><!-- end blog-posts -->
			<div id="right_column" class="sidebar col-lg-3 col-md-3">
				<div id="blog-search" class="block blog-search">
					<h4 class="title_block">Search blog</h4>
					<div class="block_content">
						<form id="blogsearch" action="#">
							<div class="input-group">
								<input class="search_query form-control" type="text" id="search_query_blog" name="search_query" placeholder="Search" value="" autocomplete="off">
								<div class="input-group-btn">
									<button type="submit" name="submit_search" class="btn button"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div><!-- end blog-search -->
				<div id="categories_blog_menu" class="block blog-menu">
					<h4 class="title_block">Categories</h4>
					<div class="block_content">
						<ul class="list-block">
							<li>
								<a href="page-blog-left-sidebar.html" title="Nullam ullamcorper">
									Nullam ullamcorper
									<span class="count">(15)</span>
								</a>
							</li>
							<li>
								<a href="page-blog-left-sidebar.html" title="Turpis at eleifend">
									Turpis at eleifend
									<span class="count">(15)</span>
								</a>
							</li>
							<li>
								<a href="page-blog-left-sidebar.html" title="Morbi condimentum">
									Morbi condimentum
									<span class="count">(15)</span>
								</a>
							</li>
							<li>
								<a href="page-blog-left-sidebar.html" title="Urna pretium">
									Urna pretium
									<span class="count">(15)</span>
								</a>
							</li>
							<li>
								<a href="page-blog-left-sidebar.html" title="Ipsum cursus">
									Ipsum cursus
									<span class="count">(15)</span>
								</a>
							</li>
							<li>
								<a href="page-blog-left-sidebar.html" title="Consectetur adipiscing">
									Consectetur adipiscing
									<span class="count">(15)</span>
								</a>
							</li>
							<li>
								<a href="page-blog-left-sidebar.html" title="Excepteur sint occaecat">
									Excepteur sint occaecat
									<span class="count">(15)</span>
								</a>
							</li>
						</ul>
					</div>
				</div><!-- end categories_blog_menu -->
				<div id="recent-posts" class="block recent-posts">
					<h4 class="title_block">Recent posts</h4>
					<div class="block_content">
						<ul class="posts-list">
							<li>
								<div class="media">
									<div class="post-image pull-left">
										<a href="page-blog-left-detail.html">
											<img class="img-responsive" src="images/blog/870x578/1.jpg" alt="" width="90" height="54">
										</a>
									</div>
									<div class="post-info media-body">
										<h5><a href="page-blog-left-detail.html" title="Nullam ullamcorper">Nullam ullamcorper</a></h5>
										<div class="post-meta">
											<span class="post-date">
												<i class="zmdi zmdi-calendar"></i> 10 oct, 2017
											</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="media">
									<div class="post-image pull-left">
										<a href="page-blog-left-detail.html">
											<img class="img-responsive" src="images/blog/870x578/2.jpg" alt="" width="90" height="54">
										</a>
									</div>
									<div class="post-info media-body">
										<h5><a href="page-blog-left-detail.html" title="Turpis at eleifend">Turpis at eleifend</a></h5>
										<div class="post-meta">
											<span class="post-date">
												<i class="zmdi zmdi-calendar"></i> 10 oct, 2017
											</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="media">
									<div class="post-image pull-left">
										<a href="page-blog-left-detail.html">
											<img class="img-responsive" src="images/blog/870x578/3.jpg" alt="" width="90" height="54">
										</a>
									</div>
									<div class="post-info media-body">
										<h5><a href="page-blog-left-detail.html" title="Aenean porta ac">Aenean porta ac</a></h5>
										<div class="post-meta">
											<span class="post-date">
												<i class="zmdi zmdi-calendar"></i> 10 oct, 2017
											</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="media">
									<div class="post-image pull-left">
										<a href="page-blog-left-detail.html">
											<img class="img-responsive" src="images/blog/870x578/4.jpg" alt="" width="90" height="54">
										</a>
									</div>
									<div class="post-info media-body">
										<h5><a href="page-blog-left-detail.html" title="Porta ac sed faucibus">Porta ac sed faucibus</a></h5>
										<div class="post-meta">
											<span class="post-date">
												<i class="zmdi zmdi-calendar"></i> 10 oct, 2017
											</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="media">
									<div class="post-image pull-left">
										<a href="page-blog-left-detail.html">
											<img class="img-responsive" src="images/blog/870x578/5.jpg" alt="" width="90" height="54">
										</a>
									</div>
									<div class="post-info media-body">
										<h5><a href="page-blog-left-detail.html" title="Eleifend elit aenean">Eleifend elit aenean</a></h5>
										<div class="post-meta">
											<span class="post-date">
												<i class="zmdi zmdi-calendar"></i> 10 oct, 2017
											</span>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div><!-- end recent-posts -->
				<div id="block-tag" class="block block-tag">
					<h4 class="title_block">Popular tags</h4>
					<div class="block_content">
						<ul>
							<li><a href="#" title="Flower leis">Flower leis</a></li>
							<li><a href="#" title="Graduation">Graduation</a></li>
							<li><a href="#" title="Lei">Lei</a></li>
							<li><a href="#" title="Leis">Leis</a></li>
							<li><a href="#" title="Meagan bowman">Meagan bowman</a></li>
							<li><a href="#" title="Shark tank">Shark tank</a></li>
							<li><a href="#" title="Wood flower leis">Wood flower leis</a></li>
							<li><a href="#" title="Wood flowers">Wood flowers</a></li>
							<li><a href="#" title="Wedding">Wedding</a></li>
							<li><a href="#" title="Loose flowers">Loose flowers</a></li>
						</ul>
					</div>
				</div><!-- end block-tag -->
			</div><!-- end right_column -->
		</div><!-- end row -->
	</div> <!-- end container -->
</div><!--end columns-->

@stop
