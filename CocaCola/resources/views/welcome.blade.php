<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Share the happiness</title>

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
        <div class="flex-center position-ref ">
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
            </div>
            <div class="content" style="margin-top:100px;">

                <div>
                    <div><img src="/svg/cocaColahome.svg" style="height: 500px;" class="pr-3"></div>
                </div>
                <div class="title m-b-md">
                        Deel 'The Happiness' met </br> een foto en win!
                    </div>
                <div style="border:solid 1px grey; background-color:white; box-shadow: 10px 10px 8px 10px #888888; margin-bottom:100px; " >
                    <h1>Deelnemen is super eenvoudig</h1>
                    <h2 class="left">STAP 1: </h2>
                    <h3>Maak een profiel aan om deel te nemen</h3>
                    <h2 class="left">STAP 2: </h2>
                    <h3>Maak foto's van jouw <span style="color:#CF4037">Coca Cola hapinness moment</span>  en post ze op jouw profiel</h3>
                    <h2 class="left">STAP 3: </h2>
                    <h3>Krijg de meeste Like's en win!</h3>
                </div>
                <div>
                    <h1>Registreer je snel of login en post je foto!</h1>

                </div>
                <div class="pt-5">
                        <h2>Wat valt er te winnen?</h2>
                        <h2> 4 Weken lang wordt er elke week een winnaar gekozen</h2>
                        <h2><span style="color:#CF4037">Elke winnaar krijgt een reisje voor 2 personen naar New York!!</span></h2>
                        <div><img src="/jpg/newYork.jpg" style="height: 500px;" class="pr-3"></div>

                </div>

        </div>
    </body>
</html>
