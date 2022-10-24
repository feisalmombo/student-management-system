<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AllStudentsController extends Controller
{
    public function getAllStudents()
    {
        $auth_super = Auth::user()->id;

        $allstudents = DB::table('users')->where('user_type', '=', 'student');

        return view('pages.students_all.students');
    }
}
