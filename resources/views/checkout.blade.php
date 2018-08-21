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
				<li><span>Checkout</span></li>
			</ul>
			<h2 class="bread-title">Checkout</h2>
		</div>
	</div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
	<!-- container -->
	<div class="container">
		<div class="page-checkout">
			<div class="row">
				<div class="checkoutleft col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<p>Returning customer? <a href="page-login.html">Click here to login</a>.</p>
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
										Address
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="accordion-body collapse in">
								<div class="panel-body">
									<form action="#" id="formaddress" method="post" class="form-horizontal">
										<div class="form-group">
											<div class="col-md-12">
												<label>Country</label>
												<select class="form-control">
													<option value="">Select a country</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label>First Name</label>
												<input type="text" value="" class="form-control">
											</div>
											<div class="col-md-6">
												<label>Last Name</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Company Name</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Address </label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>City </label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<input type="submit" value="Save" class="btn btn-primary pull-right" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
										Shipping
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="accordion-body collapse">
								<div class="panel-body">
									<form action="#" id="formshipping" method="post" class="form-horizontal">
										<div class="form-group">
											<div class="col-md-12">
												<span class="remember-box checkbox">
													<label>
														<input type="checkbox" checked="checked">Ship to billing address?
													</label>
												</span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Country</label>
												<select class="form-control">
													<option value="">Select a country</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label>First Name</label>
												<input type="text" value="" class="form-control">
											</div>
											<div class="col-md-6">
												<label>Last Name</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Company Name</label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Address </label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>City </label>
												<input type="text" value="" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<input type="submit" value="Save" class="btn btn-primary pull-right" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
										Payment
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="accordion-body collapse">
								<div class="panel-body">
									<table class="table table-bordered shop_tablecart">
										<thead>
											<tr>
												<th class="product-thumbnail text-center">
													Product
												</th>
												<th class="product-name">
													Description
												</th>
												<th class="product-price text-right">
													Price
												</th>
												<th class="product-quantity text-center">
													Quantity
												</th>
												<th class="product-subtotal text-right">
													Total
												</th>
											</tr>
										</thead>
										<tbody>
											<tr class="cart_table_item">
												<td class="product-thumbnail text-center">
													<a href="page-detail.html">
														<img width="80" height="107" alt="" class="img-responsive" src="img/product/1.jpg">
													</a>
												</td>
												<td class="product-name">
													<a href="page-detail.html">Tulipa floriade - red</a>
												</td>
												<td class="product-price text-right">
													<span class="amount">$299</span>
												</td>
												<td class="product-quantity text-center">
													1
												</td>
												<td class="product-subtotal text-right">
													<span class="amount">$299</span>
												</td>
											</tr>
											<tr class="cart_table_item">
												<td class="product-thumbnail text-center">
													<a href="page-detail.html">
														<img width="80" height="107" alt="" class="img-responsive" src="img/product/2.jpg">
													</a>
												</td>
												<td class="product-name">
													<a href="page-detail.html">Tulipa floriade - red</a>
												</td>
												<td class="product-price text-right">
													<span class="amount">$72</span>
												</td>
												<td class="product-quantity text-center">
													1
												</td>
												<td class="product-subtotal text-right">
													<span class="amount">$72</span>
												</td>
											</tr>
											<tr class="cart_table_item">
												<td class="product-thumbnail text-center">
													<a href="page-detail.html">
														<img width="80" height="107" alt="" class="img-responsive" src="img/product/3.jpg">
													</a>
												</td>
												<td class="product-name">
													<a href="page-detail.html">Tulipa floriade - red</a>
												</td>
												<td class="product-price text-right">
													<span class="amount">$60</span>
												</td>
												<td class="product-quantity text-center">
													1
												</td>
												<td class="product-subtotal text-right">
													<span class="amount">$60</span>
												</td>
											</tr>
										</tbody>
									</table>

									<hr class="tall">

									<h4 class="heading-primary">Cart Totals</h4>
									<table class="table cart-totals">
										<tbody>
											<tr class="cart-subtotal">
												<th>
													<strong>Cart Subtotal</strong>
												</th>
												<td>
													<strong><span class="amount">$431</span></strong>
												</td>
											</tr>
											<tr class="shipping">
												<th>
													Shipping
												</th>
												<td>
													Free Shipping<input type="hidden" value="free_shipping" class="shipping_method" name="shipping_method">
												</td>
											</tr>
											<tr class="total">
												<th>
													<strong>Order Total</strong>
												</th>
												<td>
													<strong><span class="amount">$431</span></strong>
												</td>
											</tr>
										</tbody>
									</table>

									<hr class="tall">

									<h4 class="heading-primary">Payment</h4>

									<form action="/" id="frmPayment" method="post">
										<div class="row">
											<div class="col-md-12">
												<span class="remember-box checkbox">
													<label>
														<input type="checkbox">Pay by bank wire (order processing will be longer)
													</label>
												</span>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<span class="remember-box checkbox">
													<label>
														<input type="checkbox">Pay by check (order processing will be longer)
													</label>
												</span>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="actions-continue pull-right">
						<input type="submit" value="I confirm my order" name="proceed" class="btn btn-primary">
					</div>
				</div>
				<div class="checkoutright col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<h4 class="title_block">Cart Totals</h4>
					<table class="table cart-totals">
						<tbody>
							<tr class="cart-subtotal">
								<th>
									<strong>Cart Subtotal</strong>
								</th>
								<td>
									<strong><span class="amount">$431</span></strong>
								</td>
							</tr>
							<tr class="shipping">
								<th>
									Shipping
								</th>
								<td>
									Free Shipping<input type="hidden" value="free_shipping" class="shipping_method" name="shipping_method">
								</td>
							</tr>
							<tr class="total">
								<th>
									<strong>Order Total</strong>
								</th>
								<td>
									<strong><span class="amount">$431</span></strong>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div> <!-- end container -->
</div><!--end columns -->

@stop
