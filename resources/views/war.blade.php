<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIGHT</title>
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
        < script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js" >
    </script>
    </script>
    <link rel="stylesheet" href="{{ asset('/css/fonts/font.css') }}">
    <style>
        body {
            font-family: Minecraft;
        }

        h1,
        h3 {
            color: blanchedalmond;
            font-family: Minecraft;
        }

        .EInf,
        .UInf {
            background-color: #253237;
            color: blanchedalmond;
        }

        .alert_1 {
            background-color: black;
        }

        .alert_2 {
            background-color: black;
        }

        .alert {
            background-color: #253237;
            color: blanchedalmond;
        }

    </style>
</head>

<body class="body" style="background-color:black">
    <div class="container">
        <div class="row">
            <div class="col-4 text-center">
                <br><br>
           
                    
                <h1>{{$userNick->nickName}}</h1>
                
                <button class="btn btn-outline-success Uattack" onclick="fight('U1')">Attack</button>
                <button class="btn btn-outline-secondary Udefence" onclick="fight('U2')">Defaece</button>
                <button class="btn btn-outline-danger Uheal" onclick="fight('U3')">Heal</button>
                <img id="enemyImg"
                    style="width:450px; margin-right:50px; padding:70px; margin-top:20px; -webkit-transform: scale(-1, 1);"
                    src="{{ asset('/img/karakter/babamor.png') }}">
            </div>

            <div class="col-4">
                <br><br>
                <div class="alert" role="alert">
                    <p id="warInfo">...</p>
                    <p id="warDamagePow">...</p>
                    <p id="warHealt">...</p>
                </div>
            </div>

            <div class="col-4 text-center">
                <br><br>
                <h1>ENEMY</h1>
                {{-- <button class="btn btn-outline-success Eattack" onclick="war('E1')">Attack</button>
                <button class="btn btn-outline-secondary Edefence" onclick="war('E2')">Defaece</button>
                <button class="btn btn-outline-danger Eheal" onclick="war('E3')">Heal</button> --}}
                <img id="warImg"
                    style="width:450px; margin-left:0px; padding:70px; margin-top:20px; -webkit-transform: scale(-1, 1);"
                    src="{{ asset('/img/karakter/kotu.png') }}">
            </div>
        </div>

        <div class="row text-center">
            <div class="col-4">
                 <h3>{{$userNick->nickName}} INFORMATION</h3>
                <div class="alert_1" role="alert">
                    <div class="progress">
                        <div id="Upb" class="progress-bar progress-bar-striped bg-success" role="progressbar"
                            style="width: 100%;" aria-valuemin="0" aria-valuemax="100">100</div>
                    </div>
                    <div class="UInf">
                        <p id="UDamage">...</p>
                        <p id="UDefence">...</p>
                        <p id="UPizza">...</p>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>


            <div class="col-4">
                <h3>ENEMY INFORMATION</h3>
                <div class="alert_2" role="alert">
                    <div class="progress">
                        <div id="Epb" class="progress-bar progress-bar-striped bg-success" role="progressbar"
                            style="width: 100%;" aria-valuemin="0" aria-valuemax="100">100</div>
                    </div>
                    <div class="EInf">
                        <p id="EDamage">...</p>
                        <p id="EDefence">...</p>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <script>
        var userHeal = 100;
        var userdamagePow = 17;
        var userdefensePow = 35;
        var userpizzaStock = 3;

        var enemyHeal = 100;
        var enemyDamagePow = 35;
        var enemyDefencePow = 20;

        var userPosition;
        var enemyPosition;

        var Epb = document.getElementById('Epb');
        var Upb = document.getElementById('Upb');

        $(document).ready(function() {
            userInfoWrite();
            enemyInfoWrite();
        });

        function fight(params) {
            war(params);
            $('.btn').attr('disabled', true);

            setTimeout(
                function() {
                    enemyTurn(params);
                }, 3000);
        }


        function war(params) {
            clear();
            switch (params.split('')[0]) {
                case 'U':
                    if (params.split('')[1] == '1') {
                        if (enemyHeal >= 0) {
                            if (enemyPosition == 'D') {
                                (userdamagePow >= enemyDefencePow) ? enemyHeal -= (userdamagePow - enemyDefencePow):
                                    enemyHeal -= 1;
                                $('#warInfo').text('User attacked but enemy defenced !');
                                $('#warDamagePow').text('User damage pow = ' + userdamagePow +
                                    " / Enemey defence power = " + enemyDefencePow);
                                $('#warHealt').text('User Heal = ' + userHeal + " / Enemy Heal = " + enemyHeal);
                                enemyPosition = null;

                            } else {
                                enemyHeal -= userdamagePow;
                                if (enemyHeal <= 0) {
                                    winner('User');
                                } else {
                                    $('#warInfo').text('User attacked!');
                                    $('#warDamagePow').text('User damage pow = ' + userdamagePow);
                                    $('#warHealt').text('User Heal = ' + userHeal + " / Enemy Heal = " + enemyHeal);
                                }
                            }
                        } else {
                            winner('User');
                        }
                        userInfoWrite();
                        enemyInfoWrite();
                    }

                    if (params.split('')[1] == '2') {
                        if (userHeal >= 0) {
                            userPosition = 'D';
                            $('#warInfo').text('User Defenced!');
                        }
                        userInfoWrite();
                        enemyInfoWrite();
                    }
                    if (params.split('')[1] == '3') {
                        if (userpizzaStock > 0) {
                            userpizzaStock -= 1;
                            userHeal = 100;
                            $('#warInfo').text("User use PIZZA !");
                            $('#warDamagePow').text('User Pizza Stock = ' + userpizzaStock);
                            $('#warHealt').text('User Heal = ' + userHeal + " / Enemy Heal = " + enemyHeal);
                        } else {
                            $('#warInfo').text("User does not have any PIZZA !");
                            $('#warDamagePow').text('User Pizza Stock = ' + userpizzaStock);
                        }
                        userInfoWrite();
                        enemyInfoWrite();

                    }
                    break;

                default:
                    console.error("error");
                    $('#warInfo').text("ERROR");
                    break;
            }
        }


        function enemyTurn(params) {

            let status = parseInt(Math.random() * 2);
            switch (status) {
                case 1:
                    if (userHeal >= 0) {
                        if (userPosition == 'D') {
                            (enemyDamagePow > userdefensePow) ? userHeal -= (enemyDamagePow - userdefensePow):
                                userHeal -= 1;
                            $('#warInfo').text('Enemy attacked but user defenced !');
                            $('#warDamagePow').text('Enemy damage pow = ' + enemyDamagePow +
                                " / User defence power = " + userdefensePow);
                            $('#warHealt').text('User Heal = ' + userHeal + " / Enemy Heal = " + enemyHeal);
                            userPosition = null;

                        } else {
                            userHeal -= enemyDamagePow;
                            if (userHeal <= 0) {
                                winner('Enemy');
                            } else {
                                $('#warInfo').text('Enemy attacked!');
                                $('#warDamagePow').text('Enemy damage pow = ' + enemyDamagePow);
                                $('#warHealt').text('User Heal = ' + userHeal + " / Enemy Heal = " + enemyHeal);
                            }
                        }

                    } else {
                        winner('Enemy');
                    }
                    userInfoWrite();
                    enemyInfoWrite();
                    break;

                case 0:
                    if (enemyHeal >= 0) {
                        enemyPosition = 'D';
                        $('#warInfo').text('Enemy Defenced!');
                    }
                    userInfoWrite();
                    enemyInfoWrite();
                    break;

                default:
                    console.error('Defe düştü');
                    break;
            }
            $('.btn').attr('disabled', false);
        }


        function userInfoWrite() {
            (userHeal < 0) ? userHeal = 0: null;
            Upb.style.width = userHeal + '%';
            $("#Upb").text(userHeal);
            $('#UDamage').text('Damage: ' + userdamagePow);
            $('#UDefence').text('Defence: ' + userdefensePow);
            $('#UPizza').text('Pizza: ' + userpizzaStock);

        }

        function enemyInfoWrite() {
            (enemyHeal < 0) ? enemyHeal = 0: null;
            Epb.style.width = enemyHeal + '%';
            $("#Epb").text(enemyHeal);
            $('#EDamage').text('Damage: ' + enemyDamagePow);
            $('#EDefence').text('Defence: ' + enemyDefencePow);
        }

        function winner(params) {
            $('#warInfo').text(params + " WIN !!!");
            $('.btn').attr('disabled', true);

            if (params == 'User') {
                alert('USER KAZANDI !!!');
                window.location.href = "{{ url('/credits') }}";
            } else {
                alert('ENEMY KAZANDI !!!');
                window.location.href = "{{ url('/maps3') }}";
            }


        }

        function clear() {
            $("#warInfo").text('');
            $("#warDamagePow").text('');
            $("#warHealt").text('');
        }
    </script>
</body>

</html>
