<?php

namespace App\Http\Controllers;

use App\Models\Project\ProjectType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $projectTypes = ProjectType::all();
        return view('projects', compact('projectTypes'));
    }
}