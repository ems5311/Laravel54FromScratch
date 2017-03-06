@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Publish a post</h1>
        <hr>

        <form method="POST" action="/posts">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="postTitle">Title</label>
                <input type="text" class="form-control" id="postTitle" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="postBody">Body</label>
                <textarea class="form-control" id="postBody"
                          name="body" placeholder="Type your post here"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
