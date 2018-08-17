@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('main')

@section('content')
<div class="tiva-slideshow-wrapper">
  <div id="tiva-slideshow" class="nivoSlider">
    <a href="#" title="Slideshow image"><img class="img-responsive" src="img/slide/slide1-h1.jpg" title="#caption1" alt="Slideshow image"></a>
    <a href="#" title="Slideshow image"><img class="img-responsive" src="img/slide/slide2-h1.jpg" title="#caption2" alt="Slideshow image"></a>
  </div>

  <div id="caption1" class="nivo-html-caption">
    <div class="tiva-caption">
      <div class="left-right hidden-xs medium_yellow_16"><span>Accessories</span></div>
      <div class="left-right hidden-xs normal very_large_60">Floral headband</div>
      <div class="left-right  hidden-md hidden-sm hidden-xs slow medium_16">when an unknown printer took a galley of type and scrambled it to <br>make a type specimen book. It has survived not only five centuries, <br>but also the leap into electronic typesetting, remaining.</div>
      <div class="left-right hidden-xs slow"><a class="btn button btn-now" href="#" title="Shop now">Shop now</a></div>
    </div>
  </div>
  <div id="caption2" class="nivo-html-caption">
    <div class="tiva-caption">
      <div class="left-right hidden-xs medium_yellow_16"><span>Accessories</span></div>
      <div class="left-right hidden-xs normal very_large_60">Floral headband</div>
      <div class="left-right  hidden-md hidden-sm hidden-xs slow medium_16">when an unknown printer took a galley of type and scrambled it to <br>make a type specimen book. It has survived not only five centuries, <br>but also the leap into electronic typesetting, remaining.</div>
      <div class="left-right hidden-xs slow"><a class="btn button btn-now" href="#" title="Shop now">Shop now</a></div>
    </div>
  </div>
</div><!-- end tiva-slideshow-wrapper -->

<div id="columns" class="columns-container">
  <div class="section section-banner">
    <div class="container">
      <div class="tv-table block">
        <div class="tv-tablecell">
          <div class="block-html block">
            <h4>Flowers for the</h4>
            <h3>Birthday & Gifts</h3>
            <p class="block-htmldes">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <a class="button btn btn-primary" href="page-category-left.html" title="Shop now">Shop now</a>
          </div><!--end block-html -->
        </div>
        <div class="tv-tablecell box-image">
          <div class="banner-item effectbanner">
            <a class="image-wrap" href="#"><img class="img-responsive" src="img/banner/banner1-h1.jpg" alt=""></a>
          </div><!--end banner-item-->
        </div>
      </div>
      <div class="tv-table block">
        <div class="tv-tablecell box-image">
          <div class="banner-item effectbanner">
            <a class="image-wrap" href="#"><img class="img-responsive" src="img/banner/banner2-h1.jpg" alt=""></a>
          </div><!--end banner-item-->
        </div>
        <div class="tv-tablecell">
          <div class="block-html block">
            <h4>Flowers for the</h4>
            <h3>Wedding day</h3>
            <p class="block-htmldes">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <a class="button btn btn-primary" href="page-category-left.html" title="Shop now">Shop now</a>
          </div><!--end block-html -->
        </div>
      </div>
    </div><!-- end container -->
  </div><!-- end section-banner -->

  <div class="section section-tabsproduct">
    <div class="container">
      <!-- tabs-top -->
      <div class="tabs-top block">
        <div class="block-title">
          <h4 class="title_block">Shop By Collection</h4>
          <!-- Nav tabs -->
          <ul id="myTabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#bouquets" aria-controls="bouquets" role="tab" data-toggle="tab">Bouquets</a></li>
            <li role="presentation"><a href="#weddings" aria-controls="weddings" role="tab" data-toggle="tab">Weddings</a></li>
            <li role="presentation"><a href="#home-decor" aria-controls="home-decor" role="tab" data-toggle="tab">Home decor</a></li>
            <li role="presentation"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Popular</a></li>
          </ul>
        </div><!--end title -->

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="bouquets">
            <div class="block_content">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Tulipa floriade - red">
                          <img src="img/product/1.jpg" alt="Tulipa floriade - red" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                        <span class="label-sale label">Sale</span>
                        <span class="label-reduction label">-5%</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                            <i class="zmdi zmdi-eye"></i>
                          </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Tulipa floriade - red">
                            Tulipa floriade - red
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$28.98</span>
                          <span class="old-price product-price">$30.51</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Queen rose - yellow">
                          <img src="img/product/2.jpg" alt="Queen rose - yellow" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                          <i class="zmdi zmdi-eye"></i>
                        </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Queen rose - yellow">
                            Queen rose - yellow
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$98.98</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Flowers Bouquet - pink">
                          <img src="img/product/3.jpg" alt="Flowers Bouquet - pink" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                          <i class="zmdi zmdi-eye"></i>
                        </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Flowers Bouquet - pink">
                            Flowers Bouquet - pink
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$68.68</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Tulipa floriade - yellow">
                          <img src="img/product/4.jpg" alt="Tulipa floriade - yellow" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                          <i class="zmdi zmdi-eye"></i>
                        </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Tulipa floriade - yellow">
                            Tulipa floriade - yellow
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$56.28</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Queen rose - pink">
                          <img src="img/product/5.jpg" alt="Queen rose - pink" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                          <i class="zmdi zmdi-eye"></i>
                        </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Queen rose - pink">
                            Queen rose - pink
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$26.28</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Bouquet rose">
                          <img src="img/product/6.jpg" alt="Bouquet rose" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                        <span class="label-sale label">Sale</span>
                        <span class="label-reduction label">-5%</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                            <i class="zmdi zmdi-eye"></i>
                          </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Bouquet rose">
                            Bouquet rose
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$28.98</span>
                          <span class="old-price product-price">$30.51</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Bouquet lavender">
                          <img src="img/product/7.jpg" alt="Bouquet lavender" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                          <i class="zmdi zmdi-eye"></i>
                        </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Bouquet lavender">
                            Bouquet lavender
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$98.98</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Bouquet Hydrangea - white">
                          <img src="img/product/8.jpg" alt="Bouquet Hydrangea - white" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                          <i class="zmdi zmdi-eye"></i>
                        </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Bouquet Hydrangea - white">
                            Bouquet Hydrangea - white
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$68.68</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
              </div><!-- end row -->
            </div><!-- end block_content -->
          </div>
          <div role="tabpanel" class="tab-pane" id="weddings">
            <div class="block_content">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Bouquet rose">
                          <img src="img/product/6.jpg" alt="Bouquet rose" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                            <i class="zmdi zmdi-eye"></i>
                          </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Bouquet rose">
                            Bouquet rose
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$26.28</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Queen rose - pink">
                          <img src="img/product/5.jpg" alt="Queen rose - pink" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                            <i class="zmdi zmdi-eye"></i>
                          </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Queen rose - pink">
                            Queen rose - pink
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$98.98</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Bouquet lavender">
                          <img src="img/product/7.jpg" alt="Bouquet lavender" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                            <i class="zmdi zmdi-eye"></i>
                          </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Bouquet lavender">
                            Bouquet lavender
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$68.68</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Bouquet Hydrangea - white">
                          <img src="img/product/8.jpg" alt="Bouquet Hydrangea - white" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                            <i class="zmdi zmdi-eye"></i>
                          </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Bouquet Hydrangea - white">
                            Bouquet Hydrangea - white
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$56.28</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Flowers Bouquet - pink">
                          <img src="img/product/3.jpg" alt="Flowers Bouquet - pink" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                        <span class="label-sale label">Sale</span>
                        <span class="label-reduction label">-5%</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                            <i class="zmdi zmdi-eye"></i>
                          </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Flowers Bouquet - pink">
                            Flowers Bouquet - pink
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$28.98</span>
                          <span class="old-price product-price">$30.51</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Tulipa floriade - red">
                          <img src="img/product/1.jpg" alt="Tulipa floriade - red" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                            <i class="zmdi zmdi-eye"></i>
                          </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Tulipa floriade - red">
                            Tulipa floriade - red
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$68.68</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Flowers Bouquet - pink">
                          <img src="img/product/3.jpg" alt="Flowers Bouquet - pink" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                            <i class="zmdi zmdi-eye"></i>
                          </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Flowers Bouquet - pink">
                            Flowers Bouquet - pink
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$56.28</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                  <div class="product-container">
                    <div class="left-block">
                      <div class="product-image-container">
                        <a class="product_img_link" href="page-detail.html" title="Bouquet Hydrangea - violet white">
                          <img src="img/product/9.jpg" alt="Bouquet Hydrangea - violet white" class="img-responsive" width="480" height="640">
                        </a>
                        <span class="label-new label">New</span>
                        <span class="label-sale label">Sale</span>
                        <span class="label-reduction label">-5%</span>
                      </div>
                      <div class="box-buttons">
                          <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                          <a class="button btn quick-view" href="#" title="Quick view">
                            <i class="zmdi zmdi-eye"></i>
                          </a>
                          <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                            <i class="zmdi zmdi-favorite-outline"></i>
                          </a>
                          <a class="button btn add_to_compare" href="#" title="Quick view">
                            <i class="zmdi zmdi-refresh-alt"></i>
                          </a>
                      </div>
                    </div><!--end left block -->
                    <div class="right-block">
                      <div class="product-box">
                        <h5 class="name">
                          <a class="product-name" href="page-detail.html" title="Bouquet Hydrangea - violet white">
                            Bouquet Hydrangea - violet white
                          </a>
                        </h5>
                        <div class="content_price">
                          <span class="price product-price">$28.98</span>
                          <span class="old-price product-price">$30.51</span>
                        </div>
                        <div class="product_comments clearfix">
                          <div class="product-rating">
                            <div class="star_content">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                            </div>
                          </div>
                        </div><!-- end product_comments -->
                      </div><!-- end product-box -->
                    </div><!--end right block -->
                  </div><!-- end product-container-->
                </div>
              </div><!-- row -->
            </div><!-- end block_content -->
          </div>
          <div role="tabpanel" class="tab-pane" id="home-decor">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Flowers Bouquet - pink">
                        <img src="img/product/3.jpg" alt="Flowers Bouquet - pink" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                      <span class="label-sale label">Sale</span>
                      <span class="label-reduction label">-5%</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Flowers Bouquet - pink">
                          Flowers Bouquet - pink
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$28.98</span>
                        <span class="old-price product-price">$30.51</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Tulipa floriade - yellow">
                        <img src="img/product/4.jpg" alt="Tulipa floriade - yellow" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Tulipa floriade - yellow">
                          Tulipa floriade - yellow
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$98.98</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Bouquet rose">
                        <img src="img/product/6.jpg" alt="Bouquet rose" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Bouquet rose">
                          Bouquet rose
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$68.68</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Tulipa floriade - red">
                        <img src="img/product/1.jpg" alt="Tulipa floriade - red" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Tulipa floriade - red">
                          Tulipa floriade - red
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$56.28</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Bouquet lavender">
                        <img src="img/product/7.jpg" alt="Bouquet lavender" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Bouquet lavender">
                          Bouquet lavender
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$26.28</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Bouquet Hydrangea - violet white">
                        <img src="img/product/9.jpg" alt="Bouquet Hydrangea - violet white" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Bouquet Hydrangea - violet white">
                          Bouquet Hydrangea - violet white
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$68.68</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Bouquet Hydrangea - white">
                        <img src="img/product/8.jpg" alt="Bouquet Hydrangea - white" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Bouquet Hydrangea - white">
                          Bouquet Hydrangea - white
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$56.28</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Queen rose - pink">
                        <img src="img/product/5.jpg" alt="Queen rose - pink" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Queen rose - pink">
                          Queen rose - pink
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$26.28</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
            </div><!-- end row -->
          </div>
          <div role="tabpanel" class="tab-pane" id="popular">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Bouquet Hydrangea - white">
                        <img src="img/product/8.jpg" alt="Bouquet Hydrangea - white" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                      <span class="label-sale label">Sale</span>
                      <span class="label-reduction label">-5%</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Bouquet Hydrangea - white">
                          Bouquet Hydrangea - white
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$28.98</span>
                        <span class="old-price product-price">$30.51</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Queen rose - pink">
                        <img src="img/product/5.jpg" alt="Queen rose - pink" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Queen rose - pink">
                          Queen rose - pink
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$98.98</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Tulipa floriade - red">
                        <img src="img/product/1.jpg" alt="Tulipa floriade - red" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Tulipa floriade - red">
                          Tulipa floriade - red
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$68.68</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Bouquet lavender">
                        <img src="img/product/7.jpg" alt="Bouquet lavender" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Bouquet lavender">
                          Bouquet lavender
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$56.28</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Tulipa floriade - yellow">
                        <img src="img/product/4.jpg" alt="Tulipa floriade - yellow" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Tulipa floriade - yellow">
                          Tulipa floriade - yellow
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$26.28</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Bouquet rose">
                        <img src="img/product/6.jpg" alt="Bouquet rose" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Bouquet rose">
                          Bouquet rose
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$68.68</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Bouquet Hydrangea - white">
                        <img src="img/product/8.jpg" alt="Bouquet Hydrangea - white" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Bouquet Hydrangea - white">
                          Bouquet Hydrangea - white
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$56.28</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-sp-12">
                <div class="product-container">
                  <div class="left-block">
                    <div class="product-image-container">
                      <a class="product_img_link" href="page-detail.html" title="Bouquet Hydrangea - violet white">
                        <img src="img/product/9.jpg" alt="Bouquet Hydrangea - violet white" class="img-responsive" width="480" height="640">
                      </a>
                      <span class="label-new label">New</span>
                    </div>
                    <div class="box-buttons">
                      <a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
                      <a class="button btn quick-view" href="#" title="Quick view">
                        <i class="zmdi zmdi-eye"></i>
                      </a>
                      <a class="button btn addToWishlist" href="#" title="Add to my wishlist">
                        <i class="zmdi zmdi-favorite-outline"></i>
                      </a>
                      <a class="button btn add_to_compare" href="#" title="Quick view">
                        <i class="zmdi zmdi-refresh-alt"></i>
                      </a>
                    </div>
                  </div><!--end left block -->
                  <div class="right-block">
                    <div class="product-box">
                      <h5 class="name">
                        <a class="product-name" href="page-detail.html" title="Bouquet Hydrangea - violet white">
                          Bouquet Hydrangea - violet white
                        </a>
                      </h5>
                      <div class="content_price">
                        <span class="price product-price">$26.28</span>
                      </div>
                      <div class="product_comments clearfix">
                        <div class="product-rating">
                          <div class="star_content">
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                            <div class="star star_on"></div>
                          </div>
                        </div>
                      </div><!-- end product_comments -->
                    </div><!-- end product-box -->
                  </div><!--end right block -->
                </div><!-- end product-container-->
              </div>
            </div><!-- end row -->
          </div>
        </div>
      </div><!-- end tabs-top -->
    </div><!-- end container -->
  </div><!-- end section-tabsproduct -->

  <div class="section section-newsletter">
    <div class="container">
      <!-- start newsletter -->
      <div class="block-newsletter" id="block-newsletter">
        <h4 class="title_block">Sign up for the newsletter</h4>
        <p class="descript">Sign up for our mailing list to get latest updates and offers</p>
        <form action="#" method="post" class="form-inline">
          <div class="form-group">
            <input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" placeholder="Enter your email...">
            <button type="submit" name="submitNewsletter" class="btn-primary btn button button-small">
              <span class="submit-icon"></span>
              <span class="submit-text">Subscribe</span>
            </button>
          </div>
        </form>
      </div><!-- end block-newsletter -->
    </div>
  </div><!-- end section section-newsletter -->

  <section class="section section-gallery">
    <div class="container">
      <div class="block-gallery block">
        <h4 class="title_block">Gallery</h4>
        <p class="des-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ut labore et dolore</p>
        <div class="block_content">
          <div class="row no-gutters">
            <div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-4">
              <a href="img/gallery/1.jpg"><img class="img-responsive" src="img/gallery/1.jpg" alt=""></a>
            </div>
            <div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-4">
              <a href="img/gallery/2.jpg"><img class="img-responsive" src="img/gallery/2.jpg" alt=""></a>
            </div>
            <div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-4">
              <a href="img/gallery/3.jpg"><img class="img-responsive" src="img/gallery/3.jpg" alt=""></a>
            </div>
            <div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-4">
              <a href="img/gallery/4.jpg"><img class="img-responsive" src="img/gallery/4.jpg" alt=""></a>
            </div>
            <div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-4">
              <a href="img/gallery/5.jpg"><img class="img-responsive" src="img/gallery/5.jpg" alt=""></a>
            </div>
            <div class="image-item col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sp-4">
              <a href="img/gallery/6.jpg"><img class="img-responsive" src="img/gallery/6.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div><!-- end block-gallery -->
    </div><!-- end container -->
  </section><!-- end section-gallery -->
</div><!--end columns -->
@stop
