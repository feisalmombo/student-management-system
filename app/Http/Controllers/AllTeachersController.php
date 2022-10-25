<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AllTeachersController extends Controller
{
    public function getAllTeachers()
    {
        $auth_super = Auth::user()->id;

        $allteachers = DB::table('users')->where('user_type', '=', 'teacher')->get();

        return view('pages.teachers_all.teachers')->with('teachers', $allteachers);
    }
}
