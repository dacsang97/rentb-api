<?php

namespace App\Http\Controllers;

use App\Http\Response\FractalResponse;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use League\Fractal\TransformerAbstract;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    private $fractal;

    public function __construct(FractalResponse $fractal)
    {
        $this->fractal = $fractal;
    }

    public function item($data, TransformerAbstract $transformer, $resourceKey = null) {
        return $this->fractal->item($data, $transformer, $resourceKey);
    }

    public function collection($data, TransformerAbstract $transformer, $resourceKey = null) {
        return $this->fractal->collection($data, $transformer, $resourceKey);
    }
}
