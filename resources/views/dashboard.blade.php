<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choosing</title>

    <link rel="stylesheet" href="{{ asset('/css/fonts/font.css') }}">
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

    <style>
        .card-img-top {
            background-color: black;
        }

        .text {
            font-size: 50px;
            color: blanchedalmond;
            text-align: center;
            font-family: Minecraft;
        }

        .btn:hover {
            background: rgba(00, 64, 00, 0.5);
            background: linear-gradient(45deg, #ccff33, #9ef01a, #70e000, #38b000, #008000, #007200, #006400, #004b23);

        }

    </style>
</head>

<body style="background-color: black">

    <div class="container">



        <h1 class="text">
            Time to Pick Your Intern Turtle
        </h1>


        <div class="row">

            @foreach ($characters as $character)
                <div class="col-sm-3" style="margin-left:15%; margin-right:5%;background-color: black; ">

                    <form action="{{ url('characterSelected/' . $character[0]->id) }}" method="post">
                        @csrf {{ csrf_field() }}
                        <div class="btn">
                            <button class="btn" style="width: 18rem; background-color: black">
                                <img src="{{ $character[0]->npcImagePath }}" class="card-img-top"
                                    alt="{{ $character[0]->npcName }}">
                                <div class="btn-body">
                                    <h5 class=""
                                        style="color: blanchedalmond; font-family: Minecraft; text-align:center">
                                        {{ $character[0]->npcName }}</h5>

                                </div>
                            </button>
                        </div>
                    </form>
                </div>


            @endforeach

        </div>

    </div>
</body>

</html>
