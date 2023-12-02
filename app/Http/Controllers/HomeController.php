<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('index');
    }

    public function studentSave (Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->age = $request->age;
        $student->save();
        return view('success');
    }

    public function studentEdit (Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->age = $request->age;
        $student->save();
        return view('success');


    }
}
