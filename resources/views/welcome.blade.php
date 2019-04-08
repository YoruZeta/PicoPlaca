<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

            <div class="content">

                {!! Form::open(['route' => 'evaluar', 'method' => 'POST', 'name' => 'Form']) !!}

                {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('claseAprobacion', 'Aprobacion') !!}
                            {!! Form::text('claseAprobacion', null, ['class' => 'form-control', 'id' => 'claseAprobacion']) !!}
                        </div>
                    </div>
                </div>

                <div class="button-box m-t-20">
                            {!! Form::button('<span class="btn-label"><i class="ti-save"></i></span> <span class="ladda-label">Guardar Aprobacion</span><span class="ladda-spinner"></span>', ['class' => 'btn btn-info waves-effect waves-light ladda-button', 'type' => 'submit', 'id' => 'AprobacionesBtn', 'data-style' => 'expand-right']) !!}
                        </div>

                    {!! Form::close() !!}

            </div>
        </div>
    </body>
</html>
