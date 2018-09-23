@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('main')

@section('content')


<div id="breadcrumb" class="clearfix">
  <div class="container">
    <div class="breadcrumb clearfix">
      <ul class="ul-breadcrumb">
        <li><a href="/" title="Home">Home</a></li>
        <li><a href="/blog" title="Last blogs">Last blogs</a></li>
        <li><span>{{ $post->title }}</span></li>
      </ul>
      <h2 class="bread-title">Blog detail</h2>
    </div>
  </div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
  <!-- container -->
  <div class="container">
    <div class="row">
      <div id="left_column" class="sidebar col-lg-3 col-md-3">
        <div id="recent-posts" class="block recent-posts">
          <h4 class="title_block">Recent posts</h4>
          <div class="block_content">
            <ul class="posts-list">
              <li>
                <div class="media">
                  <div class="post-image pull-left">
                    <a href="page-blog-left-detail.html">
                      <img class="img-responsive" src="img/blog/870x578/1.jpg" alt="" width="90" height="54">
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
      </div><!-- end left_column -->
      <div id="center_column" class="col-lg-9 col-md-9">
        <div class="single-post">
          <div class="blog-detail">
            <div class="blog-image">
              <img src="/images/blog/{{ $post->image }}" alt="{{ $post->name }}" class="img-responsive">
              <div class="post-meta">
                <div class="post-meta-lr">
                  <span class="post-date"><i class="zmdi zmdi-calendar"></i> {{ Carbon\Carbon::parse($post->created_at)->format('M, d') }}</span>
                  <span class="comment"><i class="zmdi zmdi-comment-outline"></i> 10</span>
                </div><!-- end post-meta-left -->
              </div><!-- end post-meta -->
            </div>
            <h1 class="title_block">{{ $post->title }}</h1>
            <div class="post-content">
              <p>
                {{$post->body}}
              </p>
            </div>
            <div class="post-tag clearfix">
              <div class="post-tag-lr post-tag-right">
                <div class="social_block">
                  <ul class="links">
                    <li><a href="https://www.facebook.com/sharer.php?u={{ urlencode(Request::fullUrl()) }}"><em class="fa fa-facebook"></em></a></li>
                    <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"><em class="fa fa-twitter"></em></a></li>
                    <li><a href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}"><em class="fa fa-google-plus"></em></a></li>
                    <!--<li><a href="#"><em class="fa fa-linkedin"></em></a></li>-->
                    <li><a href="http://pinterest.com/pin/create/button/?url={{ urlencode(Request::fullUrl()) }}"><em class="fa fa-pinterest"></em></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- end blog-detail -->

          <div class="comments-area">
            <h4 class="title_block">Comments <span class="cm-count">(2)</span></h4>
            <ol class="comments-list">
              @foreach ($post->comments as $comment)
              <li>
                <div class="comment-inner">
                  <div class="comment-head media">
                    <div class="cm-content media-body">
                      <div class="cm-meta">
                        <a class="link-author">{{ $comment->user->firstname }} {{ $comment->user->lastname }}</a>
                        <span class="cm-date">{{ Carbon\Carbon::parse($comment->created_at)->format('M, d') }}</span>
                        <a href="#" class="reply-link"><i class="fa fa-mail-reply-all"></i>Reply</a>
                      </div>
                      <div class="cm-des">
                        <p>{{ $comment->body}}</p>
                      </div>
                    </div><!--end cm-content media-body -->
                  </div><!--end comment head -->
                </div><!--end comment inner -->
              </li>
              @endforeach
            </ol><!--end comments lest -->
          </div><!-- end comments-area -->
            @if (Auth::check())
          <div class="comments-form">
            <h4 class="title_block">Leave us a comment</h4>
            <form action="{{ route('comment.store', $post->id) }}" method="POST" class="form-horizontal">
              {{csrf_field()}}
              <div class="form-group">
                <div class="col-lg-12">
                  <textarea class="form-control" name="body" placeholder="Your comment *" ></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-12">
                  <button type="submit" class="btn button btn-primary">Send message</button>
                </div>
              </div>
            </form><!--end form -->
          </div><!--end comments form -->
          @else
          <div class="text-center">
            To post a comment you need to be logged in<br>
            <a href="/login" class="btn btn-primary btn-raised">Login</a>
          </div>
          <br>
          @endif
        </div><!-- end single-post -->
      </div><!-- end center_column -->
    </div>
  </div> <!-- end container -->
</div><!--end columns -->

@stop
