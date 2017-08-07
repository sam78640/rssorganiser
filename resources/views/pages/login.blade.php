@extends('master')
@extends('layout.nav')

@section('title')
    Login
@endsection

@section('nav-links')
    <ul class="nav navbar-nav navbar-right">
        <li><a href="/auth/login">Login</a></li>
        <li><a href="/auth/signup">Sign Up</a></li>
    </ul>

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Login</h3>
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="text" name="username" placeholder="Username" class="form-control">
                        <input type="text" name="password" placeholder="Password" class="form-control">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
