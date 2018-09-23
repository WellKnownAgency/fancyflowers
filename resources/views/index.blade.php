@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('main')

@section('content')
<div class="tiva-slideshow-wrapper">
  <div id="tiva-slideshow" class="nivoSlider">
    <a href="#" title="Slideshow image"><img class="img-responsive" src="images/slide/slide1-h10.jpg" title="#caption1" alt="Slideshow image"></a>
    <a href="#" title="Slideshow image"><img class="img-responsive" src="images/slide/slide2-h11.jpg" title="#caption2" alt="Slideshow image"></a>
  </div>

  <div id="caption1" class="nivo-html-caption">
    <div class="tiva-caption">
      <div class="left-right hidden-xs medium_yellow_16"><span>Accessories</span></div>
      <div class="left-right hidden-xs normal very_large_60">TEstint</div>
      <div class="left-right  hidden-md hidden-sm hidden-xs slow medium_16">when an unknown printer took a galley of type and scrambled it to <br>make a type specimen book. It has survived not only five centuries, <br>but also the leap into electronic typesetting, remaining.</div>
      <div class="left-right hidden-xs slow"><a class="btn button btn-primary" href="collections/all" title="Shop now">Shop now</a></div>
    </div>
  </div>
  <div id="caption2" class="nivo-html-caption">
    <div class="tiva-caption">
      <div class="left-right hidden-xs medium_yellow_16"><span>Accessories</span></div>
      <div class="left-right hidden-xs normal very_large_60">Floral headband</div>
      <div class="left-right  hidden-md hidden-sm hidden-xs slow medium_16">when an unknown printer took a galley of type and scrambled it to <br>make a type specimen book. It has survived not only five centuries, <br>but also the leap into electronic typesetting, remaining.</div>
      <div class="left-right hidden-xs slow"><a class="btn button btn-primary" href="collections/all" title="Shop now">Shop now</a></div>
    </div>
  </div>
</div><!-- end tiva-slideshow-wrapper -->

<div id="columns" class="columns-container">
  <div class="section section-tabsproduct">
    <div class="container">
      <!-- tabs-top -->
      <div class="tabs-top block">
        <div class="block-title">
          <h4 class="title_block">Shop By Collection</h4>
          <br>
        </div><!--end title -->

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="bouquets">
            <div class="block_content">
              <div class="row">
                @foreach($flowers as $flower)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="/product/{{ $flower->slug }}" title="Tulipa floriade - red">
                          <img src="/images/product/{{ $flower->image1 }}" alt="{{ $flower->name }}" class="img-responsive" width="480" height="640">
                        </a>
                        @if($flower->new == '1')
                        <span class="label-new label">New</span>
                        <span class="label-sale label">Sale</span>
                        <span class="label-reduction label">-5%</span>
                        @else
                        <span class="label-sale label" style="top: 15;">Sale</span>
                        <span class="label-reduction label">-5%</span>
                        @endif
                      </div>
                      <div class="box-buttons">
                        <form action="{{ route('cart.store') }}" method="POST">
                          {{ csrf_field() }}
                          <input type="hidden" name="id" value="{{ $flower->id }}">
                          <input type="hidden" name="name" value="{{ $flower->name }}">
                          <input type="hidden" name="price1" value="{{ $flower->price1 }}">
                          <button type="submit" class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></button>
                        </form>
                          <a class="button btn quick-view" href="/product/{{ $flower->slug }}" title="Quick view">
                            <i class="zmdi zmdi-eye"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="/product/{{ $flower->slug }}" title="Tulipa floriade - red">
                            {{ $flower->name }}
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">${{ $flower->price1 }}</span>
                          <span class="old-price product-price">${{ $flower->price1 }}</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              @if( $flower->averageRating > 4.5 )
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              @elseif( $flower->averageRating > 3.5 && $flower->averageRating < 4.5)
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star"></div>
                              @elseif( $flower->averageRating > 2.5 && $flower->averageRating < 3.5 )
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star"></div>
                              <div class="star"></div>
                              @elseif( $flower->averageRating > 1.5 && $flower->averageRating < 2.5 )
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star"></div>
                              <div class="star"></div>
                              <div class="star"></div>
                              @elseif( $flower->averageRating < 1.5)
                              <div class="star star_on"></div>
                              <div class="star"></div>
                              <div class="star"></div>
                              <div class="star"></div>
                              <div class="star"></div>
                              @endif
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
                @endforeach
            </div><!-- end row -->
          </div>
        </div>
      </div><!-- end tabs-top -->
    </div><!-- end container -->
  </div><!-- end section-tabsproduct -->

  <div class="section section-servies">
    <div class="services-items">
      <div class="row no-gutters">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-sp-12">
          <div class="services-item services-item1">
            <div class="media">
              <div class="icon-box">
                <i class="zmdi zmdi-truck"></i>
              </div>
              <div class="media-body">
                <h4><a title="Free shipping" href="#">Free shipping</a></h4>
                <p>Guaranteed delivery in 3 days</p>
              </div>
            </div>
          </div><!--end services-item-->
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-sp-12">
          <div class="services-item services-item2">
            <div class="media">
              <div class="icon-box">
                <i class="zmdi zmdi-mail-reply-all"></i>
              </div>
              <div class="media-body">
                <h4><a title="Exchanges & returns" href="#">Exchanges & returns</a></h4>
                <p>100% money back within 30 days</p>
              </div>
            </div>
          </div><!--end services-item-->
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-sp-12">
          <div class="services-item services-item3">
            <div class="media">
              <div class="icon-box">
                <i class="zmdi zmdi-comments"></i>
              </div>
              <div class="media-body">
                <h4><a title="Online support" href="#">Online support</a></h4>
                <p>Live chat or call us 24/7</p>
              </div>
            </div>
          </div><!--end services-item-->
        </div>
      </div>
    </div><!-- end services-items -->
  </div><!-- end section-servies -->

  <div class="section section-banner">
    <div class="container">
      <div class="block-shadow">
      <div class="tv-table block">
        <div class="tv-tablecell">
          <div class="block-html block">
            <h4></h4>
            <h3>Flower Composition</h3>
            <p class="block-htmldes">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <a class="button btn btn-primary" href="/collections/compositions" title="Shop now">Shop now</a>
          </div><!--end block-html -->
        </div>
        <div class="tv-tablecell box-image">
          <div class="banner-item effectbanner">
            <a class="image-wrap" href="#"><img class="img-responsive" src="/images/banner/birthandgifts.jpg" alt=""></a>
          </div><!--end banner-item-->
        </div>
      </div>
      <div class="tv-table block">
        <div class="tv-tablecell box-image">
          <div class="banner-item effectbanner">
            <a class="image-wrap" href="#"><img class="img-responsive" src="/images/banner/weddingday.jpg" alt=""></a>
          </div><!--end banner-item-->
        </div>
        <div class="tv-tablecell">
          <div class="block-html block">
            <h4></h4>
            <h3>Thank You</h3>
            <p class="block-htmldes">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <a class="button btn btn-primary" href="/collections/thank-you" title="Shop now">Shop now</a>
          </div><!--end block-html -->
        </div>
      </div>
    </div>
    </div><!-- end container -->
  </div><!-- end section-banner -->

  <div class="section section-posts">
    <div class="container">
      <div class="tiva-postslist">
        <h4 class="title_block">Latest blog posts</h4>
        <div class="des-text">
          <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
        </div>
        <div class="block_content">
          <div class="postslist-owlcaousel owl-carousel">
            @foreach ($posts as $post)
            <div class="item">
              <div class="post-container">
                <div class="post-image">
                  <a href="/blog/{{$post->slug}}">
                    <img src="/images/blog/{{$post->image}}" alt="{{$post->title}}" class="img-responsive">
                  </a>
                  <span class="post-date"><span class="month">{{ Carbon\Carbon::parse($post->created_at)->format('M') }}</span><br><span class="day">{{ Carbon\Carbon::parse($post->created_at)->format('d') }}</span></span>
                </div>
                <div class="post-content">
                  <h4><a href="/blog/{{$post->slug}}" title="{{$post->title}}">{{$post->title}}</a></h4>
                  <div class="post-meta">
                    <div class="post-meta-lr post-meta-left">
                      <span class="post-comment">By FancyFlowers</span>
                    </div><!-- end post-meta-left -->
                  </div><!-- end post-meta -->
                  <div class="des">{{ str_limit($post->excerpt, 50, '') }}</div>
                </div><!-- end post-content -->
              </div><!-- end post-container -->
            </div><!-- end item -->
            @endforeach
          </div><!-- end postslist-owlcaousel -->
        </div><!-- end bock_content -->
      </div><!-- end tiva-postslist -->
    </div><!-- end container -->
  </div><!-- end section-posts -->

  <section class="section section-gallery">
    <div class="container">
      <div class="block-gallery block">
        <h4 class="title_block">Instagram</h4>
        <p class="des-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore</p>
        <div class="block_content">
          <div class="row no-gutters">
            <div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-4">
              <a href="/images/gallery/1.jpg"><img class="img-responsive" src="images/gallery/1.jpg" alt=""></a>
            </div>
            <div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-4">
              <a href="/images/gallery/2.jpg"><img class="img-responsive" src="images/gallery/2.jpg" alt=""></a>
            </div>
            <div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-4">
              <a href="/images/gallery/3.jpg"><img class="img-responsive" src="images/gallery/3.jpg" alt=""></a>
            </div>
            <div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-4">
              <a href="/images/gallery/4.jpg"><img class="img-responsive" src="images/gallery/4.jpg" alt=""></a>
            </div>
            <div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-4">
              <a href="/images/gallery/5.jpg"><img class="img-responsive" src="images/gallery/5.jpg" alt=""></a>
            </div>
            <div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-4">
              <a href="/images/gallery/6.jpg"><img class="img-responsive" src="images/gallery/6.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div><!-- end block-gallery -->
    </div><!-- end container -->
  </section><!-- end section-gallery -->
</div><!--end columns -->
@stop
