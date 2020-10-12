<?php

namespace App\Models\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function create()
    {
        return view('users/create');
//        return view('user/aaa');
    }
}
