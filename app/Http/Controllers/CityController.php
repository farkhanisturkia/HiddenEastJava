<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::get();
        $data = [
            'cities' => $cities
        ];
        return view('welcome', $data);
    }
}
