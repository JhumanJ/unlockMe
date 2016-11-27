<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UnlockMe</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html {
                height: 100%;
            }
            body {
                height: 100%;
                margin: 0;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }

            #text {
                float: left;
            }

            .welcome{
                background: linear-gradient(to bottom right, #00BFFF, cyan); /* Standard syntax */

            }

            .stitle {
                font-size: 2000;
                float: left;
            }

            .lock {
                font-size: 3em;
                color:  white; /*FFBEBD;*/

            }

            .heart {
                /*position: absolute;
                top: 53%;
                left: 45%;*/
                color: #FF69B4;
            }

            .heart .hidden-xs,.heart .hidden-sm {
                position: relative;
                top: -180px;
            }

            .heart .visible-xs,.heart .visible-sm {
                position: relative;
                top: -115px;
            }


            .homepage .title{
                font-size: 4em;
                color: black;
            }

            .homepage .lock-big{
                font-size: 5em !important;
            }

            .linkss a, .linkss:visited a{
                font-size: 2em;
                text-align: center;
                color: white;
                o-transition: .5s;
                -ms-transition: .5s;
                -moz-transition: .5s;
                -webkit-transition: .5s;
                transition: .5s;
            }

            .linkss a:hover{
                color: #FF69B4;
                text-decoration: none !important;
            }

            .logreg {
                color: #EEEEEE;
            }
        </style>
    </head>



    <body class="welcome">
    <div class="flex-center position-ref full-height">

        <div class="container homepage">
            <!-- <div id="text"><h1 class="text-center stitle">Dating redefined</h1></div> -->
            <h1 class="text-center title" style="font-size:600%; color:#EC407A; background:linear-gradient(to bottom right,#BA55D3,#FF69B4); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Unlock Me</h1>


            <div class="col-xs-12 col-md-6 col-md-offset-3">
                <div style="padding-top:30px;">
                    <h1 class="text-center lock lock-big hidden-sm hidden-xs"><i class="fa fa-unlock-alt fa-5x" aria-hidden="true"></i></h1>
                    <h1 class="text-center lock visible-xs visible-sm"><i class="fa fa-unlock-alt fa-5x" aria-hidden="true"></i></h1>
                    <div class="heart animated infinite pulse">
                        <h1 class="text-center hidden-sm hidden-xs" ><i class="fa fa-heart fa-2x" aria-hidden="true"></i></h1>
                        <h1 class="text-center visible-xs visible-sm" ><i class="fa fa-heart fa-1x" aria-hidden="true"></i></h1>

                    </div>

                </div>

                @if (Route::has('login'))

                    <div class="text-center linkss" style="margin-top: -50px;">
                        <div class="col-xs-6 text-center">
                            <div class="logreg">
                                <a href="{{ url('/login') }}">Login</a>
                            </div>
                        </div>
                        <div class="col-xs-6 text-center">
                            <div class="logreg">
                                <a  href="{{ url('/register') }}">Register</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>



        </div>
    </div>
    </body>

</html>
