<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostForm;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(request(), ['body' => 'required|min:2']);
        $post->addComment(request('body'));

        return back();
    }
}
