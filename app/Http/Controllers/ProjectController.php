<?php

namespace App\http\Controllers;

use Illuminate\http\Request;
use App\Project;

class Project extends Controller
{
    public function index()
    {
    $projects = Project::all();
     return view('projects.ex')->with('projects', $projects);
    }
}
