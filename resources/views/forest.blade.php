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
    <style>
        body {
            background-color: black;
            font-family: Minecraft;
        }

        a {
            color: blanchedalmond;
        }

        a:hover {
            color: #006400;
        }

        .buttons:hover {
            color: #006400;
        }

        .dialog {
            z-index: 1;
            position: relative;
            background-color: black;
        }

        p {
            text-align: center;
            background-color: black;
        }

        .map {
            margin-top: 25px;
            border-style: groove;
            border-color: blanchedalmond;
            border-width: 10px;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 2;
            top: 0px;
            bottom: 100px;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            text-align: center;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            left: -75px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        .inventory {
            position: absolute;
            left: 0%;
            width: 230px;
            padding: 10px;
            border: 5px solid gray;
            margin: 0;

        }

        .inv {
            color: blanchedalmond;
        }

    </style>
</head>

<body>
    {{-- Inventory --}}
    <div class="inventory">
        <span class="inv" color="white">
            Pizza: {{ $userInventory[0] }}<br>
            Wood:{{ $userInventory[1] }}<br>
            Iron:{{ $userInventory[2] }}<br>
            Cretan Stone:{{ $userInventory[3] }}
        </span>
    </div>

    {{-- Toast Message --}}
    <div aria-live="polite" aria-atomic="true" class="position-relative" id="asd">

        <div class="toast-container position-absolute top-0 end-0 p-3">

            <!-- Then put toasts within -->
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Bitti</strong>
                    <small class="text-muted">Wooooooow!!!</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>

                <div class="toast-body">
                    +50 EXP. +100 GOLD
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row" style="text-align: center">

            <div>
                @foreach ($forestMap as $i)
                    <form action="" method="post">
                        @csrf {{ csrf_field() }}
                        <img class="map" src="{{ $i->mapImagePath }}" class="card-img-top">
                    </form>
                @endforeach
            </div>

            <div class="dialog">
                {{-- DIALOG --}}
                @foreach ($forestDialogs as $j)
                    <div id="dialogDiv-{{ $j->id }}"
                        style="display: none; text-align: center; background: rgba(0, 0, 0, 0.5); color: white;">

                        <p id="npcNameP-{{ $j->id }}">
                            {{ $j->npcName }}
                        </p>

                        <p class="dialog-body" id=" textP-{{ $j->id }}">
                            {{ $j->text }}
                        </p>
                    </div>
                @endforeach
            </div>
            <div class="buttons">
                <a href="{{ url('/maps2') }}" id="next" style="display: none; cursor: pointer;" href="#"><svg
                        xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        style="color: antiquewhite" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                        <path fill-rule="evenodd"
                            d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg></a>

                <a id="nextMission" style="display: none; cursor: pointer;" href="#"><svg
                        xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        style="color: antiquewhite" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                        <path fill-rule="evenodd"
                            d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg></a>

                <a id="reader" onclick="nextDialog({{ $userNpc }})" style="cursor: pointer; display:none;"><svg
                        xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        style="color: antiquewhite" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg></a>
            </div>

        </div>

    </div>
    </div>
    {{-- Click Game --}}
    <div id="progress" style="display:block">
        <div class="progress">
            <div id="bar" class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 0%"
                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
            </div>
        </div>

        <button id="btnStart" class="btn btn-outline-primary" onclick="move()">Start</button>
        <button id="btnIncrease" style="display: none" class="btn btn-outline-success" onclick="increaseFun()">Increase
        </button>
    </div>


    <script>
        var i = 0;
        var width = 0;
        var elem = document.getElementById("bar");

        function move() {
            $("#btnStart").hide();
            $("#btnIncrease").show();
            if (i == 0) {
                i = 1;
                var id = setInterval(frame, 25);

                function frame() {
                    if (width == 0) {
                        i = 0;
                    } else if (width == 100) {
                        $("#reader").show();
                        $("#progress").hide();
                        $('.toast').toast('show')
                        $("#dialogDiv-32").show();
                        width = 0;
                    } else {
                        width -= 1;
                        elem.style.width = width + "%";
                    }
                }
            }
        }

        function increaseFun() {
            width += 15;
            elem.style.width = width + "%";

        }

        var counter = 33;


        function nextDialog(userNpc) {


            npcNames(counter, userNpc);
            if (counter <= 37) {
                $("#dialogDiv-" + counter).show();
                $("#dialogDiv-" + (counter - 1)).hide();
                counter++;
                npcNames(counter, userNpc);
            }
            if (counter == 38) {
                $("#reader").hide();
                $("#next").show();


            }



        }

        function npcNames(count, userNpc) {

            switch ($("#npcNameP-" + (count - 1)).text().split('')[32]) {
                case '1':
                    (userNpc == 1) ? $("#npcNameP-" + (count - 1)).text('Micmicello'):
                        (userNpc == 2) ? $("#npcNameP-" + (count - 1)).text('Lovabardo') :
                        (userNpc == 3) ? $("#npcNameP-" + (count - 1)).text('Rapoyel') :
                        (userNpc == 4) ? $("#npcNameP-" + (count - 1)).text('Domateslo') : console.log('False');
                    break;

                case '2':
                    (userNpc == 1) ? $("#npcNameP-" + (count - 1)).text('Domateslo'):
                        (userNpc == 2) ? $("#npcNameP-" + (count - 1)).text('Micmicello') :
                        (userNpc == 3) ? $("#npcNameP-" + (count - 1)).text('Lovabardo') :
                        (userNpc == 4) ? $("#npcNameP-" + (count - 1)).text('Rapoyel') : console.log('False');
                    break;

                case '3':
                    (userNpc == 1) ? $("#npcNameP-" + (count - 1)).text('Rapoyel'):
                        (userNpc == 2) ? $("#npcNameP-" + (count - 1)).text('Domateslo') :
                        (userNpc == 3) ? $("#npcNameP-" + (count - 1)).text('Micmicello') :
                        (userNpc == 4) ? $("#npcNameP-" + (count - 1)).text('Lovabardo') : console.log('False');
                    break;

                case '4':
                    (userNpc == 1) ? $("#npcNameP-" + (count - 1)).text('Lovabardo'):
                        (userNpc == 2) ? $("#npcNameP-" + (count - 1)).text('Rapoyel') :
                        (userNpc == 3) ? $("#npcNameP-" + (count - 1)).text('Domateslo') :
                        (userNpc == 4) ? $("#npcNameP-" + (count - 1)).text('Micmicello') : console.log('False');
                    break;

                default:
                    console.log("def e düştü");
                    break;
            }
        }
    </script>

</body>

</html>
