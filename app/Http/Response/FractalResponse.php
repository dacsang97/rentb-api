<?php
/**
 * Created by PhpStorm.
 * User: slay
 * Date: 6/24/17
 * Time: 6:35 PM
 */
namespace App\Http\Response;

use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use League\Fractal\Resource\ResourceInterface;
use League\Fractal\Serializer\SerializerAbstract;
use League\Fractal\TransformerAbstract;

class FractalResponse {
    private $manager;
    private $serializer;

    public function __construct(Manager $manager, SerializerAbstract $serializer)
    {
        $this->manager = $manager;
        $this->serializer = $serializer;
        $this->manager->setSerializer($serializer);
    }

    public function item($data, TransformerAbstract $transformer, $resourceKey = null) {
        return $this->createDataArray(
            new Item($data, $transformer, $resourceKey)
        );
    }

    public function collection($data, TransformerAbstract $transformer, $resourceKey = null) {
        return $this->createDataArray(
            new Collection($data, $transformer, $resourceKey)
        );
    }

    public function createDataArray(ResourceInterface $resource) {
        return $this->manager->createData($resource)->toArray();
    }
}