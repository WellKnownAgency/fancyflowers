<?php

namespace App\Classes;


use App\Coupon;
use App\FLSize;
use Gloudemans\Shoppingcart\CartItem;
use Illuminate\Support\Facades\Session;


class Cart extends \Gloudemans\Shoppingcart\Cart
{
    public function getCoupon()
    {
        if (Session::has('coupon-code')) {
            $coupon = Coupon::where('code', Session::get('coupon-code'))->first();
            return $coupon ? $coupon : null;
        }
        return null;
    }

    public function coupon($decimals = null, $decimalPoint = null, $thousandSeperator = null)
    {
        $coupon = $this->getCoupon();
        $value = 0;
        if ($coupon) {
            switch ($coupon->type):
                case 'fixed':
                    $value = $coupon->value;
                    break;
                case 'percent':
                    $content = $this->getContent();
                    $summPrice = 0;
                    foreach ($content as $item) {
                        $summPrice += $item->price * $item->qty;
                    }
                    $value = $summPrice - ($summPrice * $coupon->value / 100);
                    break;

            endswitch;
        }
        return $this->numberFormat($value, $decimals, $decimalPoint, $thousandSeperator);
    }

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
        $coupon = $this->coupon();

        $summPrice = 0;
        foreach ($content as $item) {
            $summPrice += $item->price * $item->qty;
        }

        $summPrice = $summPrice - $coupon;
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
        $coupon = $this->coupon();

        $total = $subtotal - $coupon + $tax;
        return $this->numberFormat($total, $decimals, $decimalPoint, $thousandSeperator);
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
