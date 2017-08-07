<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>


    <body>
        @yield('content')
    </body>

    <footer class="footer">
        <div class="container">
            <p class="text-muted">Powered by <a href="https://laravel.com">Laravel</a></p>
        </div>
    </footer>
</html>
