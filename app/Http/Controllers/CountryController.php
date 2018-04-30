<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\City;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::paginate(5);

        return view('pages.home', compact('countries'));
    }
    public function store()
    {
        $this->validate(request(), [
            'country_name' => 'required',
        ]);
        Country::create([
            'country_name' => request('country_name')
        ]);
        return back();
    }
    public function showCities(Country $country)
    {
        return view('pages.cities', compact('country'));
    }
    public function countryDelete(Country $country)
    {
        $country->cities()->delete();
        $country->delete();
        return redirect('/');
    }
    public function cityDelete(Country $country, City $city)
    {
        $city->delete();
        return back();
    }
}
