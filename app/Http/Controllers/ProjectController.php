<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
   public function index(){
      $projects = Project::all();
        return view('projects.projecten', ['projects' => $projects]);
   }


   public function add() {
            // Maak een model aan
    $model = new Project();
    // definieer de velden
    $model->titel = 'mijn data';
    // sla het model op
    $model->save();
   }
}
