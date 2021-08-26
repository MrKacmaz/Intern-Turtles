<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Intern Turtles</title>

    <link rel="stylesheet" href="{{ asset('/css/welcomeBlade.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fonts/font.css') }}">

    <!-- W3 School -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/fonts/font.css') }}">

    <style>
        body {
            background-color: black;
        }

    </style>
</head>

<body id="mygame">


    <div style="text-align-last: center;">

    
        <video class="d-block mx-auto" autoplay muted loop id="myVideo"
            style="position:relative; height: 600px; width:640">
            <source src="{{ asset('/img/tBeAfu7.mp4') }}" type="video/mp4">

        </video>


        <div class="px-4 py-5 my-5 text-center" style=" text-align-last:center; position:relative; bottom:400px;">

            <h6 class="display-5 fw-bold" style="color:blanchedalmond; font-family:Minecraft;font-size:60px;">
                INTERN TURTLES</h6><br>

                <button style="bottom:0px; text-align-last:center;" class="button_register">
                    <a href="{{ route('credit') }}" style="text-decoration: none">Credits</a>
                </button><br>
            <button style="bottom:0px; text-align-last:center;" class="button_register">
                <a href="{{ route('register') }}" style="text-decoration: none">Register</a>
            </button>

            <button style="bottom:0px; text-align-last:center; margin-top:5px;" class="button_register">
                <a href="{{ route('login') }}" style="text-decoration: none">Log in</a>
            </button><br>
      
        </div>
    </div>




</body>



</html>
