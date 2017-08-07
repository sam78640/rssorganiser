@extends('master')
@extends('layout.nav')
@section('title')
    Home
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
            <div class="col-md-12">
                <form action="/rssresults" method="POST">
                    <div class="input-group">

                                <input type="text" class="form-control" name="rss_link" placeholder="Paste RSS feed here...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">Go!</button>
                                </span>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    </div><!-- /input-group -->
                </form>
            </div>
        </div>
    </div>
@endsection
