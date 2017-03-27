@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        @include ('partials.singlepost')

        {{-- Print out the list of comments --}}

        <hr>
        <h3>Comments</h3>
        {{-- Create box to hold all comments --}}
        <ul class="list-group">
            <div class="comments">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}
                        </strong>
                        {{ $comment->body }}
                    </li>
                @endforeach
            </div>
        </ul>

        <hr>

        {{-- Add a comment --}}
        <div class="card">
            <div class="card-block">

                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea class="form-control"
                              name="body"
                              placeholder="Your comment here"
                              required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>

                @include('partials.errors')

            </div>
        </div>
        {{--@endif--}}

    </div>
@endsection
