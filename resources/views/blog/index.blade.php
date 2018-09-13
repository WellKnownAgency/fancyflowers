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
							<div class="/blog/{{$post->slug}}">
								<div class="post-image">
									<a href="page-blog-left-detail.html">
										<img src="/images/blog/{{$post->image}}" alt="{{$post->title}}" class="img-responsive">
									</a>
									<div class="post-meta">
										<div class="post-meta-lr">
											<span class="post-author">
												<i class="zmdi zmdi-account"></i>
												By <a href="#">FancyFlowers</a>
											</span>
											<span class="post-date"><i class="zmdi zmdi-calendar"></i> 1{{ Carbon\Carbon::parse($post->created_at)->format('M') }}</span>
										</div><!-- end post-meta-left -->
									</div><!-- end post-meta -->
								</div>
								<div class="post-content">
									<h4 class="title_block"><a href="/blog/{{$post->slug}}" title="{{$post->title}}">{{$post->title}}</a></h4>
									<div class="des">{{$post->excerpt	}}</div>
									<a class="btn-readmore" href="page-blog-left-detail.html" title="Read more">Read more <i class="zmdi zmdi-chevron-right"></i></a>
								</div>
							</div><!-- end post -->
							<br>
							<br>
						</div>
						@endforeach
						@foreach ($postss as $post)
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-sp-12">
							<div class="post post-medium">
								<div class="post-image">
									<a href="/blog/{{$post->slug}}">
									<img src="/images/blog/{{$post->image}}" alt="{{$post->title}}" class="img-responsive">
									</a>
								</div>
								<div class="post-content">
									<h4 class="title_block"><a href="/blog/{{$post->slug}}" title="{{$post->title}}">{{$post->title}}</a></h4>
									<div class="des">{{$post->excerpt}}	...</div>
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
				<div id="recent-posts" class="block recent-posts">
					<h4 class="title_block">Ropular posts</h4>
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
						</ul>
					</div>
				</div><!-- end recent-posts -->
			</div><!-- end right_column -->
		</div><!-- end row -->
	</div> <!-- end container -->
</div><!--end columns-->

@stop
