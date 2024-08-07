<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CityController extends Controller
{
    public function index() {
        $city = City::all();
        return response()->json($city);
    }

    public function show($id) {
        try {
            $city = City::findOrFail($id);
            return response()->json($city);
        } catch (ModelNotFoundException $th) {
            return response()->json(['error' => 'User not found'], 404);
        }
    }
}
