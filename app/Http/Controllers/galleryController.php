<?php

namespace App\Http\Controllers;
use App\Models\post;

use Illuminate\Http\Request;

class galleryController extends Controller
{
    public function show()
    {
        //get posts
        $posts = post::latest();
        dd($posts);

        //render view with posts
        return view('gallery', compact('posts'));
    }

    public function index()
    {
        $posts = post::latest()->get();
        $title = 'Gallery';
        return view('gallery',compact('title','posts'));
    }
}
