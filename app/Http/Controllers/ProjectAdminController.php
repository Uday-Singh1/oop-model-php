<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(5);
        return view('dashboard.projects.index', ['projecten' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();
        return view('dashboard.projects.create', ['project' => $project]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titel' => 'required|min:3',
            'description' => 'required',
            'published' => '',
        ]);

        $data['published'] = isset($data['published']);

        $project = new Project($data);
        $project->save();

        return redirect()->route('project.index');
    }

    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', ['project' => $project]);
    }

    public function destroy(Project $project)
    {
        // Voeg hier de logica toe om een project te verwijderen
    }
}
