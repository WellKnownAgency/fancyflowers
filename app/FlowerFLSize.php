<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class FlowerFLSize extends Pivot
{
    protected $table = 'flower_flsize';

    protected $appends = ['price_old'];

    public static function formatPrice($price)
    {
        if (preg_match("/\.00?$/", $price, $matches)) {
            return (int) $price;
        } elseif (preg_match("/\.[1-9]$/", $price, $matches)) {
            return $price . '0';
        }
        return $price;
    }

    public static function calcPriceOfSale($price, $sale)
    {
        $calc_price = $sale
            ? $price - ($price * $sale / 100)
            : $price;
        return round($calc_price, 2);
    }

    public function getSale()
    {
        if ($pivot = $this->pivotParent and $pivot instanceof Flower) {
            return $this->pivotParent->where('id', $this->attributes['flower_id'])->first()->sale;
        }
        return null;
    }

    public function getPriceNewAttribute()
    {
        $price = $this->attributes['price'];
        if ($sale = $this->getSale()) {
            $price_on_sale = self::calcPriceOfSale($price, $sale);
            return self::formatPrice($price_on_sale);
        }
        return self::formatPrice($price);
    }

    public function getPriceOldAttribute()
    {
        $price = $this->attributes['price'];
        if ($sale = $this->getSale()) {
            return self::formatPrice($price);
        }
        return null;
    }
}
