<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AllAdministratorsController extends Controller
{
    public function getAllAdministrators()
    {
        $alladministrators = DB::table('users')->where('user_type', '=', 'admin')->get();

        return view('pages.administrators_all.administrators')->with('administrators', $alladministrators);
    }
}
