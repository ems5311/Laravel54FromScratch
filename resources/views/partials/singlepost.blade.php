<h2 class="blog-post-title">
    <a href="posts/{{ $post->id }}">
        {{ $post->title }}
    </a>
</h2>

<p class="blog-post-meta">At {{ $post->updated_at->diffForHumans() }}</p>

{{ $post->body }}
