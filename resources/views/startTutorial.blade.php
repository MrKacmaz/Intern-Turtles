<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Main Page</title>
    <!-- W3 School -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Bootstrap 5 -->
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
    <link rel="stylesheet" href="{{ asset('/css/welcomeBlade.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fonts/font.css') }}">

    <style>
        body{
            background-color: #000;
        }
        .readerbtn {
            letter-spacing: 3px;
            width: 40%;
            height: 10%;
            border: none;
            border-radius: 100px;
            outline: none;
            color: blanchedalmond;
            cursor: pointer;
            position: relative;
            z-index: 0;
            background: rgba(00, 64, 00, 0.5);
            font-size: 30px;
            font-family: 'Minecraft', sans-serif;
            top: 50px;
        }

        .readerbtn:before {
            content: '';
            background: rgba(00, 64, 00, 0.5);
            background: linear-gradient(45deg, #ccff33, #9ef01a, #70e000, #38b000, #008000, #007200, #006400, #004b23);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 100px;
        }

        .readerbtn:active {
            color: #000
        }

        .readerbtn:hover:before {
            opacity: 1;
        }

        .readerbtn:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(00, 64, 00, 0.5);
            left: 0;
            top: 0;
            border-radius: 100px;
        }

        .dialogs {
            text-align: center;
            font-family: 'Minecraft', sans-serif;
            color: #efe6dd;
            font-size: 20px;
            color: blanchedalmond;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 20px;
        }

        .div {
            text-align-last: center;
            position: relative;
            bottom: 400px;
            width: 50%;
            margin-left: 25%;
        }

    </style>

</head>

<body>
    <div style="text-align: center">

        <video autoplay muted loop id="myVideo" style="height: 610px;">
            <source src="{{ asset('/img/tBeAfu7.mp4') }}" type="video/mp4">
        </video>

        <div class="div">
            <div>
                @foreach ($allDialogs as $item)

                    <p id="pid-{{ $item->id }}" style="display: none; text-align: center" class="dialogs">
                        {{ $item->text }}
                    </p>

                @endforeach
            </div>
            <button id="reader" class="readerbtn" onclick="reader()">reader</button>

            <form action="{{ url('dashboard') }}" id="nextForm" method="get">

                <button id="next" class="readerbtn" type="submit" style="display: none">next</button>

            </form>
        </div>
    </div>

    <script>
        var counter = 2;
        $("#pid-1").show();

        function reader() {
            console.log(counter);
            if (counter <= 11) {
                $("#pid-" + counter).show();
                $("#pid-" + (counter - 1)).hide();
                counter++;
            }
            if (counter == 12) {
                $("#next").show();
                $("#reader").hide();
            }
        }
    </script>

</body>

</html>
