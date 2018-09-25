@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('main')

@section ('extrahead')
<script src="https://js.stripe.com/v3/"></script>
<style>
/**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
	color: #8a8a8a;
	font-size:14px;
  background-color: white;
  height: 39px;
  padding: 6px 12px;
  border-radius: 0;
  border: 1px solid #ebebeb;
  transition: #ebebeb ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}

.StripeElement--focus {
	border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}
</style>
@stop

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
					@if (Auth::check() != true)
					<p>Returning customer? <a href="/login">Click here to login</a>.</p>
					@else
					<p></p>
					@endif
					<div class="panel-group" id="accordion">
						<form action="{{ route('checkout.store') }}" method="POST" id="payment-form" autocomplete="off">
							{{ csrf_field() }}
						<div class="panel panel-default">
							<div class="panel-heading" >
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
										Shipping
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="accordion-body collapse in">
								<div class="panel-body">
										<div class="row">
											<div class="form-group">

												<div class="col-md-6 ">
													<label>Choose Shipping Address</label>
													<select class="form-control" id="show" onchange="">
														<option value="newaddress">New Address</option>
														@if (Auth::check())
															@foreach(Auth::user()->ships as $ship)
																<option value="{{ $ship->id }}">{{ $ship->name }}</option>
															@endforeach
														@endif
													</select>
												</div>
											</div>
										</div>
									<div style="display: block" id="filloutform">
										<div class="form-group">
											<div class="col-md-6">
												<label>First Name</label>
												<input type="text" name="firstname" class="form-control" id="firstname" autocomplete="nope">
											</div>
											<div class="col-md-6">
												<label>Last Name</label>
												<input type="text" name="lastname" class="form-control" id="lastname" autocomplete="nope">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Phone Number</label>
												<input type="text" name="phone" class="form-control" id="phonenumber" autocomplete="nope">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-8">
												<label>Address </label>
												<input type="text" name="street" class="form-control" id="street" autocomplete="nope">
											</div>
											<div class="col-md-4">
												<label>Apartment Number (Optional) <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="If it's not a private house"></span></label>
												<input type="text" name="street" class="form-control" id="street" autocomplete="nope">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>City </label>
												<input type="text" name="city" class="form-control" id="city" autocomplete="nope">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>State</label>
												<input type="text" name="state" class="form-control" id="state" autocomplete="nope">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Zip Code</label>
												<input type="text" name="zipcode" class="form-control" id="zipcode" autocomplete="nope">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Delivery Date</label>
												<input type="date" data-date-inline-picker="true" name="date" class="form-control" id="date" >
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Additional Informtion (Optional) <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="right" title="You may point the preffered time for the delivery, or another useful infomation for our courier"></span></label>
												<textarea  class="form-control"></textarea>
											</div>
										</div>
								</div>
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
							<div id="collapseThree" class="accordion-body collapse in">
								<div class="panel-body">
									<table class="table table-bordered shop_tablecart">
										<thead>
											<tr>
												<th class="product-thumbnail text-center">

												</th>
												<th class="product-name">
													Product
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
											@foreach (Cart::content() as $item)
												<tr class="cart_table_item">
													<td class="product-thumbnail text-center">
														<a href="/product/{{ $item->model->slug }}">
															<img width="80" height="107" alt="" class="img-responsive" src="/images/product/{{ $item->model->image1 }}">
														</a>
													</td>
													<td class="product-name">
														<a href="/product/{{ $item->model->slug }}">{{ $item->model->name }}</a>
													</td>
													<td class="product-price text-right">
														<span class="amount">${{ $item->model->price1 }}</span>
													</td>
													<td class="product-quantity text-center">
														1
													</td>
													<td class="product-subtotal text-right">
														<span class="amount">${{ $item->model->price1 }}</span>
													</td>
												</tr>
											@endforeach
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
													<strong><span class="amount">${{ Cart::subtotal() }}</span></strong>
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
											<tr class="shipping">
												<th>
													Processing Fee
												</th>
												<td>
													<strong><span class="amount">$
													@if (Cart::subtotal() > 0)
													{{ Cart::tax()+0.3 }}
													@else
													0.00
													@endif
													</span></strong>
												</td>
											</tr>
											<tr class="total">
												<th>
													<strong>Order Total</strong>
												</th>
												<td>
													<strong><span class="amount">$
														@if (Cart::subtotal() > 0)
														{{ Cart::total()+0.3 }}
														@else
														0.00
														@endif
													</span></strong>

												</td>
											</tr>
										</tbody>
									</table>

									<hr class="tall">

									<h4 class="heading-primary">Payment</h4>

									<div class="form-group">
										<div class="col-md-12">
											<label>Name on Card</label>
											<input id="name_on_card" type="text" name="name_on_card" class="form-control" autocomplete="nope">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<label>Phone Number</label>
											<input id="phone" type="text" name="phone" class="form-control" autocomplete="nope">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<label>Email</label>
											<input id="email" type="email" name="email" class="form-control" autocomplete="nope">
										</div>
									</div>
									@if (Auth::check())
									<div class="col-md-6 ">
										<label>Choose Card</label>
										<select class="form-control">
											@foreach(Auth::user()->cards as $card)
											<option>{{ $card->name }}</option>
											@endforeach
										</select>
									</div>
									@endif
									<div class="form-row">
										<div class="col-md-12">
											<label>
												Credit or debit card
											</label>
											<div id="card-element">
												<!-- A Stripe Element will be inserted here. -->
											</div>

										<!-- Used to display form errors. -->
										<div id="card-errors" role="alert"></div>
									</div>
									</div>
									<br>


								</div>
							</div>
						</div>
						<br>
						<div class="actions-continue pull-right">
						<button type="submit" id="complete-order" class="btn btn-primary">I confirm my order</button>
						</div>
						</form>
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
									<strong><span class="amount">${{ Cart::subtotal() }}</span></strong>
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
									<strong><span class="amount">
										@if (Cart::subtotal() > 0)
										{{ Cart::total()+0.3 }}
										@else
										0.00
										@endif</span></strong>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			</div>
		</div> <!-- end container -->
	</div><!--end columns -->
<br>
@stop
@section('customjs')

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

<script>
$( "#show" ).on('change',function() {
		$.ajaxSetup({
	       headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
	       url: "{{ route('ship.index') }}",
	       type: "POST",
	       data: {id: $( "#show :selected" ).val(),
			 		},
	       success: function(response){
					 $('#firstname').val(response.data.firstname);
					 $('#lastname').val(response.data.lastname);
					 $('#phonenumber').val(response.data.phone);
					 $('#street').val(response.data.street);
					 $('#city').val(response.data.city);
					 $('#state').val(response.data.state);
					 $('#zipcode').val(response.data.zipcode);
	       }
	    });
    $.ajax();
});
</script>

<script>
(function(){
// Create a Stripe client.
var stripe = Stripe('pk_test_kNME1Uabtx5fXc1bbqpxyJSW');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    lineHeight: '18px',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

	document.getElementById('complete-order').disabled = true;

	var options = {
		name: document.getElementById('name_on_card').value,
		email: document.getElementById('email').value,
		phone: document.getElementById('phone').value,
	}

  stripe.createToken(card, options).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;

			document.getElementById('complete-order').disabled = false;

    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

function stripeTokenHandler(token) {
	var form = document.getElementById('payment-form');
	var hiddenInput = document.createElement('input');
	hiddenInput.setAttribute('type', 'hidden');
	hiddenInput.setAttribute('name', 'stripeToken');
	hiddenInput.setAttribute('value', token.id);
	form.appendChild(hiddenInput);

	form.submit();
}

})();

</script>
@stop
