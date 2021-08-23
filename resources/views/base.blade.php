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

    <div class="container">
        <div class="row" style="text-align: center">

            @foreach ($allMaps as $map)
                <form action="" method="post">
                    @csrf {{ csrf_field() }}
                    <img src="{{ $map->mapImagePath }}" class="card-img-top">
                </form>
            @endforeach



            <a id="next" style="display: none; cursor: pointer;" href="{{ url('/base/2') }}"><svg
                    xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                    <path fill-rule="evenodd"
                        d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg></a>

            <a id="nextMission" style="display: none; cursor: pointer;" href="{{ url('') }}"><svg
                    xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                    <path fill-rule="evenodd"
                        d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg></a>

            <a id="reader" onclick="nextDialog({{ $userNpc }})" style="cursor: pointer"><svg
                    xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg></a>


            {{-- DIALOG --}}
            @foreach ($baseDialog as $dialog)
                <div id="dialogDiv-{{ $dialog->id }}"
                    style="display: none; text-align: center; background: rgba(0, 0, 0, 0.5); color: white;">

                    <p id="npcNameP-{{ $dialog->id }}">
                        {{ $dialog->npcName }}
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
                if (counter2 == 24) {
                    $("#reader").hide();
                    $("#nextMission").show();
                }
            }

            console.log(counter + " - " + counter2);
        }

        function npcNames(count, userNpc) {
            console.log($("#npcNameP-" + (count - 1)).text());
            switch ($("#npcNameP-" + (count - 1)).text()) {
                case '\n                        Kap1\n                    ':
                    (userNpc == 1) ? $("#npcNameP-" + (count - 1)).text('Micmicello'):
                        (userNpc == 2) ? $("#npcNameP-" + (count - 1)).text('Lovabardo') :
                        (userNpc == 3) ? $("#npcNameP-" + (count - 1)).text('Rapoyel') :
                        (userNpc == 4) ? $("#npcNameP-" + (count - 1)).text('Domateslo') : console.log('False');
                    break;

                case '\n                        Kap2\n                    ':
                    (userNpc == 1) ? $("#npcNameP-" + (count - 1)).text('Domateslo'):
                        (userNpc == 2) ? $("#npcNameP-" + (count - 1)).text('Micmicello') :
                        (userNpc == 3) ? $("#npcNameP-" + (count - 1)).text('Lovabardo') :
                        (userNpc == 4) ? $("#npcNameP-" + (count - 1)).text('Rapoyel') : console.log('False');
                    break;

                case '\n                        Kap3\n                    ':
                    (userNpc == 1) ? $("#npcNameP-" + (count - 1)).text('Rapoyel'):
                        (userNpc == 2) ? $("#npcNameP-" + (count - 1)).text('Domateslo') :
                        (userNpc == 3) ? $("#npcNameP-" + (count - 1)).text('Micmicello') :
                        (userNpc == 4) ? $("#npcNameP-" + (count - 1)).text('Lovabardo') : console.log('False');
                    break;

                case '\n                        Kap4\n                    ':
                    (userNpc == 1) ? $("#npcNameP-" + (count - 1)).text('Lovabardo'):
                        (userNpc == 2) ? $("#npcNameP-" + (count - 1)).text('Rapoyel') :
                        (userNpc == 3) ? $("#npcNameP-" + (count - 1)).text('Domateslo') :
                        (userNpc == 4) ? $("#npcNameP-" + (count - 1)).text('Micmicello') : console.log('False');
                    break;

                default:
                    break;
            }
        }
    </script>

</body>

</html>
