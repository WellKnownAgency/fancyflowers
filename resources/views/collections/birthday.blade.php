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
				<li><a href="page-category-left.html" title="Categories">Collections</a></li>
				<li><span>Birthday</span></li>
			</ul>
			<h2 class="bread-title">Birthday</h2>
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
								<a href="page-category-left.html" title="">
									Weddings<span class="count">(15)</span>
								</a>
							</li>
							<li>
								<a href="page-category-left.html" title="Weddings">
									Congratulations<span class="count">(15)</span>
								</a>
							</li>
							<li>
								<a href="page-category-left.html" title="Clearance">
									New Baby<span class="count">(15)</span>
								</a>
							</li>
							<li>
								<a href="page-category-left.html" title="Vases">
									Thank You<span class="count">(15)</span>
								</a>
							</li>
							<li>
								<a href="page-category-left.html" title="Prom & Special Events">
									Flower Composition<span class="count">(15)</span>
								</a>
							</li>
							<li>
								<a href="page-category-left.html" title="Prom & Special Events">
									Gifts<span class="count">(15)</span>
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
				<div id="block_color_filter" class="block">
					<h4 class="title_block">Select by color</h4>
					<div class="block_content">
						<ul class="list-block">
							<li>
								<a href="page-category-left.html" title="Black">
									Black
									<span class="count">(8)</span>
								</a>
							</li>
							<li>
								<a href="page-category-left.html" title="Blue">
									Blue
									<span class="count">(10)</span>
								</a>
							</li>
							<li>
								<a href="page-category-left.html" title="Yellow">
									Yellow
									<span class="count">(12)</span>
								</a>
							</li>
						</ul>
					</div>
				</div><!-- end block_color_filter -->
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
								<select id="selectProductSort" class="selectProductSort form-control">
									<option value="0" selected="selected">name</option>
									<option value="1">Price: Lowest first</option>
									<option value="2">Price: Highest first</option>
									<option value="3">Product Name: A to Z</option>
									<option value="4">Product Name: Z to A</option>
									<option value="5">In stock</option>
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
												<a class="ajax_add_to_cart_button button btn" href="#" rel="nofollow" title="Add to cart"><i class="zmdi zmdi-shopping-cart"></i></a>
												<a class="button btn quick-view" href="/product/{{ $flower->slug }}" title="Quick view">
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
					<nav>
						<ul class="pagination">
						<li>
							<a href="#" aria-label="Previous">
							<span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
							</a>
						</li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li class="truncate"><span>...</span></li>
						<li><a href="#">12</a></li>
						<li>
							<a href="#" aria-label="Next">
							<span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
							</a>
						</li>
						</ul>
					</nav>
				</div>
			</div><!-- end center_column -->
		</div>
	</div> <!-- end container -->
</div><!--end columns-->


@stop
