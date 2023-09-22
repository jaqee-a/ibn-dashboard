<?php

namespace App\Http\Controllers;

use App\Helpers\ErpResponse;
use App\Models\Static\City;
use App\Models\Static\Town;
use Illuminate\Http\Request;

class StaticDataController extends Controller
{
        /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:api');
    }

    public function getCities() {
        $response = new ErpResponse();
        $response->setSuccess(true);
        $cities = City::all();
        $response->setJsonContent($cities, "cities");
        return $response;
    }

    public function getTowns(Request $request) {
        $response = new ErpResponse();
        $response->setSuccess(true);
        $towns_query = Town::query();
        if($request->query->has('city_id')) {
            $towns_query->where('city_id', $request->query('city_id'));
        }
        $towns = $towns_query->get();
        $response->setJsonContent($towns, "towns");
        return $response;
    }

}
