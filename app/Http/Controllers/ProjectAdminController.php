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

       $data = $this->validateProject($request);
    
        $project = new Project($data);
        $project->save();

        return redirect()->route('project.index');
    }

    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', ['project' => $project]);
    }



    public function update(Request $request, Project $project)
    {
        
        $data = $this->validateProject($request);

        $project->update($data);
        $project->save();

        return redirect()->route('project.index');
    }




    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('project.index');
    }


    protected function validateProject(Request $request){

        $data = $request->validate([
            'titel' => 'required|min:3',
            'description' => 'required',
            'published' => '',
        ]);

   
        $data['published'] = false;
        if(isset($data['published'])){
            $data['published'] = true;
        }

        return $data;
    }
}
