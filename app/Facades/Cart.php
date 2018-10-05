<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Cart extends \Gloudemans\Shoppingcart\Facades\Cart {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cart';
    }
}
