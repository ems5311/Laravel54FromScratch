@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        @include ('partials.singlepost')

        {{-- Print out the list of comments --}}

        <hr>
        <h3>Comments</h3>
        {{-- Create box to hold all comments --}}
        {{--@if ($comments->count())--}}
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
        {{--@endif--}}

    </div>
@endsection
