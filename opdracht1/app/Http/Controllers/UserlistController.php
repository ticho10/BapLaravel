<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserlistController extends Controller
{


    public function index()
    {
//        $users = User::all();
        $users = DB::table('users')->Paginate(10);
        return view('userlist', compact('users'));
    }
}
