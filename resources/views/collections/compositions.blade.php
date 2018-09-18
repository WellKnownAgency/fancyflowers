@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('main')

@section('content')
<div id="breadcrumb" class="clearfix">
	<div class="container">
		<div class="breadcrumb clearfix">
			<ul class="ul-breadcrumb">
				<li><a href="/" title="Home">Home</a></li>
				<li><a href="/collections/all" title="Categories">Collections</a></li>
				<li><span>Compositions</span></li>
			</ul>
			<h2 class="bread-title">Compositions</h2>
		</div>
	</div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
	<!-- container -->
	<div class="container">
		<div class="row">
			<div id="left_column" class="sidebar col-lg-3 col-md-3">
				<div id="categories_block_left" class="block">
					<h4 class="title_block">Collections</h4>
					<div class="block_content">
						<ul class="list-block">
							<li>
								<a href="/collections/all" title="All">
									All
								</a>
							</li>
							<li>
								<a href="/collections/birthday" title="Birthday">
									Birthday
								</a>
							</li>
							<li>
								<a href="/collections/weddings" title="Wedding">
									Wedding
								</a>
							</li>
							<li>
								<a href="/collections/congratulation" title="Congratulation">
									Congratulation
								</a>
							</li>
							<li>
								<a href="/collections/new-baby" title="New-Baby">
									New Baby
								</a>
							</li>
							<li>
								<a href="/collections/thank-you" title="Thank-You">
									Thank You
								</a>
							</li>
							<li>
								<a href="/collections/looseflowers" title="Loose-Flowers">
									Loose Flowers
								</a>
							</li>
							<li>
								<a href="/collections/gifts" title="Gifts">
									Gifts
								</a>
							</li>
						</ul>
					</div>
				</div><!-- end categories_block_left -->
				<div id="block_price_filter" class="block">
					<h4 class="title_block">Filter by price</h4>
					<div class="block_content">
						<div id="slider-range" class="tiva-filter">
							<label>Range:</label>
							<div class="filter-item price-filter">
								<div class="layout-slider">
									<input id="price-filter" name="price" value="0;100" />
								</div>
								<div class="layout-slider-settings"></div>
							</div>
						</div>
					</div>
				</div><!-- end block_price_filter -->
				<div id="block_featured_product" class="block">
					<h4 class="title_block">Best sellers</h4>
					<div class="block_content">
						<ul class="product_list_block">
							<li>
								<div class="product-container media">
									<div class="product-image-container pull-left">
										<a class="product_img_link" href="page-detail.html" title="Bouquet rose">
											<img src="img/product/6.jpg" alt="Bouquet rose" class="img-responsive" width="86" height="115">
										</a>
									</div>
									<div class="media-body">
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
										<h5 class="name">
											<a class="product-name" href="page-detail.html" title="Bouquet rose">
												Bouquet rose
											</a>
										</h5>
										<div class="content_price">
											<span class="price product-price">$26.28</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="product-container media">
									<div class="product-image-container pull-left">
										<a class="product_img_link" href="page-detail.html" title="Queen rose - pink">
											<img src="img/product/5.jpg" alt="Queen rose - pink" class="img-responsive" width="86" height="115">
										</a>
									</div>
									<div class="media-body">
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
										<h5 class="name">
											<a class="product-name" href="page-detail.html" title="Queen rose - pink">
												Queen rose - pink
											</a>
										</h5>
										<div class="content_price">
											<span class="price product-price">$68.28</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="product-container media">
									<div class="product-image-container pull-left">
										<a class="product_img_link" href="page-detail.html" title="Bouquet lavender">
											<img src="img/product/7.jpg" alt="Bouquet lavender" class="img-responsive" width="86" height="115">
										</a>
									</div>
									<div class="media-body">
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
										<h5 class="name">
											<a class="product-name" href="page-detail.html" title="Bouquet lavender">
												Bouquet lavender
											</a>
										</h5>
										<div class="content_price">
											<span class="price product-price">$36.28</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="product-container media">
									<div class="product-image-container pull-left">
										<a class="product_img_link" href="page-detail.html" title="Bouquet Hydrangea - white">
											<img src="img/product/8.jpg" alt="Bouquet Hydrangea - white" class="img-responsive" width="86" height="115">
										</a>
									</div>
									<div class="media-body">
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
										<h5 class="name">
											<a class="product-name" href="page-detail.html" title="Bouquet Hydrangea - white">
												Bouquet Hydrangea - white
											</a>
										</h5>
										<div class="content_price">
											<span class="price product-price">$16.28</span>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div><!-- end block_featured_product -->
			</div><!-- end left_column -->
			<div id="center_column" class="col-lg-9 col-md-9">
				<div id="subcategories">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-sp-12">
							<div class="scene_cat">
								<div class="imgage">
									<img class="img-responsive" src="img/category/270x200/cate1.jpg" alt="">
								</div>
								<a href="page-category-left.html" title="Weddings">Weddings</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-sp-12">
							<div class="scene_cat">
								<div class="imgage">
									<img class="img-responsive" src="img/category/270x200/cate2.jpg" alt="">
								</div>
								<a href="page-category-left.html" title="Birthday">Birthday</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-sp-12">
							<div class="scene_cat">
								<div class="imgage">
									<img class="img-responsive" src="img/category/270x200/cate3.jpg" alt="">
								</div>
								<a href="page-category-left.html" title="Loose flowers">Loose flowers</a>
							</div>
						</div>
					</div>
				</div>
				<div class="content_sortPagiBar top clearfix">
					<div class="pull-left hidden-xs">
						<nav class="tiva-nav-tabs-box">
							<ul class="nav tiva-nav-tabs" role="tablist">
							<li class="active"><a href="#tiva-grid" data-toggle="tab" aria-expanded="true"><i class="fa fa-th"></i></a></li>
							<li class=""><a href="#tiva-list" data-toggle="tab" aria-expanded="false"><i class="fa fa-list-ul"></i></a></li>
							</ul>
						</nav>
					</div>
					<div class="sort pull-right">
						<form id="productsSortForm" action="#" class="form-inline pull-right">
							<div class="select">
								<label for="selectProductSort">Sort by</label>
								<select id="selectProductSort" class="selectProductSort form-control" onchange="location = this.value;">
									<option selected="selected">Choose...</option>
									<option value="{{ route('collection.compositions', ['sort' => 'low_high']) }}">Lowest First</option>
									<option value="{{ route('collection.compositions', ['sort' => 'high_low']) }}">Highest First</option>
									<option value="{{ route('collection.compositions', ['sort' => 'a_z']) }}">Product Name A-Z</option>
									<option value="{{ route('collection.compositions', ['sort' => 'z_a']) }}">Product Name Z-A</option>
									<option value="{{ route('collection.compositions', ['sort' => 'instock']) }}">In Stock</option>
								</select>
							</div>
						</form>
						<form id="productsShowForm" action="#" class="form-inline pull-right">
							<div class="select">
								<label for="selectProductShow">Show</label>
								<select id="selectProductShow" class="selectProductShow form-control">
									<option value="0" selected="selected">9</option>
									<option value="1">15</option>
									<option value="2">25</option>
									<option value="3">45</option>
									<option value="4">60</option>
									<option value="5">100</option>
								</select>
							</div>
						</form>
					</div>
				</div>
				<div class="tab-content">
					<div class="tab-pane fade active in" id="tiva-grid">
						<div class="row">
							@foreach ($flowers as $flower)
							<div class="type_block_product col-sp-12 col-xs-6 col-sm-4 col-md-4 col-lg-4">
								<div class="product-container">
									<div class="left-block">
										<div class="product-image-container">
											<a class="product_img_link" href="/product/{{ $flower->slug }}" title="Tulipa floriade - red">
												<img src="/images/product/{{ $flower->image1 }}" alt="{{ $flower->name }}" class="img-responsive" width="480" height="640">
											</a>
											<span class="label-new label">New</span>
											<span class="label-sale label">Sale</span>
											<span class="label-reduction label">-5%</span>
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
							</div><!-- end type_block_product -->
							@endforeach
						</div><!-- end row -->
					</div><!-- end tiva-grid -->
				</div>
				<div class="content_sortPagiBar bottom clearfix">
					{{$flowers->appends(request()->input())->links()}}
				</div>
			</div><!-- end center_column -->
		</div>
	</div> <!-- end container -->
</div><!--end columns-->


@stop
