@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('main')

@section('content')
<div id="breadcrumb" class="clearfix" style="background-image: url(/images/default/breacrum-blog.jpg);">
	<div class="container">
		<div class="breadcrumb clearfix">
			<ul class="ul-breadcrumb">
				<li><a href="/" title="Home">Home</a></li>
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
			<div id="center_column" class="col-lg-12 col-md-12">
				<div class="blog-posts clearfix">
					<h1 class="title_block">Latest blog</h1>
					<div class="row">
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
									<div class="des">{{ str_limit($post->excerpt, 50) }}</div>
									<a class="btn-readmore" href="/blog/{{$post->slug}}" title="Read more">Read more <i class="zmdi zmdi-chevron-right"></i></a>
								</div>
							</div><!-- end post -->
						</div>
						@endforeach
					</div><!-- end row -->
				</div>
					<div class="content_sortPagiBar bottom clearfix">
						{{$postss->links()}}
					</div><!-- end content_sortPagiBar -->
			</div><!-- end blog-posts -->
		<!--<div id="right_column" class="sidebar col-lg-3 col-md-3">
				<div id="recent-posts" class="block recent-posts">
					<h4 class="title_block">Popular posts</h4>
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
				</div>//end recent-posts
			</div>// end right_column -->
		</div><!-- end row -->
	</div> <!-- end container -->
</div><!--end columns-->

@stop
