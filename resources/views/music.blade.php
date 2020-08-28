<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/welcomeHome.css') }}" />
        
        <!-- Styles --> 
    </head>
    <body>
        <h1 class='title'>Tech Art</h1>

        <div class='navbar'>
            <ul class='navList'>
                <li class='description'>
                   <a href="">Music</a> 
                </li>
                <li  class='description'>
                    <a href="">3D Model</a> 
                </li>
                <li class='description'>
                    <a href="">Drawing</a>
                </li>
                @foreach($music as $musics)
                <li><strong>{{ $musics ->name }}</strong>
                    <strong>{{ $musics ->video }}</strong>
                </li>
                @endforeach
            </ul>
            
        </div>
    </body>
</html>
