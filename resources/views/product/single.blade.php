@section('title', "$flower->name")
@section('dscr', "$flower->dscr")
@section('keywords', '')

@extends('main')

@section ('extrahead')
<meta property="og:type" content="product" />
<meta property="og:title" content="{{ $flower->name }}" />
<meta property="og:description" content="{{ $flower->dscr }}" />
<meta property="og:url" content="{{ url()->current() }}"/>
<meta property="og:site_name" content="Fancy Flowers" />
<meta property="product:price:amount" content="{{ $flower->price1 }}" />
<meta property="product:price:currency" content="USD" />
<meta property="og:availability" content="instock" />


@stop

@section('content')
<div id="breadcrumb" class="clearfix">
  <div class="container">
    <div class="breadcrumb clearfix">
      <ul class="ul-breadcrumb">
        <li><a href="/" title="Home">Home</a></li>
        <li><a href="page-category-left.html" title="Categories">Categories</a></li>
        <li><span>{{ $flower->name }}</span></li>
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
            <img src="/images/product/{{ $flower->image1 }}" alt="{{ $flower->name }}" class="img-responsive" width="470" height="627">
          </div>
        </div><!-- end #image-block -->
        <div id="views_block" class="clearfix">
          <div id="thumbs_list">
            <ul id="thumbs_list_frame" class="list-inline">
              <li class="first">
                <img src="/images/product/{{ $flower->image2 }}" alt="{{ $flower->name }}" class="img-responsive" width="102" height="136">
              </li>
              <li>
                <img src="/images/product/{{ $flower->image3 }}" alt="{{ $flower->name }}" class="img-responsive" width="102" height="136">
              </li>
              <li>
                <img src="/images/product/{{ $flower->image4 }}" alt="{{ $flower->name }}" class="img-responsive" width="102" height="136">
              </li>
              <li class="last">
                <img src="/images/product/{{ $flower->image5 }}" alt="{{ $flower->name }}" class="img-responsive" width="102" height="136">
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
                    <option value="0">{{ $flower->price1name }}</option>
                    <option value="0">{{ $flower->price2name }}</option>
                    <option value="0">{{ $flower->price3name }}</option>
                  </select>
                </div>
              </div>
            </div>
          </div><!-- end box-info-product -->
          <div class="box-cart-bottom clearfix">
            <form action="{{ route('cart.store') }}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{ $flower->id }}">
              <input type="hidden" name="name" value="{{ $flower->name }}">
              <input type="hidden" name="price1" value="{{ $flower->price1 }}">
              <button id="add_to_cart" type="submit" class="exclusive btn button btn-primary" title="Add to cart">
                Add to cart
              </button>
            </form>


          </div><!-- end box-cart-bottom -->
          <div class="share-social">
            <span>Share:</span>
            <ul class="links list-inline">
              <li><a href="https://www.facebook.com/sharer.php?u={{ urlencode(Request::fullUrl()) }}"><em class="fa fa-facebook"></em></a></li>
              <li><a href="https://twitter/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"><em class="fa fa-twitter"></em></a></li>
              <li><a href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}"><em class="fa fa-google-plus"></em></a></li>
              <!--<li><a href="#"><em class="fa fa-linkedin"></em></a></li>-->
              <li><a href="http://pinterest.com/pin/create/button/?url={{ urlencode(Request::fullUrl()) }}"><em class="fa fa-pinterest"></em></a></li>
            </ul>
          </div><!-- end share-social -->
        </div><!-- end pb-centercolumn -->
      </div><!-- end pb-center-column -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="tabs-top accordion-info">
          <ul id="myTabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
            <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
          </ul>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="description">
              <div class="panel-body">
                <p>Look at the sunset, life is amazing, life is beautiful, life is what you make it. To succeed you must believe. When you believe, you will succeed. In life there will be road blocks but we will over come it. Celebrate success right, the only way, apple. The ladies always say Khaled you smell good, I use no cologne. Cocoa butter is the key. Always remember in the jungle there’s a lot of they in there, after you overcome they, you will make it to paradise.</p>
                <p>I told you all this before, when you have a swimming pool, do not use chlorine, use salt water, the healing, salt water is the healing. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. You see that bamboo behind me though, you see that bamboo? Ain’t nothin’ like bamboo. Bless up. Let me be clear, you have to make it through the jungle to make it to paradise, that’s the key, Lion! Always remember in the jungle there’s a lot of they in there, after you overcome they, you will make it to paradise.</p>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="reviews">
              <div class="panel-body">
                <div class="comments-review">
                  @foreach ($flower->ratings as $rating)
                  <div class="comments-list">
                    <div class="media comments">
                      <div class="pull-left">
                        <p class="author">{{$rating->user->firstname}}</p>
                        <div class="star_content clearfix">
                          @if( $rating->rating > 4.5 )
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          @elseif( $rating->rating > 3.5 && $flower->averageRating < 4.5)
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          <div class="star"></div>
                          @elseif( $rating->rating > 2.5 && $flower->averageRating < 3.5 )
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          <div class="star"></div>
                          <div class="star"></div>
                          @elseif( $rating->rating > 1.5 && $flower->averageRating < 2.5 )
                          <div class="star star_on"></div>
                          <div class="star star_on"></div>
                          <div class="star"></div>
                          <div class="star"></div>
                          <div class="star"></div>
                          @elseif( $rating->rating < 1.5)
                          <div class="star star_on"></div>
                          <div class="star"></div>
                          <div class="star"></div>
                          <div class="star"></div>
                          <div class="star"></div>
                          @endif
                        </div>
                      </div>
                      <div class="media-body">
                        <p class="comment-datetime">{{ Carbon\Carbon::parse($rating->created_at)->format('M, d Y') }}</p>
                        <div class="comment-desc">{{ $rating->comment }}</div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  @if (Auth::check())
                    @if (empty($rating))
                      <div class="review-form">
                        <h4 class="title_block">Write a review</h4>
                        <div class="reviews">
                          <form id="form_review" action="{{ route('posts.post') }}" method="post" class="form-validate width_common">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label>You rate</label>
                              <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $flower->userAverageRating }}" data-size="xs">
                              </div>
                            </div>
                            <div class="form-group">
                              <label>You review<sup class="required">*</sup></label>
                              <textarea id="comment" name="comment" cols="45" rows="6" aria-required="true"></textarea>
                              <input type="hidden" name="id" required="" value="{{ $flower->id }}">
                            </div>
                            <div class="form-group btn-send">
                              <button class="btn btn-default">Send your review</button>
                            </div>
                          </form>
                        </div>
                        @else
                          @if (Auth::id() != $rating->user_id)
                          <div class="review-form">
                            <h4 class="title_block">Write a review</h4>
                            <div class="reviews">
                              <form id="form_review" action="{{ route('posts.post') }}" method="post" class="form-validate width_common">
                                {{ csrf_field() }}
                                <div class="form-group">
                                  <label>You rate</label>
                                  <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $flower->userAverageRating }}" data-size="xs">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>You review<sup class="required">*</sup></label>
                                  <textarea id="comment" name="comment" cols="45" rows="6" aria-required="true"></textarea>
                                  <input type="hidden" name="id" required="" value="{{ $flower->id }}">
                                </div>
                                <div class="form-group btn-send">
                                  <button class="btn btn-default">Send your review</button>
                                </div>
                              </form>
                            </div>
                          @endif
                        @endif
                    @else
                    <div class="text-center">
                      Only authorised users can leave a review<br>
                      <a href="/login" class="btn btn-primary btn-raised">Login</a>
                    </div>
                    @endif
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
            	@foreach ($related as $flower)
            <div class="item">
              <div class="product-container">
                <div class="left-block">
                  <div class="product-image-container">
                    <a class="product_img_link" href="/product/{{ $flower->slug }}" title="Tulipa floriade - red">
                      <img src="images/product/{{ $flower->image1 }}" alt="{{ $flower->name }}" class="img-responsive image-effect" width="480" height="640">
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
        </div><!-- end blockproductscategory_grid -->
        </div><!-- end tabproduct-carousel -->
      </div>
    </div><!-- end blockproductscategory -->
  </div> <!-- end container -->
</div><!--end warp-->
@stop
