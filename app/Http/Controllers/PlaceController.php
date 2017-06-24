<?php

namespace App\Http\Controllers;

use App\Transformer\PlaceTransfomer;
use Illuminate\Http\Request;
use App\Place;

class PlaceController extends Controller
{
    public function index() {
        return $this->collection(Place::paginate(5), new PlaceTransfomer());
    }

    public function sqr($x) {
        return $x * $x;
    }

    public function isNearly($x1, $y1, $x2, $y2) {
        return sqrt($this->sqr(abs($x1-$x2)) + $this->sqr(abs($y1-$y2)))*90 <= 10;
    }

    public function nearBy(Request $request) {
        $input = $request->all();
        if (empty($input['lat']) || empty($input['lon'])) {
            return response()->json([
                'error' => 'Lat, Lon is required.',
            ], 500);
        }
        $places = Place::all();
        $result = [];
        foreach ($places as $place) {
            if ($this->isNearly($place->lat, $place->lon, $input['lat'], $input['lon'])) {
                array_push($result, $place);
            }
        }
        return $this->collection($result, new PlaceTransfomer());
    }
}
