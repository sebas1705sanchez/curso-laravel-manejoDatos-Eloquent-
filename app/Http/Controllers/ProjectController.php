<?php

namespace App\Http\Controllers;

USE App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return response()->json($projects);
    }

    public function show($id) {
        try {
            $projects = Project::findOrFail($id);
            return response()->json($projects);
        } catch (ModelNotFoundException $th) {
            return response()->json(['error' => 'User not found'], 404);
        }

    }
} 
