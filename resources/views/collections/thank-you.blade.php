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
				<li><span>Thank You</span></li>
			</ul>
			<h2 class="bread-title">Thank You</h2>
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
								<a href="/collections/all" title="all">
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
								<a href="/collections/thank-you" title="Thank-You" class="{{ Request::is('collections/thank-you') ?"active-nav" : ""}}">
									Thank You
								</a>
							</li>
							<li>
								<a href="/collections/compositions" title="Flower-Composition">
									Flower Composition
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
							@foreach ($flowersbest as $flower)
							<li>
								<div class="product-container media">
									<div class="product-image-container pull-left">
										<a class="product_img_link" href="page-detail.html" title="Queen rose - pink">
											<img src="/images/product/{{ $flower->image1 }}" alt="{{ $flower->name }}" class="img-responsive" width="86" height="115">
										</a>
									</div>
									<div class="media-body">
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
										<h5 class="name">
											<a class="product-name" href="/product/{{ $flower->slug }}" title="Queen rose - pink">
												{{ $flower->name }}
											</a>
										</h5>
										<div class="content_price">
											<span class="price product-price">${{ $flower->price1 }}</span>
										</div>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div><!-- end block_featured_product -->
			</div><!-- end left_column -->
            <div id="center_column" class="col-lg-9 col-md-9">
                <div class="content_sortPagiBar top clearfix">
                    <div class="sort pull-right">
                        <form id="productsSortForm" action="#" class="form-inline pull-right">
                            <div class="select">
                                <label for="selectProductSort">Sort by</label>
                                <select id="selectProductSort" class="selectProductSort form-control">
                                    <option selected="selected" value="created_at__asc">Choose...</option>
                                    <option value="price1__asc">Lowest First</option>
                                    <option value="price1__desc">Highest First</option>
                                    <option value="name__asc">Product Name A-Z</option>
                                    <option value="name__desc">Product Name Z-A</option>
                                    <option value="stock__desc">In Stock</option>
                                </select>
                            </div>
                        </form>
                        <form id="productsShowForm" action="#" class="form-inline pull-right">
                            <div class="select">
                                <label for="selectProductShow">Show</label>
                                <select id="selectProductShow" class="selectProductShow form-control">
                                    <option value="9" selected="selected">9</option>
                                    <option value="15">15</option>
                                    <option value="25">25</option>
                                    <option value="45">45</option>
                                    <option value="60">60</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="products-content">
                    @include('collections/products')
                </div>
            </div><!-- end center_column -->
		</div>
	</div> <!-- end container -->
</div><!--end columns-->
@stop

@section('customjs')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        window.onload = function() {
            var sortSelect = $("#selectProductSort");
            var limitSelect = $("#selectProductShow");
            var category = 'Thank you';

            $("#price-filter").slider({
                from: {{$minPrice}},
                to: {{$maxPrice}},
                step: 1,
                smooth: true,
                round: 0,
                dimension: "&nbsp;$",
                skin: "plastic",
                callback: function (value) {
                    $('#products-content').fadeOut(300);
                    axios.get('{{route('collection.filter')}}', {params: {
                            'filter': 'price1__' + value,
                            'sort': sortSelect.val(),
                            'limit': limitSelect.val(),
                            'category': category
                        }})
                        .then(function (response) {
                            //console.log(response.data);
                            $('#products-content').html(response.data);
                            $('#products-content').fadeIn(300);
                        })
                }
            });

            $("#selectProductSort").on('change', function (e) {
                var page = $(".pagination li.active span").text();
                var thisSelect = $( this );
                $('#products-content').fadeOut(300);
                axios.get('{{route('collection.filter')}}', {params: {
                        'filter': 'price1__' + $("#price-filter").slider("value"),
                        'sort': thisSelect.val(),
                        'page': page,
                        'limit': limitSelect.val(),
                        'category': category
                    }})
                    .then(function (response) {
                        $('#products-content').html(response.data);
                        $('#products-content').fadeIn(300);
                    })
            });

            $("#selectProductShow").on('change', function (e) {
                var thisSelect = $( this );
                $('#products-content').fadeOut(300);
                axios.get('{{route('collection.filter')}}', {params: {
                        'filter': 'price1__' + $("#price-filter").slider("value"),
                        'sort': sortSelect.val(),
                        'limit': thisSelect.val(),
                        'category': category
                    }})
                    .then(function (response) {
                        $('#products-content').html(response.data);
                        $('#products-content').fadeIn(300);
                    })
            });

            $(document).on('click', '.pagination a',function(event)
            {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                $('#products-content').fadeOut(300);
                axios.get('{{route('collection.filter')}}', {params: {
                        'filter': 'price1__' + $("#price-filter").slider("value"),
                        'sort': sortSelect.val(),
                        'page': page,
                        'limit': limitSelect.val(),
                        'category': category
                    }})
                    .then(function (response) {
                        $('#products-content').html(response.data);
                        $('#products-content').fadeIn(300);
                    })
            })
        };
    </script>
@stop
