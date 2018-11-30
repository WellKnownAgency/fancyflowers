@section('title', 'Fancy Flowers - Philadelphia Flower Delivery')
@section('dscr', 'FREE SAME-DAY flowers delivery in Philadelphia area. Find flower bouquets collections for different ocassions.')
@section('keywords', '')



@extends('main')

@section('content')
<div class="tiva-slideshow-wrapper">
  <div id="tiva-slideshow" class="nivoSlider">
    <a href="" title="Fancy Flowers"><img class="img-responsive" src="images/slide/slide1-h13.jpg" title="#caption1" alt="Fancy Flowers"></a>
    <a href="" title="Fancy Flowers"><img class="img-responsive" src="images/slide/slide1-h10.jpg" title="#caption2" alt="Flower Delivery"></a>
  </div>

  <div id="caption1" class="nivo-html-caption">
    <div class="tiva-caption">
      <!--<div class="left-right hidden-xs medium_yellow_16"><span>Accessories</span></div>-->
      <div class="left-right hidden-xs normal very_large_60">Fancy Flowers</div>
      <div class="left-right  hidden-md hidden-sm hidden-xs slow medium_16">We are sure that the style is in every detail: <br>
        talented florists, beautiful fresh flowers,
stylish packing material,<br>  and attentive attitudes toward each client.</div>
      <div class="left-right hidden-xs slow"><a class="btn button btn-primary" href="collections/all" title="Shop now">Shop now</a></div>
    </div>
  </div>
  <div id="caption2" class="nivo-html-caption">
    <div class="tiva-caption">
      <!--<div class="left-right hidden-xs medium_yellow_16"><span>Accessories</span></div>-->
      <div class="left-right hidden-xs normal very_large_60">Fancy Flowers</div>
      <div class="left-right  hidden-md hidden-sm hidden-xs slow medium_16">Our floral company is glad to create and deliver exclusive<br>gorgeous bouquets for you. Our flowers are always fresh and beautiful. <br>Make the best present you can by ordering flowers at fflowers.com </div>
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
          <h1 class="title_block">Fancy Flowers Delivery Philadelphia</h1>
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
                          @if($flower->isNew())
                              <span class="label-new label">New</span>
                          @endif
                          @if($flower->isSale())
                              <span class="label-sale label">Sale</span>
                              <span class="label-reduction label">-{{$flower->sale}}%</span>
                          @endif
                      </div>
                      <div class="box-buttons">
                        <form action="{{ route('cart.store') }}" method="POST">
                          {{ csrf_field() }}
                          <input type="hidden" name="id" value="{{ $flower->id }}">
                          <input type="hidden" name="name" value="{{ $flower->name }}">
                            <input type="hidden" name="price" value="{{ $flower->price_new_default }}">
                            <input type="hidden" name="price_old" value="{{ $flower->price_old_default }}">
                          <input type="hidden" name="size" value="{{ \App\FLSize::getSizeDefaultId() }}">
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
                            <span class="price product-price">${{ $flower->price_new_default }}</span>
                            @if($flower->isSale())
                                <span class="old-price product-price">${{ $flower->price_old_default }}</span>
                            @endif
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              @if( empty($flower->averageRating) )
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              @elseif( $flower->averageRating > 4.5 )
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
                <h4><a title="Free shipping" href="/shipping">Free shipping</a></h4>
                <p>Guaranteed delivery in same day</p>
              </div>
            </div>
          </div><!--end services-item-->
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-sp-12">
          <div class="services-item services-item2">
            <div class="media">
              <div class="icon-box">
                <i class="zmdi zmdi-flower-alt"></i>
              </div>
              <div class="media-body">
                <h4><a title="Exchanges & returns" href="/contact-us">Customized Orders</a></h4>
                <p>Contact Us to Create Your Customized Bouquet</p>
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
                <h4><a title="Online support" href="/contact-us">Online support</a></h4>
                <p>Text or call us 24/7</p>
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
            <p class="custom-h3">Congratulations</p>
            <p class="block-htmldes">Flowers from "Congratulations" symbolize the wish of happiness, joy, love, and success! Choose your gift and present your friendship and love, and let Fancy Flowers take care of all the services to the final destination with total satisfaction and convinience to the customer. This is one of the most beautiful ways to send Congratulations. </p>
            <a class="button btn btn-primary" href="/collections/congratulation" title="Shop now">Shop now</a>
          </div><!--end block-html -->
        </div>
        <div class="tv-tablecell box-image">
          <div class="banner-item effectbanner">
            <a class="image-wrap" href="/collections/congratulation"><img class="img-responsive" src="/images/banner/congratulations.jpg" alt=""></a>
          </div><!--end banner-item-->
        </div>
      </div>
      <div class="tv-table block">
        <div class="tv-tablecell box-image">
          <div class="banner-item effectbanner">
            <a class="image-wrap" href="/collections/birthday"><img class="img-responsive" src="/images/banner/birthday.jpg" alt=""></a>
          </div><!--end banner-item-->
        </div>
        <div class="tv-tablecell">
          <div class="block-html block">
            <p class="custom-h3">Birthday</p>
            <p class="block-htmldes">A birthday is a special day of every person. Men and women, boys and girls are waiting for congratulations and gifts. If you want to make this day unforgettable for someone you love, order a unique bouquet for him or her. Fancy Flowers will deliver the happiness in the early morning or in the late evening. </p>
            <a class="button btn btn-primary" href="/collections/birthday" title="Shop now">Shop now</a>
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
          <p></p>
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
                  <h4 class="ltr"><a href="/blog/{{$post->slug}}" title="{{$post->title}}" >{{$post->title}}</a></h4>
                  <div class="post-meta">
                    <div class="post-meta-lr post-meta-left">
                      <span class="post-comment">By Fancy Flowers</span>
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
        <p class="des-text"></p>
        <div class="block_content">
          <div class="row no-gutters">
              <div id="instafeed"></div>
          </div>
        </div>
      </div><!-- end block-gallery -->
    </div><!-- end container -->
  </section><!-- end section-gallery -->
</div><!--end columns -->
@stop
@section('customjs')
<script src="{!! asset('js/custom.js') !!}"></script>
<script src="{!! asset('js/instafeed.js') !!}"></script>
@stop
