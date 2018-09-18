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
        <li><a href="page-blog-left-sidebar.html" title="Last blogs">Last blogs</a></li>
        <li><span>Nullam ullamcorper nisl quis ornare molestie</span></li>
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
                    <li><a href="#" title="Facebook"><em class="fa fa-facebook"></em><span class="unvisible">facebook</span> </a></li>
                    <li><a href="#" title="Pinterest"><em class="fa fa-pinterest"></em><span class="unvisible">Pinterest</span> </a></li>
                    <li class="last"><a href="#" title="Instagram"><em class="fa fa-instagram"></em><span class="unvisible">Instagram</span> </a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- end blog-detail -->

          <div class="comments-area">
            <h4 class="title_block">Comments <span class="cm-count">(2)</span></h4>
            <ol class="comments-list">
              <li>
                <div class="comment-inner">
                  <div class="comment-head media">
                    <div class="cm-avatar pull-left">
                      <img src="img/default/avatar/avatar1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="cm-content media-body">
                      <div class="cm-meta">
                        <a class="link-author" href="#">Lunatmtn</a>
                        <span class="cm-date">Mar 2nd 2017</span>
                        <a href="#" class="reply-link"><i class="fa fa-mail-reply-all"></i>Reply</a>
                      </div>
                      <div class="cm-des">
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>
                      </div>
                    </div><!--end cm-content media-body -->
                  </div><!--end comment head -->
                </div><!--end comment inner -->
                <ol>
                  <li>
                    <div class="comment-inner">
                      <div class="comment-head media">
                        <div class="cm-avatar pull-left">
                          <img src="img/default/avatar/avatar2.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="cm-content media-body">
                          <div class="cm-meta">
                            <a class="link-author" href="#">Admin</a>
                            <span class="cm-date">Mar 2nd 2017</span>
                            <a href="#" class="reply-link"><i class="fa fa-mail-reply-all"></i>Reply</a>
                          </div>
                          <div class="cm-des">
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>
                          </div>
                        </div><!--end cm-content media-body -->
                      </div><!--end comment head -->
                    </div><!--end comment inner -->
                  </li>
                </ol>
              </li>
              <li>
                <div class="comment-inner">
                  <div class="comment-head media">
                    <div class="cm-avatar pull-left">
                      <img src="img/default/avatar/avatar1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="cm-content media-body">
                      <div class="cm-meta">
                        <a class="link-author" href="#">Nunatmtn</a>
                        <span class="cm-date">Mar 2nd 2017</span>
                        <a href="#" class="reply-link"><i class="fa fa-mail-reply-all"></i>Reply</a>
                      </div>
                      <div class="cm-des">
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum</p>
                      </div>
                    </div><!--end cm-content media-body -->
                  </div><!--end comment head -->
                </div><!--end comment inner -->
              </li>
            </ol><!--end comments lest -->
          </div><!-- end comments-area -->

          <div class="comments-form">
            <h4 class="title_block">Leave us a comment</h4>
            <p>Dont worry! Your email is always unpublic. The fields (*) is require!</p>
            <form action="#" class="form-horizontal">
              <div class="form-group">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <input type="text" class="form-control input-email" placeholder="Your Name *">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <input type="email" class="form-control" placeholder="Your email *">
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-12">
                  <textarea class="form-control" placeholder="Your comment *" ></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-12">
                  <button class="btn button btn-primary">Send message</button>
                </div>
              </div>
            </form><!--end form -->
          </div><!--end comments form -->
        </div><!-- end single-post -->
      </div><!-- end center_column -->
    </div>
  </div> <!-- end container -->
</div><!--end columns -->

@stop
