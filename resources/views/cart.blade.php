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
        <li><span>View All</span></li>
      </ul>
      <h2 class="bread-title">Shopping Cart</h2>
    </div>
  </div>
</div><!-- end breadcrumb -->

<div id="columns" class="columns-container">
  <!-- container -->
  <div class="container">
    <div id="order-detail-content" class="table_block table-responsive">
      <table id="cart_summary" class="table table-bordered">
        <thead>
          <tr>
            <th class="cart_delete last_item">&nbsp;</th>
            <th class="cart_product first_item">Product</th>
            <th class="cart_description item">Description</th>
            <th class="cart_unit item text-right">Unit price</th>
            <th class="cart_quantity item text-center">Qty</th>
            <th class="cart_total item text-right">Total</th>
          </tr>
        </thead>
        <tbody>
          @foreach (Cart::content() as $item)
          <tr>
            <td class="cart_delete text-center">
              <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
              <button type="submit" title="Remove this item" class="remove" href="#">
                <i class="fa fa-times"></i>
              </button>
            </form>
            </td>
            <td class="cart_product">
              <a href="/product/{{ $item->model->slug }}">
                <img width="80" height="107" alt="" class="img-responsive" src="/images/product/{{ $item->model->image1 }}">
              </a>
            </td>
            <td class="cart_description">
              <a href="/product/{{ $item->model->slug }}">{{ $item->model->name }}</a>
                <p>Size: {{ App\FLSize::getSizeDisplayName($item->options->size) }}</p>
            </td>
            <td class="cart_unit text-right">
              <span class="amount">${{ $item->price }}</span><br>@if($item->options->price_old)<span class="old_price">${{ $item->options->price_old }}</span>@endif
            </td>
            <td class="cart_quantity text-center">
              <select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
                @for ($i = 1; $i < 10 + 1 ; $i++)
                    <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
              </select>
            </td>
            <td class="cart_total text-right">
              <span class="amount">${{ $item->subtotal }}</span>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td rowspan="3" colspan="3"></td>
            <td colspan="2" class="text-right">Total products</td>
            <td colspan="1" class="price text-right" id="total_product">${{ Cart::subtotal() }}</td>
          </tr>
        </tfoot>
      </table>
    </div><!-- end order-detail-content -->
    <div class="cart_navigation">
      <a href="{{ route('checkout.index') }}" class="button btn btn-primary standard-checkout pull-right" title="Proceed to checkout">
        <span>Proceed to checkout</span>
        <i class="fa fa-angle-right ml-xs"></i>
      </a>
    </div><!-- end cart_navigation -->
  </div> <!-- end container -->
</div><!--end columns -->
<br>
@stop

@section('customjs')
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
        (function(){
            const classname = document.querySelectorAll('.quantity')
            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')
                    axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        // console.log(error);
                        window.location.href = '{{ route('cart.index') }}'
                    });
                })
            })
        })();
    </script>
@stop
