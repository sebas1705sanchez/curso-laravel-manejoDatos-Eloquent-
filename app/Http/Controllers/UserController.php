<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    public function index() {
        $user = User::all();
        return response()->json($user);
    }

    public function show($id) {
        try {
            $user = User::findOrFail($id);
            return response()->json($user);
        } catch (ModelNotFoundException $th) {
            return response()->json(['error' => 'User not found'], 404);
        }
    }
}
