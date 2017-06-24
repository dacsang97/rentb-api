<?php
/**
 * Created by PhpStorm.
 * User: slay
 * Date: 6/24/17
 * Time: 6:46 PM
 */

namespace App\Transformer;
use App\Image;
use League\Fractal\TransformerAbstract;

class ImageTransformer extends TransformerAbstract {
    public function transform(Image $image) {
        return [
            'id' => $image->id,
        ];
    }
}
