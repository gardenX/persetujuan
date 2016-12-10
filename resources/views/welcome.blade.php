<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Join With Us</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .question{
                color: black;
            }
            .button-joiner {
                text-align: center;
            }
            .button {
                position: relative;
                background: currentColor;
                border: 1px solid currentColor;
                font-size: 1.1rem;
                color: #D81900;
                margin: 3rem 0;
                padding: 0.75rem 3rem;
                cursor: pointer;
                -webkit-transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
                transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
                overflow: hidden;
                box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
            }
            .button span {
                color: #fff;
                position: relative;
                z-index: 1;
            }
            .button::before {
                content: '';
                position: absolute;
                background: #071017;
                border: 50vh solid #1d4567;
                width: 30vh;
                height: 30vh;
                border-radius: 50%;
                display: block;
                top: 50%;
                left: 50%;
                z-index: 0;
                opacity: 1;
                -webkit-transform: translate(-50%, -50%) scale(0);
                transform: translate(-50%, -50%) scale(0);
            }
            .button:hover {
                color: #D81900;
                box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.2);
            }
            .button:active::before, .button:focus::before {
                -webkit-transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
                transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
                transition: transform 1.12s ease, opacity 0.28s ease 0.364s;
                transition: transform 1.12s ease, opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
                -webkit-transform: translate(-50%, -50%) scale(1);
                transform: translate(-50%, -50%) scale(1);
                opacity: 0;
            }
            .button:focus {
                outline: none;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">Selamat Datang !</div>
                <p class="question">Apakah Anda Ingin Bergabung ?</p>
                <div class="joined">
                    <div class="button-joider">
                        <button type="submit" class="button"><span>New Token</span></button>
                        <a href="https://facebook.com"><button type="submit" class="button"><span>Lanjutkan</span></button></a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
