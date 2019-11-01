<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        //dd($user); --> die and dump to test a value
           $user = User::findOrFail($user);
            return view('home',[
            'user' => $user,
             ] );
    }
}
