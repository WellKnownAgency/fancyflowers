<h4 class="title_block">Cart Totals</h4>
<table class="table cart-totals">
    <tbody>
    <tr class="cart-subtotal">
        <th>
            <strong>Cart Subtotal</strong>
        </th>
        <td>
            <strong><span class="amount">$ {{ $cart::subtotal() }}</span></strong>
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

    @if( $cart::coupon() > 0)
    <tr class="shipping">
        <th>
            Discount
        </th>
        <td>
            - $ {{ $cart::coupon() }}
        </td>
    </tr>
    @endif

    <tr class="total">
        <th>
            <strong>Order Total</strong>
        </th>
        <td>
            <strong><span class="amount">
                    @if ($cart::subtotal() > 0)
                        {{ $cart::total() }}
                    @else
                        0.00
                    @endif</span></strong>
        </td>
    </tr>
    </tbody>
</table>
