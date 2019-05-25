<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(\App\User $user)
    {   
        return view('profiles.index', compact('user'));
    }

    public function edit(\App\User $user)
    {
        return view('profiles.edit', compact('user'));
    }
}
