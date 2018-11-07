<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FLSize extends Model
{
    protected $table = 'flsizes';
    protected $fillable = ['name', 'display_name'];

    const DEFAULT = 'original';

    public $timestamps = false;

    public function flowers()
    {
        return $this->belongsToMany(Flower::class, 'flower_flsize', 'flsize_id', 'flower_id')->using(FlowerFLSize::class)->withPivot('price');
    }

    public static function getSizeDisplayName($size_id)
    {
        return self::find($size_id)->display_name;
    }

    public static function getSizeDefaultId()
    {
        return self::where('name', self::DEFAULT)->first()->id;
    }
}
