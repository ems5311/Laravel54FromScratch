@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Publish a post</h1>
        <hr>

        <form method="POST" action="/posts">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="postTitle">Title</label>
                <input type="text" class="form-control" id="postTitle" name="title" placeholder="Title" required>
            </div>

            <div class="form-group">
                <label for="postBody">Body</label>
                <textarea class="form-control" id="postBody"
                          name="body" placeholder="Type your post here" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            @include('partials.errors')

        </form>

    </div>
@endsection
