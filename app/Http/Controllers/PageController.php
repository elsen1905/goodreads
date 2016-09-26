<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Auth;

class PageController extends Controller
{
    public function homepage(){
    	return view('homepage');
    }

    public function profile($id){
        $user = User::find($id);
    	return view('profile', compact('user'));
    }

    public function search(){
    	return view('search');
    }

    public function settings($id){
        $user = User::find($id);
        if(Auth::user()->id == $user->id){
            return view('accountsettings');
        }else{
            return redirect('/profile/'.$id);
        }
    }

    public function user_take(){
        $data=User::all();
        return $data;
    }

    
}
