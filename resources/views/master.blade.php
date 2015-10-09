<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>pebcak</title>

    {!! HTML::style('/css/pebcak.css') !!}
    {!! HTML::style('/css/styles.css') !!}
    @yield('styles')

</head>

<body>
    @if(!Request::is('feeds') && !Request::is('/'))
        @include('/partials/navbar')
    @endif

    <div id="content" class="container">
        @yield('content')
    </div>

    {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') !!}
    {!! HTML::script('/js/bootstrap.min.js') !!}
    @yield('scripts')

</body>
</html>