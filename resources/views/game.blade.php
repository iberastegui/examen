<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href='{{ asset('css/app.css') }}' rel='stylesheet'>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <button class="newGame btn btn-success">New Game</button>
            </div>

            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="grid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
