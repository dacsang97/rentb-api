<?php
/**
 * Created by PhpStorm.
 * User: slay
 * Date: 6/24/17
 * Time: 6:43 PM
 */
namespace App\Providers;

use App\Http\Response\FractalResponse;
use Illuminate\Support\ServiceProvider;
use League\Fractal\Manager;

class FractalServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->bind(
            'League\Fractal\Serializer\SerializerAbstract',
            'League\Fractal\Serializer\DataArraySerializer'
        );
        $this->app->bind(FractalResponse::class, function($app) {
            $manager = new Manager();
            $serializer = $app['League\Fractal\Serializer\SerializerAbstract'];
            return new FractalResponse($manager, $serializer);
        });

        $this->app->alias(FractalResponse::class, 'fractal');
    }
    public function boot() {

    }
}