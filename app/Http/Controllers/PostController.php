<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostForm;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display the main view of the site
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'desc')
            ->paginate(3);

        return view('posts.index', compact('posts'));
    }

    /**
     * Display the form that allows the user to fill in a post
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store the given post in the Model
     *
     * @param PostForm $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostForm $request)
    {
        $post = new Post;
        $post->fill($request->only('title', 'body'))->save();
        return back();
    }

    /**
     * Show the post matching the given Post (bound to $id with Route-Model Binding)
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
