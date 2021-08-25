<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sewer Base</title>
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
</head>

<body>
    {{-- Background Image --}}

    @foreach ($sewerMap as $i)
        <img src={{ $i->mapImagePath }} alt={{ $i->mapBase }}>
    @endforeach


    {{-- Dialog --}}
    @foreach ($sewerDialogs as $j)
        <div id="dialogDiv-{{ $j->id }}" style="display: none">
            <p id="npcNameP-{{ $j->id }}">{{ $j->npcName }}</p>
            <p id="dialogP-{{ $j->id }}">{{ $j->text }}</p>
        </div>
    @endforeach

    {{-- Dialog Buttons --}}
    <div class="buttons">
        <a href="{{ url('/maps') }}" id="next" style="display: none; cursor: pointer;" href="#"><svg
                xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                <path fill-rule="evenodd"
                    d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
            </svg></a>

        <a id="nextMission" style="display: none; cursor: pointer;" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                width="32" height="32" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
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
    </div>


    <script>
        var counter = 192;
        $('#dialogDiv-191').show();

        function nextDialog(userNpc) {
            if (counter <= 196) {
                $("#dialogDiv-" + counter).show();
                $("#dialogDiv-" + (counter - 1)).hide();
                counter++;
                npcNames(counter, userNpc);
            }
            if (counter == 197) {
                $("#reader").hide();
                $("#next").show();
            }
        }

        function npcNames(count, userNpc) {
            console.log($("#npcNameP-" + (count - 1)).text().split(''));
            switch ($("#npcNameP-" + (count - 1)).text().split('')[3]) {
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
                    console.error("DEFAULT HAS BEEN WORKED");
                    break;
            }
        }
    </script>

</body>

</html>
