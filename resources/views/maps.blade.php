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

<body style="background-color: black">

    <div class="container">

        <div>

            <span id="mygame"
                style="text-align-last:center; position:absolute; z-index:100; font-size:30px;cursor:pointer; color:blanchedalmond"
                onclick="openNav()">&#9776;</span>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="">Load Game</a>
            <a href="">New Game</a>
            <a href="/credits">Credits</a>
            <a href="">Leaderboard</a>
            <a href="">EXIT</a>

        </div>

        <div style="text-align-last: center;">

            @foreach ($maps as $h)
                <div class="d-grid gap-2 d-flex container" style="position: relative">
                    <img style="width:75%; z-index: 0;" class="card-img-top map"
                        src="{{ $h->mapImagePath }}">



                        
                   

                        <div  style="cursor:pointer;position:absolute; left:21%; top:12%; z-index: 5; height:50px; widht:50px;" onclick="dlcfkdfk()">
                            

                        </div>
                        <div  style="cursor:pointer;position:absolute; left:42%; top:16%; z-index: 5; height:50px; widht:50px;" onclick="dlcfkdfk()">
                            

                        </div>
                        <div   style="cursor:pointer;position:absolute; left:13%; top:55%; z-index: 5; height:50px; widht:50px;" onclick="dlcfkdfk()">
                           

                        </div>

                        <div  style="cursor:pointer;position:absolute; left:23%; top:76%; z-index: 5;height:50px; widht:50px;" onclick="dlcfkdfk()">
                           
                        </div>
                        <div  style="cursor:pointer;position:absolute; left:55%; top:71%;  z-index: 5;height:50px; widht:50px;" onclick="dlcfkdfk()">
                           
                        </div>
                        <div  style="cursor:pointer;position:absolute; left:35%; top:85%;  z-index: 5;height:50px; widht:50px;" onclick="dlcfkdfk()">
                           
                        </div>
                        <div  style="cursor:pointer;position:absolute; left:54%; top:55%;  z-index: 5;height:50px; widht:50px;" onclick="dlcfkdfk()">
                            Lorem
                        </div>
                        <div  style="cursor:pointer;position:absolute; left:53%; top:35%;  z-index: 5;height:50px; widht:50px;" onclick="dlcfkdfk()">
                            Lorem
                        </div>
                   



                    {{-- <button style="position: absolute; height: 50px; position:absolute; width:100px left:90px; top:268px; background-color:transparent"></button> --}}
                </div>


            @endforeach




        </div>

    </div>


</body>
<script>
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

</html>
