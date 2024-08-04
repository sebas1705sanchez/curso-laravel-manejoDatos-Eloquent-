<?php

namespace App\Http\Controllers;

USE App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return response()->json($projects);
    }
} 
