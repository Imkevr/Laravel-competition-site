<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{   // because App\User is already imported no need to call it again
    public function index(User $user)
    {
        //dd($user); --> die and dump to test a value
          // $user = User::findOrFail($user);
            return view('profiles.index', compact('user'));
    }

    public function edit(User $user){
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => '',
        ]);

        auth()->user()->profile->update($data);
        return redirect("/profile/$user->id");


    }
}
