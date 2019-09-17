<?php

namespace App\http\Controllers;

use Illuminate\http\Request;

class Project extends Controller
{
    public function index()
    {
     return view('project.index');
    }
}
