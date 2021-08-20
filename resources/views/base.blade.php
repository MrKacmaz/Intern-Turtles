<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <p><b>Base BLADE</b></p>
    <div class="container">
        <div class="row">

            @foreach ($allMaps as $map)
                <div class="col-3">

                    <form action="" method="post">
                        @csrf {{ csrf_field() }}

                        <button class="card w3-hover-light-grey btn" style="width: 18rem;">
                            <img src="{{ $map->mapImagePath }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center"> {{ $map->mapName }}</h5>
                            </div>
                        </button>

                    </form>
                </div>


            @endforeach

        </div>
    </div>
    
</body>
</html>