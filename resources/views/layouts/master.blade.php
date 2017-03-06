<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>

<body>

@include('partials.masthead')

<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
    </div>
</div>

<div class="container">

    <div class="row">

        @yield ('content')

        @include('partials.sidebar')

    </div><!-- /.row -->

</div><!-- /.container -->

@include('partials.footer')

</body>
</html>
