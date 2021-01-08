<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Student;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function dashboard(Request $request){
        $data['students'] = Student::all()->count();
        return view('admin.dashboard',$data);
    }


    public function students(Request $request){
        $data['students'] = Student::all();
        return view('admin.students',$data);
    }

}
