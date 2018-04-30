<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Country;

class CityController extends Controller
{
    public function addCity(Country $country)
    {
        City::create([
            'country_id' => $country->id,
            'city_name' => request('city_name')
        ]);
        return back();
    }
}
