<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;


class ProjectController extends Controller
{
    public function projectPreview(){
        $projects = Projects::all();

        return view('project-list-page', ['projects'=>$projects]);
    }


    public function  storeProjects(Request $request)
    {
        $projects = new Projects;
        $projects->projectsName = $request->projectsName;
        $projects->projectsDesc = $request->projectsDescription;
        $projects->save();
        return redirect('students-page')->with('status', 'Activity Post has been inserted');
    }

    public function getProjects($id){
        $projects = Projects::select("*")->where('id', '=', $id)->get()->first();
    //  $students = Students::select("*")->where('course_id', '=', $id)->sortable('studentName')->get();
        return view('project-page', ['projects'=>$projects]);
    }
}
