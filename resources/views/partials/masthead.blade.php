<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/register">Register</a>
            <a class="nav-link" href="/logout">Logout</a>
            <a class="nav-link" href="/posts/create">Create Post</a>
            @if (Auth::check())
                <a class="nav-link ml-auto" href="#">{{ Auth::User()->name }}</a>
            @endif
        </nav>
    </div>
</div>
