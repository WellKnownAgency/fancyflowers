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
              <li>
                <div class="media">
                  <div class="post-image pull-left">
                    <a href="page-blog-left-detail.html">
                      <img class="img-responsive" src="img/blog/870x578/2.jpg" alt="" width="90" height="54">
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
                      <img class="img-responsive" src="img/blog/870x578/3.jpg" alt="" width="90" height="54">
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
                      <img class="img-responsive" src="img/blog/870x578/4.jpg" alt="" width="90" height="54">
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
                      <img class="img-responsive" src="img/blog/870x578/5.jpg" alt="" width="90" height="54">
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
      </div><!-- end left_column -->
      <div id="center_column" class="col-lg-9 col-md-9">
        <div class="single-post">
          <div class="blog-detail">
            <div class="blog-image">
              <img src="img/blog/870x578/1.jpg" alt="" class="img-responsive">
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
            <h1 class="title_block">Nullam ullamcorper nisl quis ornare molestie</h1>
            <div class="post-content">
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
              </p>
            </div>
            <div class="post-tag clearfix">
              <div class="post-tag-lr post-tag-left">
                <strong>Tags:</strong>
                <a href="#" title="Flower leis">Flower leis</a>
                <a href="#" title="Graduation">Graduation</a>
                <a href="#" title="Lei">Lei</a>
                <a href="#" title="Meagan bowman">Meagan bowman</a>
              </div>
              <div class="post-tag-lr post-tag-right">
                <div class="social_block">
                  <ul class="links">
                    <li><a href="#" title="Facebook"><em class="fa fa-facebook"></em><span class="unvisible">facebook</span> </a></li>
                    <li><a href="#" title="Twitter"><em class="fa fa-twitter"></em><span class="unvisible">Twitter</span> </a></li>
                    <li><a href="#" title="Google"><em class="fa fa-google-plus"></em><span class="unvisible">goGoogleogle</span> </a></li>
                    <li><a href="#" title="Linkedin"><em class="fa fa-linkedin"></em><span class="unvisible">Linkedin</span> </a></li>
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
