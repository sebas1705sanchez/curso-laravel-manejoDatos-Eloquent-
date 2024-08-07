<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CompanyController extends Controller
{
    public function index() {
        $company = Company::all();
        return response()->json($company);
    }

    public function show($id) {
        try {
            $company = Company::findOrFail($id);
            return response()->json($company);
        } catch (ModelNotFoundException $th) {
            return response()->json(['error' => 'company not found'], 404);
        }
    }
}
