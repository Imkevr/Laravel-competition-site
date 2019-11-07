<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{   // because App\User is already imported no need to call it again
    public function index(User $user)
    {

        //dd($user); --> die and dump to test a value
            // $user = User::findOrFail($user);
            return view('profiles.index', compact('user'));
    }

    public function edit(User $user)
    {
        // unauthorized viewer will get a 403
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));

    }

    public function update(User $user){
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => '',
        ]);

        if(request('image')){
            $imagePath = request('image')->store('profile', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image'=> $imagePath];
        }
        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? [], // if image is set send image array // if not send empty array
        ));
        return redirect("/profile/$user->id");


    }
}
