<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function projectPreview(){
        return view('project-page');
    }



}
