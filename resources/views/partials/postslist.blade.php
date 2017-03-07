@foreach($posts as $post)

    <div class="blog-post">

        @include ('partials.singlepost')

    </div><!-- /.blog-post -->

@endforeach

<nav class="blog-pagination">

    <a class="btn btn-outline-{{ $posts->currentPage() == 1 ? 'secondary disabled' : 'primary' }}"
       href="{{ $posts->previousPageUrl()  }}">Older</a>
    <a class="btn btn-outline-{{ $posts->hasMorePages() ? 'primary' : 'secondary disabled' }}"
       href="{{ $posts->nextPageUrl() }}">Newer</a>

</nav>
