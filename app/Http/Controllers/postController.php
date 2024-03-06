<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\Auth;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post', [
            'title' => 'Post'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */ 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'foto'=> 'required',
            'judul_foto'=> 'required',
            'deskripsi'=> 'required',
            
       ]);
       if($request->file('foto')){
        $validatedData['foto'] = $request->file('foto')->store('post-image','public');
       }
       $validatedData['id_user'] = Auth::user()->id;
       post::create($validatedData);

       return redirect()->back();
    }

    /**
     * Display the specified resource.p
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function viewimg($username, $id){
        $post = post::where('id', $id)->get();

         return view('gallery-single', compact('post'), [
        ]);
    }
}
