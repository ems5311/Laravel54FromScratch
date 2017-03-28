@extends('layouts.master')

@section('content')
    <div class="col-md-8">
        <h2>Sign In</h2>

        <br/>

        <form method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

            @include('partials.errors')
        </form>
    </div>
@endsection