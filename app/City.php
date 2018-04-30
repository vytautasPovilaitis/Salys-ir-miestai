<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['country_id', 'city_name'];

    public function cities()
    {
        return $this->belongsTo(Country::class);
    }
}
