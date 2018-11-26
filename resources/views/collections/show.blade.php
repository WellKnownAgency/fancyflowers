@section('title', "$collection->name Flowers Collection | Fancy Flowers ")
@section('dscr', "For a $collection->name occasion Flowers Collection from Philadelphia Fancy Flowers Delivery.")
@section('keywords', '')

@extends('main')

@section('content')
<div id="breadcrumb" class="clearfix breadcrumb_back">
	<div class="container">
		<div class="breadcrumb clearfix">
			<ul class="ul-breadcrumb">
				<li><a href="/" title="Home">Home</a></li>
				<li><a href="/collections" title="Categories">Collections</a></li>
				<li><span>{{$collection->name}}</span></li>
			</ul>
			<h2 class="bread-title">{{$collection->name}}</h2>
		</div>
	</div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
	<!-- container -->
	<div class="container">
		<div class="row">
			<div id="left_column" class="sidebar col-lg-3 col-md-3">
				@include('collections._sidebar')
			</div>
            <div id="center_column" class="col-lg-9 col-md-9">
                <div class="content_sortPagiBar top clearfix">
                    <div class="sort pull-right">
                        <form id="productsSortForm" action="#" class="form-inline pull-right">
                            <div class="select">
                                <label for="selectProductSort">Sort by</label>
                                <select id="selectProductSort" class="selectProductSort form-control">
                                    <option selected="selected" value="created_at__asc">Choose...</option>
                                    <option value="price_new_default__asc">Lowest First</option>
                                    <option value="price_new_default__desc">Highest First</option>
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
                    @include('collections/_products')
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
                    axios.get('{{route('collections.filter')}}', {params: {
                            'filter': 'price__' + value,
                            'sort': sortSelect.val(),
                            'limit': limitSelect.val(),
                            'category': '{{$collection->slug}}'
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
                axios.get('{{route('collections.filter')}}', {params: {
                        'filter': 'price__' + $("#price-filter").slider("value"),
                        'sort': thisSelect.val(),
                        'page': page,
                        'limit': limitSelect.val(),
                        'category': '{{$collection->slug}}'
                    }})
                    .then(function (response) {
                        $('#products-content').html(response.data);
                        $('#products-content').fadeIn(300);
                    })
            });

            $("#selectProductShow").on('change', function (e) {
                var thisSelect = $( this );
                $('#products-content').fadeOut(300);
                axios.get('{{route('collections.filter')}}', {params: {
                        'filter': 'price__' + $("#price-filter").slider("value"),
                        'sort': sortSelect.val(),
                        'limit': thisSelect.val(),
                        'category': '{{$collection->slug}}'
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
                axios.get('{{route('collections.filter')}}', {params: {
                        'filter': 'price__' + $("#price-filter").slider("value"),
                        'sort': sortSelect.val(),
                        'page': page,
                        'limit': limitSelect.val(),
                        'category': '{{$collection->slug}}'
                    }})
                    .then(function (response) {
                        $('#products-content').html(response.data);
                        $('#products-content').fadeIn(300);
                    })
            })
        };
    </script>
@stop
