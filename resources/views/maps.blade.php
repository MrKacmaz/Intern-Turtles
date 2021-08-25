<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maps</title>

    <link rel="stylesheet" href="{{ asset('/css/welcomeBlade.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fonts/font.css') }}">

    <!-- W3 School -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.6.0/jquery.marquee.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.6.0/jquery.marquee.min.js">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
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
            right: 25px;
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

        .row {
            margin-left: 15%;
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

        <div style="text-align-last: center;">

            @foreach ($maps as $h)
                <div class="d-grid gap-2 d-flex container" style="position: relative">
                    <img style="width:100%; z-index: 0;" class="card-img-top map" src="{{ $h->mapImagePath }}">

                    <a href="/forest" id="forest" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="top" data-bs-content="Forest"
                        style="cursor: pointer;position: absolute;left: 13%;top: 3%;z-index: 5;height: 33%;width: 32%;">
                    </a>

                    <a href="/mountain" id="mountain" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="top" data-bs-content="Mountain"
                        style="cursor: pointer;position: absolute;left: 49%;top: 3%;z-index: 5;height: 32%;width: 25%;">
                    </a>

                    <a href="/blacksmith" id="blacksmith" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="top" data-bs-content="Blacksmith"
                        style="cursor: pointer;position: absolute;left: 13%;top: 48%;z-index: 5;height: 20%;width: 17%;">
                    </a>

                    <a href="/pizza" id="pizzahouse" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="top" data-bs-content="Domino Pizza House"
                        style="cursor: pointer;position: absolute;left: 26%;top: 73%;z-index: 5;height: 16%;width: 16%;">
                    </a>

                    <a href="/arpilhouse" id="arpilhouse" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="top" data-bs-content="Arpil House"
                        style="cursor: pointer;position: absolute;left: 71%;top: 68%;z-index: 5;height: 15%;width: 12%;">
                    </a>

                    <a href="/factory" id="factory" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="top" data-bs-content="Old Factory"
                        style="cursor: pointer;position: absolute;left: 45%;top: 85%;z-index: 5;height: 12%;width: 8%;">
                    </a>

                    <a href="/sewerBase" id="sewer" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="top" data-bs-content="Sewer"
                        style="cursor: pointer;position: absolute;left: 71%;top: 55%;z-index: 5;height: 10%;width: 8%;">

                    </a>

                    <a href="/cave" id="cave" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top"
                        data-bs-content="Cave"
                        style="cursor: pointer;position: absolute;left: 70%;top: 35%;z-index: 5;height: 16%;width: 8%;">
                    </a>

                    {{-- <button style="position: absolute; height: 50px; position:absolute; width:100px left:90px; top:268px; background-color:transparent"></button> --}}
                </div>

            @endforeach

        </div>

    </div>

    <script>
        // Popovers scripts
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
        var popover = new bootstrap.Popover(document.querySelector('.example-popover'), {
            container: 'body'
        })

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";

        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        function dlcfkdfk() {
            alert("selam");
        }
        var elem = document.getElementById("mygame");
    </script>

</body>

</html>
