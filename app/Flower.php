<?php

namespace App;

use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use Rateable;

    protected $appends = ['price', 'old_price'];

    public function getPriceAttribute()
    {
        $price = $this->attributes['sale']
            ? $this->attributes['price1'] - ($this->attributes['price1'] * $this->attributes['sale'] / 100)
            : $this->attributes['price1'];
        return round($price, 2);
    }

    public function getOldPriceAttribute()
    {
        return $this->attributes['sale']
            ? $this->attributes['price1']
            : null;
    }

    public function collections()
    {
      return $this->belongsToMany('App\Collection');
    }


}
