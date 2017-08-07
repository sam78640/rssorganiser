@extends('master')
@extends('layout.nav')
@section('title')
    RSS Results for {{$rss_feed->channel->title}}
@endsection

@section('nav-links')
    <ul class="nav navbar-nav navbar-right">
        <li><a href="/auth/login">Login</a></li>
        <li><a href="/auth/signup">Sign Up</a></li>
    </ul>

@endsection

@section('content')
    <div class="container">
        <h1>{{$rss_feed->channel->title}}</h1>

        @foreach($rss_feed->channel->item as $item)
            <div class="well">
                <h3><a href="{{$item->link}}">{{$item->title}}</a></h3>
                <p><i>{{$item->pubDate}}</i></p>
                <p>{{$item->description}}</p>
            </div>
        @endforeach
    </div>

@endsection
