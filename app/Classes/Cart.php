<?php

namespace App\Classes;


use Gloudemans\Shoppingcart\CartItem;


class Cart extends \Gloudemans\Shoppingcart\Cart
{
    /**
     * Get the total tax of the items in the cart.
     *
     * @param int    $decimals
     * @param string $decimalPoint
     * @param string $thousandSeperator
     * @return float
     */
    public function tax($decimals = null, $decimalPoint = null, $thousandSeperator = null)
    {
        $content = $this->getContent();
        $tax = config('cart.tax');

        $summPrice = 0;
        foreach ($content as $item) {
            $summPrice += $item->price;
        }
        $priceTax = $summPrice * $tax / 100 + 0.3 + $summPrice;
        $summPriceTax = $priceTax * $tax / 100 + 0.3;
        return $this->numberFormat($summPriceTax, $decimals, $decimalPoint, $thousandSeperator);
    }

    /**
     * Get the total price of the items in the cart.
     *
     * @param int    $decimals
     * @param string $decimalPoint
     * @param string $thousandSeperator
     * @return string
     */
    public function total($decimals = null, $decimalPoint = null, $thousandSeperator = null)
    {

        $subtotal = $this->subtotal();
        $tax = $this->tax();
        return $this->numberFormat($subtotal + $tax, $decimals, $decimalPoint, $thousandSeperator);
        /*$content = $this->getContent();

        $total = $content->reduce(function ($total, CartItem $cartItem) {
            return $total + ($cartItem->qty * $cartItem->priceTax);
        }, 0);

        return $this->numberFormat($total, $decimals, $decimalPoint, $thousandSeperator);*/
    }

    /**
     * Get the Formated number
     *
     * @param $value
     * @param $decimals
     * @param $decimalPoint
     * @param $thousandSeperator
     * @return string
     */
    private function numberFormat($value, $decimals, $decimalPoint, $thousandSeperator)
    {
        if(is_null($decimals)){
            $decimals = is_null(config('cart.format.decimals')) ? 2 : config('cart.format.decimals');
        }
        if(is_null($decimalPoint)){
            $decimalPoint = is_null(config('cart.format.decimal_point')) ? '.' : config('cart.format.decimal_point');
        }
        if(is_null($thousandSeperator)){
            $thousandSeperator = is_null(config('cart.format.thousand_seperator')) ? ',' : config('cart.format.thousand_seperator');
        }

        return number_format($value, $decimals, $decimalPoint, $thousandSeperator);
    }
}
