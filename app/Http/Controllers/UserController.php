<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function create()
    {
        return view('users/create');
//        return view('user/aaa');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
