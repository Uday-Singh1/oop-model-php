<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.projecten', ['projects' => $projects]);
    }

    public function add()
    {
        // Maak een model aan
        $model = new Project();
        // define de velden
        $model->titel = 'mijn data';
        // sla model op
        $model->save();
    }

    public function show(Project $project)
    {
        // geef de $project variable door aan de view
        return view('projects.show', ['project' => $project]);
    }
}
