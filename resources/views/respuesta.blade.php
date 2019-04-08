<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Respuesta</title>

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
                    <div class="row h-100 justify-content-center align-items-center">
                        <div class="col-md-6">
                            <div class="form-group">
                            <h3> El coche {{$title}} puede transitar en la carretera  </h3>
                            </div>
                        </div>
                    </div>
                     <div class="mt-4"></div>
                    <div class="row h-100 justify-content-center align-items-center">
                     <div class="button-box m-t-20">
                         <a class="btn btn-info" href={{ URL::previous() }} role="button">Regresar a Evaluar</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
