<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // This part requires user to be logged in(authenticated)
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'another' => '',
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        auth()->user()->posts()->create($data);

        dd(request()->all());
    }
}
