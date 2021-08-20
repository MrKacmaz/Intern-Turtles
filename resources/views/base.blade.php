<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Base</title>
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



            <button id="next" onclick="nextDialog()">Next</button>
            <button id="reader" style="display: none">Reader</button>


            {{-- DIALOG --}}
            @foreach ($baseDialog as $dialog)
                <div id="dialogDiv-{{ $dialog->id }}" style="display: none">

                    <p id="npcNameP-{{ $dialog->id }}">
                        <b>{{ $dialog->npcName }}</b>
                    </p>

                    <p id=" textP-{{ $dialog->id }}">
                        {{ $dialog->text }}
                    </p>
                </div>
            @endforeach


        </div>

    </div>


    <script>
        var counter = 13;
        $("#dialogDiv-12").show();

        function nextDialog() {
            if (counter <= 24) {
                $("#dialogDiv-" + counter).show();
                $("#dialogDiv-" + (counter - 1)).hide();
                counter++;
            }
            if (counter == 25) {
                $("#next").hide();
                $("#reader").show();
            }
        }
    </script>

</body>

</html>
