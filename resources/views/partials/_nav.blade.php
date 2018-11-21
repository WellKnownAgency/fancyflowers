@php
    $collections = \App\Collection::orderBy('sort')->get();
      $chunks = $collections->prepend(collect(['name' => 'All', 'slug' => '']))->chunk(3);
@endphp


<header id="top-header">
  <div class="header-topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-8 col-xs-8">
          <div class="block-callus pull-left hidden-xs">
            <span>Call us now:        <img src="/images/language/en.jpg" alt="" width="16" height="11" style="margin-right:10px;"><a href="tel:+12673562820" style="" class="nav_phone">+1 267 356-2820</a>  /
              <img src="/images/language/ru.png" alt="" width="16" height="11" style="margin:5px;"><a href="tel:+12679723986" style="" class="nav_phone">+1 267 972-3986</a>
            </span>
          </div><!-- end call us -->
        </div>
        <div class="col-lg-5 col-md-5 col-sm-4 col-xs-4">
          <div class="header_user_info pull-right">
            <div data-toggle="dropdown" class="dropdown-title">
              <a href="#" title="My account"><i class="fa fa-user" style=margin-top:4px;></i></a>
            </div>
            <ul class="links">
              @guest
              <li>
                <a href="/register" title="Register">Register</a>
              </li>
              <li class="last">
                <a href="/login" title="Login">Login</a>
              </li>
              @else
              <li>
                <a href="/account" title="Account">Account</a>
              </li>
              <li class="last">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
              @endguest
            </ul>
          </div><!-- end header_user_info -->
        </div>
      </div>
    </div>
  </div>
    {{--{{dd(Cart::content())}}--}}
  <div class="header-main" data-spy="affix" data-offset-top="50" style="background-color:#fbfbfb;">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-5 col-xs-5">
          <div class="logo">
            <a href="/" title="Fancy Flowers">
              <img class="img-responsive" src="/images/logo.png" height="100" alt="">
            </a>
          </div><!--end logo-->
        </div>
        <div class="col-lg-10 col-md-10 col-sm-7 col-xs-7">
          <div class="topheader-navholder">
            <div class="topheader-navholder-lf">
              <div id="block-cart" class="block-cart dropdown-over pull-right">
                  @if (Cart::instance('default')->count() < 1)
                      <div class="dropdown-title">
                          <a>
                              <span class="title-cart"><i class="zmdi zmdi-shopping-basket"></i></span>
                              <span class="ajax_cart_quantity">{{ Cart::instance('default')->count() }}</span>
                          </a>
                      </div>
                  @else
                      <div data-toggle="dropdown" class="dropdown-title">
                          <a href="{{ route('cart.index') }}" title="Shopping cart">
                              <span class="title-cart"><i class="zmdi zmdi-shopping-basket"></i></span>
                              <span class="ajax_cart_quantity">{{ Cart::instance('default')->count() }}</span>
                          </a>
                      </div>
                    <div class="dropdown-content">
                      <div class="cart_block_list">
                        <table class="cart">
                          <tbody>
                            @if (Cart::content() != null)
                              @foreach (Cart::content() as $item)
                                <tr>
                                  <td class="product-thumbnail">
                                    <a href="page-detail.html">
                                      <img width="80" height="107" alt="" class="img-responsive" src="/images/product/{{ $item->model->image1 }}">
                                    </a>
                                  </td>
                                  <td class="product-name">
                                    <a href="/product/{{ $item->model->slug }}">{{ $item->model->name }}</a>
                                    <p>Size: {{ App\FLSize::getSizeDisplayName($item->options->size) }}</p>
                                    <span class="amount"><strong>${{ $item->price }}</strong></span>
                                  </td>
                                  <td class="product-actions">
                                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                      {{ csrf_field() }}
                                      {{ method_field('DELETE') }}
                                      <button type="submit" title="Remove this item" class="remove" href="#">
                                        <i class="fa fa-times"></i>
                                      </button>
                                    </form>
                                  </td>
                                </tr>

                              @endforeach
                            @else
                            <tr>Cart is Empty</tr>

                            @endif
                            <tr>
                              <td class="actions" colspan="3">
                                <div class="actions-continue">
                                  <a href="{{ route('cart.index') }}" class="btn btn-view-all" >View All</a>
                                  <a href="{{ route('checkout.index') }}" class="btn pull-right btn-checkout">Checkout<i class="fa fa-angle-right ml-xs"></i></a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- end dropdown-content -->
                  @endif
              </div><!-- end blockcart_top -->

            </div><!-- end topheader-navholder-lf -->
            <div class="topheader-navholder-rg">
              <span id="btn-menu"><i class="zmdi zmdi-menu" style="margin-top:39px"></i></span>
              <nav id="main-nav">
                <ul class="nav navbar-nav megamenu">
                  <li class="dropdown ">
                    <a href='/' class="{{ Request::is('/') ?"active-nav" : ""}}">Home </a>

                  </li>
                  <li class="dropdown aligned-fullwidth">
                    <a href='#' id="collections" class="coll-open" >Collections <b class="caret"></b></a>
                    <div id="dropdown-menu2" class="dropdown-menu">
                      <div class="row">
                          @php
                              $collections = \App\Collection::orderBy('sort')->get();
                                $chunks = $collections->prepend(['name' => 'All', 'slug' => ''])->chunk(3)->toArray();
                          @endphp
                          @foreach($chunks as $chunk)
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                  <div class="block-subcategories">
                                      <ul>
                                          @foreach($chunk as $collection)
                                              <li><a href="/collections{{$collection['slug'] ? '/'.$collection['slug'] : ''}}" title="{{$collection['name']}}">{{$collection['name']}}</a></li>
                                          @endforeach
                                      </ul>
                                  </div>
                              </div>
                          @endforeach
                        {{--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <div class="block-subcategories">


                            <ul>
                              <li class="active"><a href="/collections" title="All" class="{{ Request::is('collections/all') ?"active-nav" : ""}}">All</a></li>
                              <li class="active"><a href="/collections/birthday" title="Birthday" class="{{ Request::is('collections/birthday') ?"active-nav" : ""}}">Birthday</a></li>
                              <li><a href="/collections/weddings" title="Weddings" class="{{ Request::is('collections/wedding') ?"active-nav" : ""}}">Wedding</a></li>
                           </ul>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <div class="block-subcategories">

                            <ul>
                              <li><a href="/collections/congratulation" title="Congratulation" class="{{ Request::is('collections/congratulation') ?"active-nav" : ""}}">Congratulations</a></li>
                              <li><a href="/collections/new-baby" title="New Baby" class="{{ Request::is('collections/new-baby') ?"active-nav" : ""}}">New Baby</a></li>
                              <li><a href="/collections/holidays" title="Holidays" class="{{ Request::is('collections/holidays') ?"active-nav" : ""}}">Holidays</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <div class="block-subcategories">
                            <ul>
                              <li><a href="/collections/our-friends-florists" title="Our Friends Florists" class="{{ Request::is('collections/our-friends-florists') ?"active-nav" : ""}}">Our Friends Florists</a></li>
                              <li><a href="/collections/looseflowers" title="Looseflowers" class="{{ Request::is('collections/looseflowers') ?"active-nav" : ""}}">Loose Flowers</a></li>
                              <li><a href="/collections/gifts" title="Gifts" class="{{ Request::is('collections/gifts') ?"active-nav" : ""}}">Gifts</a></li>
                            </ul>
                          </div>
                        </div>--}}
                      </div>
                    </div>
                  </li>

                  <li class="dropdown">
                    <a href='/blog' class="{{ Request::is('blog') ?"active-nav" : ""}}">Blog </a>

                  </li>
                  <li class="dropdown">
                    <a href='/about-us' class="{{ Request::is('about-us') ?"active-nav" : ""}}">About us</a>
                  </li>
                  <li class="dropdown"><a href='/contact-us' class="{{ Request::is('contact-us') ?"active-nav" : ""}}">Contact</a></li>
                </ul>
              </nav><!-- end main-nav -->
            </div><!-- end topheader-navholder-rg -->
          </div><!-- end topheader-navholder -->
        </div>
      </div><!-- end row -->
    </div><!-- end container -->
  </div>
</header><!-- end header -->
