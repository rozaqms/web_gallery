<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;


class singleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = post::latest()->get();
        $title = 'Single';
        return view('gallery-single', compact('title', 'posts'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //get posts
        $posts = post::latest();
        dd($posts);

        //render view with posts
        return view('gallery-single', compact('posts'));
    }

    public function image($id)
    {
        //get posts
        $posts = post::where('id',$id)->get();

        //render view with posts
        return view('gallery-single-page', compact('posts'),[
            "title" => 'Image'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //get post by ID
        $post = post::where('id',$id)->first();
        // dd($post);
        $title = 'Edit Foto';

        //render view with post
        return view('edit', compact('post','title'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        

        //get post by ID
        $post = Post::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('foto')) {

            //upload new image
            $foto = $request->file('foto');
            $foto->store('post-images','public');

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
                'judul_foto'     => $request->judul_foto,
                'deskripsi'   => $request->deskripsi
            ]);
        }

        //redirect to index
        return redirect()->back()->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = post::find($id);
        $foto = $post->foto;
        Storage::disk('public')->delete($foto);

        $post->delete();
        return redirect()->back();
    }
}
