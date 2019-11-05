<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;
use App\Post;
use App\User;
class LikesController extends Controller
{
    public function store(Post $post){
        return auth()->user()->likes()->toggle($post);
    }


    /*public function vote($id){
        $vote = new Vote;
        $vote->user_id = auth()->user()->id;
        $vote->post_id = $id;
        $vote->Save();

        return redirect('/profile/' . auth()->user()->id);
    }*/

}