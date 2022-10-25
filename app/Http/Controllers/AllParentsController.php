<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AllParentsController extends Controller
{
    public function getAllparents()
    {

        $allparents = DB::table('users')->where('user_type', '=', 'parent')->get();

        return view('pages.parents_all.allparents')->with('parents', $allparents);
    }
}
