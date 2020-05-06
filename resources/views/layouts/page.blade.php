<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mock Website - Vue</title>

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/css/app.css">
    </head>
    <body class="tile is-ancestor">
        <div class="tile is-2">
            @include('layouts.menu')
        </div>

        <div class="tile is-parent">
            <div class="tile is-child">
                @include('layouts.header')
                @yield('content')
            </div>
        </div>

        <script src="<?php echo URL::to('/'); ?>/js/app.js"></script>
    </body>
</html>