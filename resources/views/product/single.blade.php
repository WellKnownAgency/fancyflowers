@section('title', "$flower->name")
@section('dscr', "$flower->dscr")
@section('keywords', '')

@extends('main')

@section ('extrahead')
    <meta property="og:type" content="product" />
    <meta property="og:title" content="{{ $flower->name }}" />
    <meta property="og:description" content="{{ $flower->dscr }}" />
    <meta property="og:product_link" content="{{ url()->current() }}"/>
    <meta property="og:site_name" content="Fancy Flowers" />
    <meta property="product:price:amount" content="{{ $flower->price1 }}" />
    <meta property="product:price:currency" content="USD" />
    <meta property="og:availability" content="instock" />
    <meta property="og:site_name" content="fflowers.net" />
    <style>
        .price-color {
            transition: color 0.3s;
        }
        .price-color--change {
            color: #5cb85c;
        }
    </style>
@stop

@section('content')
<div id="breadcrumb" class="clearfix breadcrumb_back">
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
      </div><!-- end pb-left-column -->
      <div class="pb-center-column col-xs-12 col-sm-12 col-md-7">
        <div id="form-flower" class="pb-centercolumn">
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
              $<span class="price-color" v-text="price">{{ $flower->price_default }}</span>
            </p>
              @if($flower->price_old_default)
                <p class="old_price">
                  $<span v-text="price_old">{{ $flower->price_old_default }}</span>
                </p>
              @endif
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
                            <select class="form-control" name="size" @change="onChangeSize($event)" v-model="size">
                                @foreach($sizes as $size)
                                    <option value="{{$size->id}}">{{$size->display_name}}</option>
                                @endforeach
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
                    <input type="hidden" name="price" value="{{ $flower->price }}" v-model="price">
                    <input type="hidden" name="price_old" value="{{ $flower->price_old }}" v-model="price_old">
                    <input type="hidden" name="size" value="{{ $flower->size }}" v-model="size">
                    <button id="add_to_cart" type="submit" class="exclusive btn button btn-primary" title="Add to cart">
                        Add to cart
                    </button>
                </form>
            </div><!-- end box-cart-bottom -->
          <div class="share-social">
            <span>Share:</span>
            <ul class="links list-inline">
              <li id="shareb"><a href="https://www.facebook.com/sharer.php?u={{ urlencode(Request::fullUrl()) }}"><em class="fa fa-facebook"></em></a></li>
              <li id="shareb"><a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"><em class="fa fa-twitter"></em></a></li>
              <li id="shareb"><a href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}"><em class="fa fa-google-plus"></em></a></li>
              <!--<li><a href="#"><em class="fa fa-linkedin"></em></a></li>-->
              <li id="shareb"><a href="http://pinterest.com/pin/create/button/?url={{ urlencode(Request::fullUrl()) }}"><em class="fa fa-pinterest"></em></a></li>
            </ul>
          </div><!-- end share-social -->
        </div><!-- end pb-centercolumn -->
      </div><!-- end pb-center-column -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="tabs-top accordion-info">
          <ul id="myTabs" class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
          </ul>
          <div class="tab-content">
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
                      <img src="/images/product/{{ $flower->image1 }}" alt="{{ $flower->name }}" class="img-responsive image-effect" width="480" height="640">
                    </a>
                    @if($flower->new == '1')
                    <span class="label-new label">New</span>
                    <span class="label-sale label">Sale</span>
                    <span class="label-reduction label">-5%</span>
                    @else
                    <span class="label-sale label" style="top: 15px;">Sale</span>
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

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.min.js"></script>

@section('customjs')
    <script>
        var vmForm = new Vue({
            el: '#form-flower',
            data: {
                price: '{{$flower->price_default}}',
                price_old: '{{$flower->price_old_default}}',
                size: null
            },
            methods: {
                onChangeSize: function(e)
                {
                    window.$('#add_to_cart').attr('disabled', 'disabled');
                    axios.get('/product/{{$flower->id}}/price-of-size/' + e.target.value)
                        .then(response => {
                            this.price = response.data.price;
                            this.price_old = response.data.price_old;
                            window.$('.price-color').addClass('price-color--change');
                            window.setTimeout(function () {
                                window.$('.price-color').removeClass('price-color--change');
                            }, 300);
                            window.$('#add_to_cart').removeAttr('disabled');
                        })
                }
            },
            created() {
                @foreach($sizes as $size)
                    @if ($default_size === $size->name)
                        this.size = {{$size->id}};
                    @endif
                @endforeach
            }
        })
    </script>
@endsection
