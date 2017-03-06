<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostForm;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostForm $request)
    {
        $post = new Post;
        $post->fill($request->only('title', 'body'))->save();
        return back();
    }
}
