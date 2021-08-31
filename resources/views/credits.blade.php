<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Credits</title>

    <!-- W3 School -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


    <link rel="stylesheet" href="{{ asset('/css/fonts/font.css') }}">

</head>

<body style="background-color: black; background-repeat:no-repeat;">

    <div style="text-align-last: center;">

        <video class="d-block mx-auto" autoplay muted id="myVideo"
            style="position:relative; height: 960px; width:1920px">
            <source src="{{ asset('/img/presents.mp4') }}" type="video/mp4">

        </video>
    </div>

    <audio autoplay>
        <source src="{{ asset('/css/audio/song.mp3') }}" type="audio/mp3">

    </audio>
</body>

</html>
