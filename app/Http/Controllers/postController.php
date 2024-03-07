<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = post::latest()->get();
        $title = 'post';
        return view('post',compact('title','posts'));
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
            'foto'=> 'requiredi|mimes:jpeg,jpg,png',
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
    
     public function show()
    {
        //get posts
        $posts = post::latest()->paginate(1);
        dd($posts);

        //render view with posts
        return view('post', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('post'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'foto'     => 'image|mimes:jpeg,jpg,png',
            'judul_foto'     => 'required',
            'deskripsi'   => 'required'
        ]);

        //get post by ID
        $post = Post::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('foto')) {

            //upload new image
            $foto = $request->file('foto');
            $foto->storeAs('public/posts', $foto->hashName());

            //delete old image
            Storage::delete('post-image'.$post->foto);

            //update post with new image
            $post->update([
                'foto'     => $foto->hashName(),
                'judul_foto'     => $request->judul_foto,
                'deskripsi'   => $request->deskripsi
            ]);

        } else {

            //update post without image
            $post->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('galley-single')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //delete image
        Storage::delete('post-image'. $post->foto);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('galley-single')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
