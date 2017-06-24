<?php

namespace App\Http\Controllers;

use App\Image;
use App\Transformer\ImageTransformer;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function index() {
        return $this->collection(Image::all(), new ImageTransformer());
    }
}
