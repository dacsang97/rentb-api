<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['original_name', 'file_name', 'slug_icon', 'slug_original'];

}
