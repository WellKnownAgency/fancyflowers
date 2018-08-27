<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
  public function collections()
    {
      return $this->belongsToMany('App\Collection');
    }
}
