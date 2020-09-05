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
        
            <h1 class='title'>Tech<strong id='art'>Art</strong></h1>
            <div class="container">
        <div class='navbar'>
            <ul class='navList'>
                <li class='description'>
                   <a href="{{ url('/')}}">Music</a> 
                </li>
                <li  class='description'>
                    <a href="{{ url('/techmodel')}}">3D Model</a> 
                </li>
                <li class='description'>
                    <a href="{{ url('/drawing')}}">Drawing</a>
                </li>
               
            </ul>
            
        </div>
        <div class="Content">
            @foreach($drawing as $drawmodels)
            <div class="ContentItem">
                <h2 class="contentName" id="modelName">{{ $drawmodels ->name }}</h2><br>
              <img src="uploads/drawing/{{ $drawmodels ->image }}" />               
            </div>
               
            @endforeach
        </div>
        </div>
        
    </body>
</html>
