<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title-block')</title>

        <!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet"  href="css/app.css">

    </head>
    <body>

@include('inc.header')

@include('inc.messages')

@if(Request::is('/'))
@include('inc.hero')
@endif

<div class="container mt5">

<div class="row">
<div class="col-8">
@yield('content')
</div>
<div class="col-4">
@include('inc.aside')
</div>
</div>
</div>


@include('inc.footer')

    </body>
</html>
