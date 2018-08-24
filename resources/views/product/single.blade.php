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
        <li><a href="page-category-left.html" title="Categories">Categories</a></li>
        <li><span>The Cottage Bouquet</span></li>
      </ul>
      <h2 class="bread-title">Product Details</h2>
    </div>
  </div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
  <!-- container -->
  <div class="container">
    <div class="row">
      <div class="pb-left-column col-xs-12 col-sm-12 col-md-5">
        <div id="image-block" class="clearfix">
          <div id="view_full_size">
            <img src="/images/{{ $flower->image1 }}" alt="{{ $flower->name }}" class="img-responsive" width="470" height="627">
          </div>
        </div><!-- end #image-block -->
        <div id="views_block" class="clearfix">
          <div id="thumbs_list">
            <ul id="thumbs_list_frame" class="list-inline">
              <li class="first">
                <img src="/images/{{ $flower->image2 }}" alt="{{ $flower->name }}" class="img-responsive" width="102" height="136">
              </li>
              <li>
                <img src="/images/{{ $flower->image3 }}" alt="{{ $flower->name }}" class="img-responsive" width="102" height="136">
              </li>
              <li>
                <img src="/images/{{ $flower->image4 }}" alt="{{ $flower->name }}" class="img-responsive" width="102" height="136">
              </li>
              <li class="last">
                <img src="/images/{{ $flower->image5 }}" alt="{{ $flower->name }}" class="img-responsive" width="102" height="136">
              </li>
            </ul>
          </div>
        </div><!-- end views_block -->
      </div><!-- end pb-left-column -->
      <div class="pb-center-column col-xs-12 col-sm-12 col-md-7">
        <div class="pb-centercolumn">
          <h1>{{ $flower->name }}</h1>
          <div class="product_comments clearfix">
            <div class="product-rating">
              <div class="star_content">
                <div class="star star_on"></div>
                <div class="star star_on"></div>
                <div class="star star_on"></div>
                <div class="star star_on"></div>
                <div class="star"></div>
              </div>
            </div>
          </div><!-- end product_comments -->
          <div class="price clearfix">
            <p class="our_price_display">
              ${{ $flower->price1 }}
            </p>
            <p class="old_price">
              ${{ $flower->price1 }}
            </p>
          </div><!-- end price -->
          <div class="product-boxinfo">
            <p id="availability_statut">
              <label>Available: </label>
              @if ($flower->stock == true)
              <span id="availability_value" class="label label-success">In stock</span>
              @else
              <span id="availability_value" class="label label-danger">Out of stock</span>
              @endif
            </p>
          </div><!-- end product-boxinfo -->
          <div id="short_description_block">
            <p>{{ $flower->dscr}}</p>
          </div><!-- end short_description_block -->
          <div class="box-info-product clearfix">
            <div id="attributes">
              <div class="attribute_fieldset clearfix">
                <label class="attribute_label">Size</label>
                <div class="attribute_list">
                  <select class="form-control">
                    <option value="0">Please choose one</option>
                    <option value="1">Fresh Cut Roses</option>
                    <option value="2">Japanese Cherry Blossom</option>
                    <option value="3">Lilac Blossoms</option>
                    <option value="4">Black Raspberry Vanilla</option>
                    <option value="5">Strawberry Lemonade</option>
                  </select>
                </div>
              </div>
            </div>
            <div id="quantity_wanted_p">
              <label>Quantity</label>
              <div class="group-quantity">
                <a href="#" class="btn status-enable btn-sm product_quantity_down">
                  <i class="fa fa-caret-down"></i>
                </a>
                <input type="number" min="1" name="qty" id="quantity_wanted" class="text form-control" value="1">
                <a href="#" class="btn status-enable btn-sm product_quantity_down">
                  <i class="fa fa-caret-up"></i>
                </a>
              </div>
            </div>
          </div><!-- end box-info-product -->
          <div class="box-cart-bottom clearfix">
            <button id="add_to_cart" type="submit" name="Submit" class="exclusive btn button btn-primary" title="Add to cart">
              Add to cart
            </button>
            <a class="btn button" id="wishlist_button" title="Add to wishlist">Add to wishlist</a>
          </div><!-- end box-cart-bottom -->
          <div class="share-social">
            <span>Share:</span>
            <ul class="links list-inline">
              <li><a href="#"><em class="fa fa-facebook"></em></a></li>
              <li><a href="#"><em class="fa fa-twitter"></em></a></li>
              <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
              <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
              <li><a href="#"><em class="fa fa-pinterest"></em></a></li>
              <li class="last"><a href="#"><em class="fa fa-instagram"></em></a></li>
            </ul>
          </div><!-- end share-social -->
        </div><!-- end pb-centercolumn -->
      </div><!-- end pb-center-column -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="tabs-top accordion-info">
          <ul id="myTabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
            <li role="presentation"><a href="#additional-info" aria-controls="additional-info" role="tab" data-toggle="tab">Additional infomation</a></li>
            <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
          </ul>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="description">
              <div class="panel-body">
                <p>Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. Always remember in the jungle there’s a lot of they in there, after you overcome they, you will make it to paradise.</p>
                <p>I told you all this before, when you have a swimming pool, do not use chlorine, use salt water, the healing, salt water is the healing. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. You see that bamboo behind me though, you see that bamboo? Ain’t nothin’ like bamboo. Bless up. Let me be clear, you have to make it through the jungle to make it to paradise, that’s the key, Lion! Always remember in the jungle there’s a lot of they in there, after you overcome they, you will make it to paradise.</p>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="additional-info">
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <tbody>
                      <tr class="odd">
                        <td>Compositions</td>
                        <td>Cotton</td>
                      </tr>
                      <tr class="even">
                        <td>Styles</td>
                        <td>Casual</td>
                      </tr>
                      <tr class="odd">
                        <td>Properties</td>
                        <td>Short Sleeve</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="reviews">
              <div class="panel-body">
                <div class="comments-review">
                  <div class="comments-list">
                    <div class="media comments">
                      <div class="pull-left">
                        <p class="avatar">
                          <img src="images/default/avatar/avatar1.jpg" alt="" width="70" height="70">
                        </p>
                        <div class="star_content">
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                        </div>
                        <p class="author">Tiva</p>
                      </div>
                      <div class="media-body">
                        <p class="comment-datetime">June 17, 2017</p>
                        <div class="comment-desc">Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. </div>
                      </div>
                    </div>
                  </div>
                  <div class="comments-list">
                    <div class="media comments">
                      <div class="pull-left">
                        <p class="avatar">
                          <img src="/images/default/avatar/avatar2.jpg" alt="" width="70" height="70">
                        </p>
                        <div class="star_content clearfix">
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                        </div>
                        <p class="author">Tiva</p>
                      </div>
                      <div class="media-body">
                        <p class="comment-datetime">June 17, 2017</p>
                        <div class="comment-desc">Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. </div>
                      </div>
                    </div>
                  </div>
                  <div class="review-form">
                    <h4 class="title_block">Write a review</h4>
                    <div class="reviews">
                      <form id="form_review" action="/vietnam-tours" method="post" class="form-validate width_common">
                        <div class="form-group">
                          <label>You rate</label>
                          <div class="star_content clearfix">
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>You review<sup class="required">*</sup></label>
                          <textarea id="comment" name="comment" cols="45" rows="6" aria-required="true"></textarea>
                        </div>
                        <div class="form-group btn-send">
                          <button class="btn btn-default">Send your review</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- end tab-content -->
        </div><!-- end  accordion-info-->
      </div>
    </div><!-- end row -->
    <div class="blockproductscategory block">
      <h4 class="title_block">Related Products</h4>
      <div class="block_content">
        <div class="owl-row">
          <div class="blockproductscategory_grid">
            <div class="item">
              <div class="product-container">
                <div class="left-block">
                  <div class="product-image-container">
                    <a class="product_img_link" href="page-detail.html" title="Tulipa floriade - red">
                      <img src="/images/product/1.jpg" alt="Tulipa floriade - red" class="img-responsive image-effect" width="480" height="640">
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
            <div class="item">
              <div class="product-container">
                <div class="left-block">
                  <div class="product-image-container">
                    <a class="product_img_link" href="page-detail.html" title="Queen rose - yellow">
                      <img src="/images/product/2.jpg" alt="Queen rose - yellow" class="img-responsive image-no-effect" width="480" height="640">
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
            <div class="item">
              <div class="product-container">
                <div class="left-block">
                  <div class="product-image-container">
                    <a class="product_img_link" href="page-detail.html" title="Flowers Bouquet - pink">
                      <img src="/images/product/3.jpg" alt="Flowers Bouquet - pink" class="img-responsive image-effect" width="480" height="640">
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
            <div class="item">
              <div class="product-container">
                <div class="left-block">
                  <div class="product-image-container">
                    <a class="product_img_link" href="page-detail.html" title="Tulipa floriade - yellow">
                      <img src="/images/product/4.jpg" alt="Tulipa floriade - yellow" class="img-responsive image-effect" width="480" height="640">
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
            <div class="item">
              <div class="product-container">
                <div class="left-block">
                  <div class="product-image-container">
                    <a class="product_img_link" href="page-detail.html" title="Queen rose">
                      <img src="/images/product/5.jpg" alt="Queen rose" class="img-responsive image-effect" width="480" height="640">
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
                      <a class="product-name" href="page-detail.html" title="Queen rose">
                        Queen rose
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
        </div><!-- end blockproductscategory_grid -->
        </div><!-- end tabproduct-carousel -->
      </div>
    </div><!-- end blockproductscategory -->
  </div> <!-- end container -->
</div><!--end warp-->

@stop
