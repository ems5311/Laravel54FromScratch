<h2 class="blog-post-title">
    <a href="posts/{{ $post->id }}">
        {{ $post->title }}
    </a>
</h2>

<p class="blog-post-meta">By {{ $post->user->name }} - {{ $post->updated_at->diffForHumans() }}</p>

<p style="word-break: break-all;">{{ $post->body }}</p>
