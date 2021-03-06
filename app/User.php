<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname', 'phonenumber', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function ships()
    {
      return $this->hasMany('App\Ship');
    }

    public function cards()
    {
      return $this->hasMany('App\Card');
    }

    public function comments()
    {
      return $this->hasMany('App\Comment');
    }

    public function coupons()
    {
        return $this->belongsToMany(Coupon::class, 'coupon_user', 'user_id', 'coupon_id')->withPivot('is_use');
    }
}
