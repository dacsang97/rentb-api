<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = ['price_bike', 'price_bike_detail', 'price_mbike', 'price_mbike_detail'];
}
