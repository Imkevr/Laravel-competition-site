<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

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

        return redirect('dashboard/register')->with('status','--> Rol van deelnemer "'.$username.'" is bijgewerkt');

    }

    public function registersoftdelete($id){
        $user= User::findOrFail($id);
        $username = $user->name;
        $user->delete();
        //softdelete
        return redirect('dashboard/register')->with('status','--> Gebruiker "'.$username.'" is gediskwalificeerd');
    }

    public function readregistersoftdelete(){
        $users=User::onlyTrashed()->get();

        return view('admin\gediskwalificeert' )->with('users', $users);
    }

    public function restoresoftdelete($id){
        User::withTrashed()->where('id', $id)->restore();
        return redirect('dashboard/registered/read/softdelete')->with('status','--> Gebruiker is opnieuw gekwalificeerd');
    }
}
