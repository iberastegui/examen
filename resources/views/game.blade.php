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
        @include('modal-new-game')
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <button class="newGame btn btn-success" data-toggle="modal" data-target="#modal-new-game">New Game</button>
            </div>

            <div class="content">
                <div id="grid">
                </div>
            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {



                $(document).on('click','.square',function(){// first attempt to retrieve the data.x data.y from the square selected
                    console.log($(this));
                });

                $( "#start" ).click(function( event ) {// send the configuration to start the game

                    event.preventDefault();
                    var rows = $("#rows").val();
                    var columns = $("#columns").val();

                    $.ajax({
                        type:'POST',
                        url:'{{ route('games.store') }}',
                        data:{rows:rows, columns:columns},
                        success:function(result) {

                            var currentRow= 0;

                            $.each(result, function(i, data) {

                                var $row = $("<div />", {
                                    class: 'row'
                                });

                                var $square = $("<div />", {
                                    class: 'square',
                                    id : data.id,
                                    value : data.status_id
                                });

                                if (data.coordinate_y == currentRow) {
                                    $row.append($square.clone());
                                }else {
                                    currentRow++;
                                    $("#grid").append($row.clone());
                                    $row = $("<div />", {
                                        class: 'row'
                                    });
                                }
                            });

                            $('#modal-new-game').modal('hide');
                        }
                    });
                });
            });
        </script>
    </body>


</html>
