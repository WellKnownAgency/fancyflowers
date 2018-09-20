<header id="top-header">
  <div class="header-topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-8">

          <div class="block-callus pull-left hidden-xs">
            <span>Call us now: 0123-456-789</span>
          </div><!-- end call us -->
        </div>
        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-4">
          <div class="header_user_info pull-right">
            <div data-toggle="dropdown" class="dropdown-title">
              <a href="#" title="My account"><i class="fa fa-user" style=margin-top:4px;></i></a>
            </div>
            <ul class="links">
              @guest
              <li>
                <a href="/account" title="Account">Account</a>
              </li>
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
  <div class="header-main" data-spy="affix" data-offset-top="197" style="background-color:#fbfbfb;">
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
                        @foreach (Cart::content() as $item)
                        <tr>
                          <td class="product-thumbnail">
                            <a href="page-detail.html">
                              <img width="80" height="107" alt="" class="img-responsive" src="/images/product/{{ $item->model->image1 }}">
                            </a>
                          </td>
                          <td class="product-name">
                            <a href="/product/{{ $item->model->slug }}">{{ $item->model->name }}</a>
                            <br><span class="amount"><strong>${{ $item->model->price1 }}</strong></span>
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
                        <tr>
                          <td class="actions" colspan="3">
                            <div class="actions-continue">
                              <a href="{{ route('cart.index') }}" class="btn btn-view-all">View All</a>
                              <a href="{{ route('checkout.index') }}" class="btn pull-right btn-checkout">Checkout<i class="fa fa-angle-right ml-xs"></i></a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div><!-- end dropdown-content -->
              </div><!-- end blockcart_top -->

            </div><!-- end topheader-navholder-lf -->
            <div class="topheader-navholder-rg">
              <span id="btn-menu"><i class="zmdi zmdi-menu" style="margin-top:39px"></i></span>
              <nav id="main-nav">
                <ul class="nav navbar-nav megamenu">
                  <li class="dropdown">
                    <a href='/'>Home </a>

                  </li>
                  <li class="dropdown aligned-fullwidth">
                    <a href='#'>Collections <b class="caret"></b></a>
                    <div id="dropdown-menu2" class="dropdown-menu">
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <div class="block-subcategories">

                            <ul>
                              <li><a href="/collections/all" title="All">All</a></li>
                              <li><a href="/collections/birthday" title="Birthday">Birthday</a></li>
                              <li><a href="/collections/weddings" title="Weddings">Wedding</a></li>
                           </ul>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <div class="block-subcategories">

                            <ul>
                              <li><a href="/collections/congratulation" title="Congratulation">Congratulation</a></li>
                              <li><a href="/collections/new-baby" title="New Baby">New Baby</a></li>
                              <li><a href="/collections/thank-you" title="Thank You">Thank You</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                          <div class="block-subcategories">
                            <ul>
                              <li><a href="/collections/compositions" title="Flower Composition">Flower Composition</a></li>
                              <li><a href="/collections/looseflowers" title="Looseflowers">Loose Flowers</a></li>
                              <li><a href="/collections/gifts" title="Gifts">Gifts</a></li>
                            </ul>
                          </div>
                        </div>

                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="block-image">
                            <img class="img-responsive" src="images/menu/banner-1.jpg" width="378" height="128" alt="">
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="block-image">
                            <img class="img-responsive" src="images/menu/banner-2.jpg" width="378" height="128" alt="">
                          </div>
                        </div>

                      </div>
                    </div>
                  </li>

                  <li class="dropdown">
                    <a href='/blog'>Blog </a>

                  </li>
                  <li class="dropdown">
                    <a href='/about-us'>About us</a>
                  </li>
                  <li class="dropdown"><a href='/contact-us'>Contact</a></li>
                </ul>
              </nav><!-- end main-nav -->
            </div><!-- end topheader-navholder-rg -->
          </div><!-- end topheader-navholder -->
        </div>
      </div><!-- end row -->
    </div><!-- end container -->
  </div>
</header><!-- end header -->
