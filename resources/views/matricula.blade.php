<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pico Y Placa</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <body>
        <div class="flex-center position-ref full-height">

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

            <div class="mb-1 p-5"></div>

            <div class="content">

                <div class="container h-100">

                    <div class="row  h-100 justify-content-center align-items-center">
                       <h2>Pico & Placa</h2> 
                     </div>


                    <div class="mt-4"></div>

                    {!! Form::open(['route' => 'evaluar', 'method' => 'POST', 'name' => 'Form']) !!}

                    {{ csrf_field() }}

                    <div class="row  h-100 justify-content-center align-items-center">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('matricula', 'Número de la maricula*') !!}
                                {!! Form::number('matricula', null, ['class' => 'form-control', 'id' => 'matricula']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row  h-100 justify-content-center align-items-center">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('fecha', 'Fecha* (yyyy-mm-dd)') !!}
                                {!! Form::text('fecha', null, ['class' => 'form-control', 'id' => 'fecha']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="row  h-100 justify-content-center align-items-center">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('hora', 'Hora*') !!}
                                {!! Form::time('hora', null, ['class' => 'form-control', 'id' => 'hora']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="mt-4"></div>

                    <div class="row  h-100 justify-content-center align-items-center">
                        <div class="button-box m-t-20">
                                    {!! Form::button('<i class="fas fa-car"></i><span>Evaluar</span>', ['class' => 'btn btn-info', 'type' => 'submit', 'id' => 'Btn','name' => 'Btn']) !!}
                                </div>
                    </div>
                        {!! Form::close() !!}
                </div>

                <div class="mb-1 p-5"></div>

            </div>
        </div>
    </body>
</html>
