<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        $data = User::where('id',$user);
        return $data;
        $title = 'User';
        return view('contact',compact('user','title'));
    }
    public function show()
    {
        //get posts
        $user = user::latest();
        dd($user);

        //render view with posts
        return view('contact', compact('user'));
    }
}


