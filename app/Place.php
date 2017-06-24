<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ['type', 'name', 'description', 'address', 'phone', 'lat', 'lon', 'image_id', 'price_id'];

}
