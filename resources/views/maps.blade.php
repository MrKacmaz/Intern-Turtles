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





    <!-- W3 School -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.6.0/jquery.marquee.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.6.0/jquery.marquee.min.js">

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

        .dialog {
            z-index: 1;
            position: relative;
            background-color: black;
        }

        p {
            text-align: center;
            background-color: black;
        }

        .maps {
            top: 100px;
            margin-left: 300px;
            border-style: groove;
            border-color: coral;
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

    </style>
</head>

<body>

    <div class="container">

        <div>

            <span id="mygame"
                style="text-align-last:center; position:absolute; z-index:100; font-size:30px;cursor:pointer; color:blanchedalmond"
                onclick="openNav()">&#9776;</span>
        </div>
        @extends('layouts.navbar');
        <div class="row" style="text-align: center">

            {{-- <div class="">
                @foreach ($maps as $map)
                    <form action="" method="post">
                        @csrf {{ csrf_field() }}
                        <img class="map" src="{{ $map->mapImagePath }}" class="card-img-top">
                    </form>
                @endforeach
            </div> --}}

            @foreach ($maps as $h)
                <div class="d-grid gap-2 d-flex container" style="position: relative">
                    <img class="maps" class="card-img-top map" src="{{ $h->mapImagePath }}">
                    <a href="/forest" id="forest"
                        style="cursor: pointer;position: absolute;left: 13%;top: 3%;z-index: 5;height: 33%;width: 32%;">
                    </a>

                    <a href="/mountain" id="mountain"
                        style="cursor: pointer;position: absolute;left: 49%;top: 3%;z-index: 5;height: 32%;width: 25%;">
                    </a>
                    <a href="/pizza" id="pizzahouse"
                        style="cursor: pointer;position: absolute;left: 13%;top: 48%;z-index: 5;height: 20%;width: 17%;">
                    </a>

                    <a href="/" id=""
                        style="cursor: pointer;position: absolute;left: 26%;top: 73%;z-index: 5;height: 16%;width: 16%;">
                    </a>

                    <a href="/blacksmith" id="blacksmith"
                        style="cursor: pointer;position: absolute;left: 71%;top: 68%;z-index: 5;height: 15%;width: 12%;">
                    </a>

                    <a href="/" id=""
                        style="cursor: pointer;position: absolute;left: 45%;top: 85%;z-index: 5;height: 12%;width: 8%;">
                    </a>

                    <a href="/"
                        style="cursor: pointer;position: absolute;left: 71%;top: 55%;z-index: 5;height: 10%;width: 8%;">
                    </a>

                    <a href="/"
                        style="cursor: pointer;position: absolute;left: 70%;top: 35%;z-index: 5;height: 16%;width: 8%;">
                    </a>
                </div>


            @endforeach


        </div>
    </div>
</body>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";

    }

    // function closeNav() {
    //     document.getElementById("mySidenav").style.width = "0";
    // }

    // function dlcfkdfk() {
    //     alert("selam");
    // }
    // var elem = document.getElementById("mygame");

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    var elem = document.getElementById("mygame");
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

    var counter = 13;
    var counter2 = 20;
    $("#dialogDiv-12").show();
    $("#dialogDiv-19").show();

    function nextDialog(userNpc) {
        if (window.location.pathname.split('')[6] == 1) {
            if (counter <= 18) {
                $("#dialogDiv-" + counter).show();
                $("#dialogDiv-" + (counter - 1)).hide();
                counter++;
                npcNames(counter, userNpc);
            }
            if (counter == 19) {
                $("#reader").hide();
                $("#next").show();
            }
        }
        if (window.location.pathname.split('')[6] == 2) {
            npcNames(counter2, userNpc);

            if (counter2 <= 24) {
                $("#dialogDiv-" + counter2).show();
                $("#dialogDiv-" + (counter2 - 1)).hide();
                counter2++;
                npcNames(counter2, userNpc);

            }
            if (counter2 == 25) {
                $("#reader").hide();
                $("#nextMission").show();
            }
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

</html>
