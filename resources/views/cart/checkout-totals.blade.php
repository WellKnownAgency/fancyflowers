<h4 class="heading-primary">Cart Totals</h4>
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
            Free Shipping<input type="hidden" value="free_shipping" class="shipping_method" name="shipping_method">
        </td>
    </tr>

    <tr class="shipping">
        <th>
            Discount
        </th>
        <td>
            <strong><span class="amount">-$ {{ $cart::coupon() }}</span></strong>
        </td>
    </tr>

    <tr class="shipping">
        <th>
            Processing Fee
        </th>
        <td>
            <strong>
                                                        <span class="amount">$
                                                            @if ($cart::subtotal() > 0)
                                                                {{ $cart::tax() }}
                                                            @else
                                                                0.00
                                                            @endif
                                                        </span>
            </strong>
        </td>
    </tr>
    <tr class="total">
        <th>
            <strong>Order Total</strong>
        </th>
        <td>
            <strong><span class="amount">$
                    @if ($cart::subtotal() > 0)
                        {{ $cart::total() }}
                    @else
                        0.00
                    @endif
													</span></strong>

        </td>
    </tr>
    </tbody>
</table>
