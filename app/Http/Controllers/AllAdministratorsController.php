<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AllAdministratorsController extends Controller
{
    public function getAllAdministrators()
    {
        $auth_super = Auth::user()->id;

        $alladministrators = DB::table('users')->where('user_type', '=', 'administrator');
    }
}
