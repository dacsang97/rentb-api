<?php
/**
 * Created by PhpStorm.
 * User: slay
 * Date: 6/24/17
 * Time: 8:10 PM
 */

namespace App\Transformer;

use App\Place;
use League\Fractal\TransformerAbstract;

class PlaceTransfomer extends TransformerAbstract {
    public function transform(Place $place) {
        return [
            'id' => $place->id,
            'type' => $place->type,
            'address' => $place->address,
            'phone' => $place->phone,
            'x' => $place->lat,
            'y' => $place->lon,
            'description' => $place->description,
            'image' => $place->image,
            'price' => $place->price,
        ];
    }
}