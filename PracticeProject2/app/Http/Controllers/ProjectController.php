<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Project;
use App\models\Employee;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function add_Project()
    {
        $project = new Project();
        $project->name='TourneyX';

        $project->save();
    }



    public function show_Project($id){
        $projects=Employee::find($id)->projects;
       // return $projects;
       return view('employees-mgmt/project', ['projects' => $projects]);
      }
}
