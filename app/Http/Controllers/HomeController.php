<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        $activities = Activities::all();
        return view('welcome', compact('projects', 'activities'));
    }
}
