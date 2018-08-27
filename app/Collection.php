<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
  public function flowers()
    {
      return $this->belongsToMany('App\Flower');
    }
}
