<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Management;
use Illuminate\Http\Request;
use App\Models\Project\Project;
use App\Models\Project\ProjectType;
use App\Models\Project\ProjectCategory;

class HomeController extends Controller
{
    public function project()
    {

        $projectTypes = ProjectCategory::all();
        $projects = Project::all();
        return view('projects', compact('projectTypes', 'projects'));
    }

    public function management()
    {

        $management = Management::where('status', 1)->orderBy('placement', 'ASC')->get();
        return view('management', compact('management'));
    }

    public function services()
    {

        $services = Service::all();
        return view('services', compact('services'));
    }
}