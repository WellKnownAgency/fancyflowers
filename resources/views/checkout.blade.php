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
#card-errors {
    font-weight: normal;
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

<div id="columns" class="columns-container" >
	<!-- container -->
	<div class="container">
		<div class="page-checkout" id="form-checkout">
			<div class="row">
				<div class="checkoutleft col-lg-9 col-md-9 col-sm-9 col-xs-12">
					@if (Auth::check() != true)
					<p>Returning customer? <a href="/login">Click here to login</a>.</p>
					@else
					<p></p>
					@endif
					<div class="panel-group" id="accordion">
						<form action="{{ route('checkout.store') }}" method="POST" id="payment-form" autocomplete="off" @submit="formSubmit($event)">
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
													<select class="form-control" id="show" @change="onChangeShippingAddress($event)">
														<option value="newaddress">New Address</option>
														<option value="newaddress2">New Address</option>
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
                                        {{-- Shipping Fields Start --}}
                                            <div class="form-group">
                                                <div class="col-md-6" v-bind:class="{'has-error': validateFields.firstname.errors.length}">
                                                    <label for="firstname">First Name</label>
                                                    <input type="text" name="firstname" class="form-control" id="firstname" autocomplete="none" v-model="validateFields.firstname.value" @input="inputField($event)">
                                                    <div id="firstname-error" class="help-block">
                                                        <span v-for="error in validateFields.firstname.errors" v-text="error + ' '"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" v-bind:class="{'has-error': validateFields.lastname.errors.length}">
                                                    <label for="lastname">Last Name</label>
                                                    <input type="text" name="lastname" class="form-control" id="lastname" autocomplete="nope" v-model="validateFields.lastname.value" @input="inputField($event)">
                                                    <div id="firstname-error" class="help-block">
                                                        <span v-for="error in validateFields.lastname.errors" v-text="error + ' '"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12" v-bind:class="{'has-error': validateFields.phone.errors.length}">
                                                    <label for="phone">Phone Number</label>
                                                    <input type="text" name="phone" class="form-control" id="phone" autocomplete="none" v-model="validateFields.phone.value" @input="inputField($event)">
                                                    <div id="firstname-error" class="help-block">
                                                        <span v-for="error in validateFields.phone.errors" v-text="error + ' '"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-8" v-bind:class="{'has-error': validateFields.street.errors.length}">
                                                    <label for="street">Address</label>
                                                    <input type="text" name="street" class="form-control" id="street" autocomplete="none" v-model="validateFields.street.value" @input="inputField($event)">
                                                    <div id="firstname-error" class="help-block">
                                                        <span v-for="error in validateFields.street.errors" v-text="error + ' '"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="apartment">Apartment Number (Optional) <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="If it's not a private house"></span></label>
                                                    <input type="text" name="apartment" class="form-control" id="apartment" autocomplete="none">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12" v-bind:class="{'has-error': validateFields.city.errors.length}">
                                                    <label for="city">City</label>
                                                    <input type="text" name="city" class="form-control" id="city" autocomplete="none" v-model="validateFields.city.value" @input="inputField($event)">
                                                    <div id="firstname-error" class="help-block">
                                                        <span v-for="error in validateFields.city.errors" v-text="error + ' '"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12" v-bind:class="{'has-error': validateFields.state.errors.length}">
                                                    <label for="state">State</label>
                                                    <input type="text" name="state" class="form-control" id="state" autocomplete="none" v-model="validateFields.state.value" @input="inputField($event)">
                                                    <div id="firstname-error" class="help-block">
                                                        <span v-for="error in validateFields.state.errors" v-text="error + ' '"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12" v-bind:class="{'has-error': validateFields.zipcode.errors.length}">
                                                    <label for="zipcode">Zip Code</label>
                                                    <input type="text" name="zipcode" class="form-control" id="zipcode" autocomplete="none" v-model="validateFields.zipcode.value" @input="inputField($event)">
                                                    <div id="firstname-error" class="help-block">
                                                        <span v-for="error in validateFields.zipcode.errors" v-text="error + ' '"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="date">Delivery Date</label>
                                                    <input type="date" data-date-inline-picker="true" name="date" class="form-control" id="date" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="additional">Additional Informtion (Optional) <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="right" title="You may point the preffered time for the delivery, or another useful infomation for our courier"></span></label>
                                                    <textarea class="form-control" name="additional" id="additional"></textarea>
                                                </div>
                                            </div>
                                        {{-- Shipping Fields  End--}}
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
													Discount {{ session()->get('coupon')['name'] }}
												</th>
												<td>
													<strong><span class="amount">-$100
													</span></strong>
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
										<div class="col-md-12" v-bind:class="{'has-error': validateFields.name_on_card.errors.length}">
											<label for="name_on_card">Name on Card</label>
											<input id="name_on_card" type="text" name="name_on_card" class="form-control" autocomplete="none" v-model="validateFields.name_on_card.value" @input="inputField($event)">
                                            <div id="firstname-error" class="help-block">
                                                <span v-for="error in validateFields.name_on_card.errors" v-text="error + ' '"></span>
                                            </div>
                                        </div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<label for="phonenumber">Phone Number</label>
											<input id="phonenumber" type="text" name="phonenumber" class="form-control" autocomplete="none">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12" v-bind:class="{'has-error': validateFields.email.errors.length}">
											<label for="email">Email</label>
											<input id="email" type="email" name="email" class="form-control" autocomplete="none" v-model="validateFields.email.value" @input="inputField($event)">
                                            <div id="firstname-error" class="help-block">
                                                <span v-for="error in validateFields.email.errors" v-text="error + ' '"></span>
                                            </div>
										</div>
									</div>
									<!--@if (Auth::check())
									<div class="col-md-6 ">
										<label>Choose Card</label>
										<select class="form-control">
											@foreach(Auth::user()->cards as $card)
											<option>{{ $card->name }}</option>
											@endforeach
										</select>
									</div>
									@endif-->
									<div class="form-row">
										<div class="col-md-12">
											<label>
												Credit or debit card
											</label>
											<div id="card-element">
												<!-- A Stripe Element will be inserted here. -->
											</div>

                                            <!-- Used to display form errors. -->
                                            <div class="has-error">
                                                <div id="card-errors" class="help-block" role="alert"></div>
                                            </div>
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
									Free Shipping
								</td>
							</tr>

							<tr class="shipping">
								<th>
									Discount {{ session()->get('coupon')['name'] }}
								</th>
								<td>
									{{ session()->get('coupon')['discount'] }}
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
					@if (! session()->has('coupon'))
					<p>Have a Coupon?</p>
					<form action="{{ route('coupon.store') }}" method="POST" autocomplete="off">
						{{ csrf_field() }}
						<div class="form-group">
								<input type="text" name="coupon_code" class="form-control" id="coupn_code" autocomplete="off">
						</div>
						<div style="margin-top: 10px; float:right;">
							<button type="submit" class="btn btn-primary" >Apply</button>
						</div>
					</form>
					@endif
				</div>
			</div>
			</div>
		</div> <!-- end container -->
	</div><!--end columns -->
<br>
@stop

@section('customjs')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.4/lodash.min.js"></script>

<script>
    var vmForm = new Vue({
        el: '#form-checkout',
        data: {
            validateFields: {
                firstname: {
                    value: '',
                    errors: []
                },
                lastname: {
                    value: '',
                    errors: []
                },
                phone: {
                    value: '',
                    errors: []
                },
                street: {
                    value: '',
                    errors: []
                },
                city: {
                    value: '',
                    errors: []
                },
                state: {
                    value: '',
                    errors: []
                },
                zipcode: {
                    value: '',
                    errors: []
                },
                name_on_card: {
                    value: '',
                    errors: []
                },
                email: {
                    value: '',
                    errors: []
                },
            }
        },
        methods: {
            onChangeShippingAddress: function(e)
            {
                $.ajaxSetup({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    url: "{{ route('ship.index') }}",
                    type: "POST",
                    data: {id: $( "#show :selected" ).val(),
                    },
                    success: function(response){
                        $('#firstname').val(response.data.firstname);
                        $('#lastname').val(response.data.lastname);
                        $('#phone').val(response.data.phone);
                        $('#street').val(response.data.street);
                        $('#city').val(response.data.city);
                        $('#state').val(response.data.state);
                        $('#zipcode').val(response.data.zipcode);
                    }
                });
                $.ajax();
            },
            inputField: _.debounce(function(el)
            {
                axios.post('{{route('checkout.validate-field')}}', {
                    field: el.target.name,
                    value: el.target.value
                })
                .then(function (response) {
                    this.vmForm.validateFields[el.target.name].errors = [];
                })
                .catch(function (error) {
                    this.vmForm.validateFields[el.target.name].errors = error.response.data.errors[el.target.name];
                });
            }, 800),
            formatValidateFields: function ()
            {
                var fields = {};
                for (var fname in this.validateFields) {
                    fields[fname] = this.validateFields[fname].value;
                }
                return fields;
            },
            formSubmit: function (e)
            {
                e.preventDefault();
                document.getElementById('complete-order').disabled = true;

                var options = {
                    name: document.getElementById('name_on_card').value,
                    email: document.getElementById('email').value,
                    phone: document.getElementById('phonenumber').value,
                }

                window.stripe.createToken(card, options).then(function(result) {

                    axios.post('{{route('checkout.validate-form')}}', this.vmForm.formatValidateFields())
                        .then(function (response) {
                            if (!result.error) {
                                // Send the token to your server.
                                stripeTokenHandler(result.token);
                            }
                            document.getElementById('complete-order').disabled = false;
                        }).catch(function (error) {
                            for (var fname in error.response.data.errors) {
                                this.vmForm.validateFields[fname].errors = error.response.data.errors[fname];
                            }
                            // Inform the user if there was an error.
                            var errorElement = document.getElementById('card-errors');
                            if ('error' in result) {
                                errorElement.textContent = result.error.message;
                            } else {
                                errorElement.textContent = '';
                            }
                            document.getElementById('complete-order').disabled = false;
                        });
                });
            }
        }
    })
</script>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

<script>
// Create a Stripe client.
var stripe = Stripe('{{ env('STRIPE_API_KEY') }}');

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

function stripeTokenHandler(token) {
	var form = document.getElementById('payment-form');
	var hiddenInput = document.createElement('input');
	hiddenInput.setAttribute('type', 'hidden');
	hiddenInput.setAttribute('name', 'stripeToken');
	hiddenInput.setAttribute('value', token.id);
	form.appendChild(hiddenInput);

	form.submit();
}
</script>
@stop
