<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    { // protects route from unautherized views
        $this->middleware('auth');
    }
    public function create(){
        return view('posts.create');
    }

    public function store(){

        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required|image',
        ]);
            //store image file localy in storage/public folder in uploads directory
            // accesable with symbolic link ' php artisan storage:link'
            $imagePath = request('image')->store('uploads', 'public');

        //looking for the authenticated user and adding their id to the post
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

            return redirect('/profile/' . auth()->user()->id);

        //  dd(request()->all());//'store test' --> logging data that will be send
    }
}
