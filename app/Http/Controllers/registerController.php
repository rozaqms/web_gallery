<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class registerController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        // return request()->all();


        // $data = [
        //     'name' => $request->name,
        //     'real' => $request->real,
        //     'email' => $request->email,
        //     'password' => $request->password
        // ];
    

        // User:: create($data);

       $validatedData = $request->validate([
            'name'=> 'required',
            // 'real'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            
       ]);

        User:: create($validatedData);

        return redirect('/login');
    }


}
