<?php

namespace App\Http\Controllers;

use App\Models\Management;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Project\ProjectType;

class HomeController extends Controller
{
    public function project()
    {

        $projectTypes = ProjectType::all();
        return view('projects', compact('projectTypes'));
    }

    public function management()
    {

        $management = Management::where('status',1)->orderBy('placement','ASC')->get();
        return view('management', compact('management'));
    }

    public function services()
    {

        $services = Service::all();
        return view('services', compact('services'));
    }
}
