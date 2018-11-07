<?php

namespace App;

use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use Rateable;

    protected $appends = ['price_default', 'price_old_default'];

    // ACCESSORS

    public function getPriceDefaultAttribute()
    {
        if ($this->sizes)
            return $this->sizes->where('name', FLSize::DEFAULT)->first()->pivot->price;
    }

    public function getPriceOldDefaultAttribute()
    {
        if ($this->sizes)
            return $this->sizes->where('name', FLSize::DEFAULT)->first()->pivot->price_old;
    }

    // RELATIONS

    public function collections()
    {
      return $this->belongsToMany(Collection::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(FLSize::class, 'flower_flsize', 'flower_id', 'flsize_id')->using(FlowerFLSize::class)->withPivot('price');
    }

    // SCOPES

    public function scopeIsBestsellers($query)
    {
        return $query->where('best', '1');
    }

    public function getPriceOfSize($size_id)
    {
        return $this->sizes->where('id', $size_id)->first()->pivot->price;
    }


}
