<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StudentController extends BaseController
{
    public function showname($name){
return view('student?',compact('name'));
    }
    public function showage($age){
        return view('student?',compact('age'));
    }
    public function showdate($date){
        return view('student?',compact('date'));
    }
}
