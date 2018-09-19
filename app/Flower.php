<?php

namespace App;

use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
  use Rateable;
  public function collections()
    {
      return $this->belongsToMany('App\Collection');
    }
}
