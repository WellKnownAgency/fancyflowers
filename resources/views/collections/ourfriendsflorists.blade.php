@section('title', 'Our Friends Florists Collection | fancy Flowers')
@section('dscr', 'Our Friends Florists Collection from Philadelphia Fancy Flowers Delivery.')
@section('keywords', '')

@extends('main')

@section('content')
<div id="breadcrumb" class="clearfix  breadcrumb_back">
	<div class="container">
		<div class="breadcrumb clearfix">
			<ul class="ul-breadcrumb">
				<li><a href="/" title="Home">Home</a></li>
				<li><a href="/collections/all" title="Categories">Collections</a></li>
				<li><span>Our Friends Florists</span></li>
			</ul>
			<h2 class="bread-title">Our Friends Florists</h2>
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
									Congratulations
								</a>
							</li>
							<li>
								<a href="/collections/new-baby" title="New-Baby">
									New Baby
								</a>
							</li>
							<li>
									<a href="/collections/holidays" title="Holidays">
											Holidays
									</a>
							</li>
							<li>
									<a href="/collections/our-friends-florists" title="Our Friends Florists" class="active-nav">
											Our Friends Florists
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
			</div><!-- end left_column -->
            <div id="center_column" class="col-lg-9 col-md-9">
                <div id="products-content" style="font-size:1.25em;">
										This page is intended for those who want to show you their skills. They want to surprise you, discover a new world of flowers for you and earn your approval. Try something new, support young and talanted florists and your future holidays will be painted in unusual colors of joy abd beauty. All the bouquets and compositions that you see here are made by non-depended florists who are not employees of Fancy Flowers.
                </div>
            </div><!-- end center_column -->
		</div>
	</div> <!-- end container -->
</div><!--end columns-->
@stop
