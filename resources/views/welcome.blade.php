<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Intern Turtles</title>

    <link rel="stylesheet" href="{{ asset('/css/welcomeBlade.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fonts/font.css') }}">


</head>

<body>
    <div>

        {{-- @if (Route::has('login')) --}}

        <div style="text-align-last: center;">
            <video autoplay muted loop id="myVideo" style="height: 610px;">
                <source src="{{ asset('/img/tBeAfu7.mp4') }}" type="video/mp4">
            </video>


            <div style="bottom:0px; text-align-last:center; position:relative; bottom:400px;">
                <h6 style="color: blanchedalmond; font-size:60px; margin-top:-83px">INTERN TURTLES</h6>
                <button style="bottom:0px; text-align-last:center;" class="button_register">
                    <a href="{{ route('register') }}" style="text-decoration: none">Register</a>
                </button><br>
                <button style="bottom:0px; text-align-last:center; margin-top:5px;" class="button_register">
                    <a href="{{ route('login') }}" style="text-decoration: none">Log in</a>
                </button>
            </div>
        </div>



        {{-- @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <button><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></button><br>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif

            @endauth --}}

        {{-- @endif --}}

    </div>

</body>

</html>
