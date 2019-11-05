<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered(){
        $users = User::all();
        return view('admin\registered')->with('users', $users);
    }

    public function registeredit($id){
            $user = User::findOrFail($id);
            return view('admin\registered-edit' )->with('user', $user);
    }

    public function registerupdate(Request $request , $id){
        $user = User::find($id);
        $username = $user->name;
        $user->usertype = $request->input('usertype');
        $user->update();

        return redirect('dashboard/register')->with('status','--> Rol van gebruiker "'.$username.'" is bijgewerkt');

    }

    public function registersoftdelete($id){
        $user= User::findOrFail($id);
        $username = $user->name;
        $user->delete();
        //softdelete
        return redirect('dashboard/register')->with('status','--> Gebruiker "'.$username.'" is gediskwalificeert');
    }

    public function readregistersoftdelete(){
        $users=User::withTrashed()->where('id',1 )->get();

        return view('admin\registered-edit' )->with('users', $users);
    }
}
