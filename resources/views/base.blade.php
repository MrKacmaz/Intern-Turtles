<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game</title>


    <!-- W3 School -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

     <!-- Sweet alert -->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <link rel="stylesheet" href="{{ asset('/css/fonts/font.css') }}">
     <link rel="stylesheet" href="{{ asset('/css/welcomeBlade.css') }}">
     <link rel="stylesheet" href="{{ asset('/css/fonts/font.css') }}">

    <style>
        .dialogs {
            z-index: 100;
            position: absolute;
            background: rgba(0, 0, 0, 0.5);
            font-size: 20px;
            font-family: 'Minecraft', sans-serif;
            left: 40%;
            top: 60%;
        }

        

    </style>



</head>

<body>

    <div class="div">
        <div class="row" style="text-align: center">

            @foreach ($allMaps as $map)
                <form action="" method="post">
                    @csrf {{ csrf_field() }}
                    <img src="{{ $map->mapImagePath }}" class="card-img-top">
                </form>
            @endforeach

            <div class="dialogs">
                <p>sdfsdfdsf</p>
            </div>

        </div>

    </div>

</body>

</html>
