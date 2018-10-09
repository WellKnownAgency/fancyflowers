<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public static function findByCode($code)
    {
      return self::where('code', $code)->first();
    }

    public function discount($total)
    {
      if($this->type = 'fixed') {
        return $this->value;
      } elseif ($this->type == 'percent') {
        return ($this->percent_off / 100) * $total;
      } else {
        return 0;
      }
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'coupon_user', 'coupon_id', 'user_id')->withPivot('is_use');
    }
}
