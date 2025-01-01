<?php

namespace App\Http\Controllers;

use App\Models\Management;
use Illuminate\Http\Request;
use App\Models\Project\ProjectType;

class HomeController extends Controller
{
    public function index()
    {

        $projectTypes = ProjectType::all();
        return view('projects', compact('projectTypes'));
    }

    public function management()
    {

        $management = Management::all();
        return view('management', compact('management'));
    }

    public function services()
    {

        $services = Management::all();
        return view('services', compact('services'));
    }
}
