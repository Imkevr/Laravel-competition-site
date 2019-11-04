<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;
use App\Post;
use App\User;
class VoteController extends Controller
{
    public function vote($id){
        $vote = new Vote;
        $vote->user_id = auth()->user()->id;
        $vote->post_id = $id;
        $vote->Save();

        return redirect('/profile/' . auth()->user()->id);
    }

}
