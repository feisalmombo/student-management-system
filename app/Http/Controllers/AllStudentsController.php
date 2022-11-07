<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AllStudentsController extends Controller
{
    public function getAllStudents()
    {
        // Get all students
        $allstudents = DB::table('users')->where('user_type', '=', 'student')->get();

        return view('pages.students_all.students')->with('students', $allstudents);
    }
}
