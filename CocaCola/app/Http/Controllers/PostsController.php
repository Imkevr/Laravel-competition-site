<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    { // protects route from unautherized views
        $this->middleware('auth');
    }
    public function create(){
        return view('posts.create');
    }
    public function index(){
        $users = auth()->user()->pluck('id');
        //latest() other notation to show post in DESC
        $posts = Post::whereIn('user_id', $users)->latest()->get();
        //dd($users);
        //dd( $posts );
        return view('posts.index', compact('posts'));
    }
    public function store(){

        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required|image',
        ]);
            //store image file localy in storage/public folder in uploads directory
            // accesable with symbolic link ' php artisan storage:link'
            $imagePath = request('image')->store('uploads', 'public');

            //intervention/image --> cuts image and resizes it / fit to size
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
            $image->save();

        //looking for the authenticated user and adding their id to the post
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);
            return redirect('/profile/' . auth()->user()->id);
        //  dd(request()->all());//'store test' --> logging data that will be send
    }
    // by providing model it will find the post data
    public function show(\App\Post $post)
    {
        // scompact = same as passing a array
        return view('posts.show', compact('post'));
    }
}
