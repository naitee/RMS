<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RMS</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/RMS.ico" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

    <style>
        img {
            border-radius: 10px;
        }

        html,
        body {
            font-family: 'Open Sans Condensed', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .bg {
            background-image: url("images/bg.jpg");

            height: 100%;

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
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
            text-decoration: underline;
        }

        .links>a {
            color: #000000;
            padding: 0 25px;
            font-size: 24px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            display: inline-block;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .cool-link::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: #000000;
            transition: width .3s
        }

        .cool-link:hover::after {
            width: 100%;
            transition: width .3s;
        }

        .h3 {
            font-family: 'Open Sans Condensed', sans-serif;
        }

        .fond {
            position: absolute;
            padding-top: 85px;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #00506b;
        }

        .style_prevu_kit {
            border-radius: 10px;
            display: inline-block;
            border: 0;
            width: 170px;
            height: 170px;
            position: relative;
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1);
            transition: all 200ms ease-in;
            transform: scale(1);

        }

        .style_prevu_kit:hover {
            box-shadow: 0px 0px 170px #ffffff;
            z-index: 2;
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1.5);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1.5);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1.5);
            transition: all 200ms ease-in;
            transform: scale(1.5);
        }

        .round {
            border: 2px solid black;
            border-radius: 10px;
            background-color: #D0D3D4;
            opacity: .7;
        }
    </style>
</head>

<body>
    <div class="bg">
        <br><br>
        <div class="flex-center position-ref">
            <div class=" content">
                <div class="title m-b-md">
                    Room Monitoring System
                </div>
            </div>
        </div>


        <table style="width:100%" class="flex-center h3">
            <tr>
                <th>
                    <div class="style_prevu_kit"><img src="{{url('images/plm.jpg ')}}" alt="plm" width="170" height="170">
                        <div class="round">
                            <u>TEERAMET EAKWILAI</u>
                            <h5>590610626</h5>
                            Project Manager
                        </div>
                    </div>
                </th>
                <th>
                    <div class="style_prevu_kit"><img src="{{url('images/night.jpg ')}}" alt="night" width="170" height="170">
                        <div class="round">
                            <u>NORAWORN HORAWAN</u>
                            <h5>590619631</h5>
                            UX/UI
                        </div>
                    </div>
                </th>
                <th>
                    <div class="style_prevu_kit"><img src="{{url('images/nick.jpg ')}}" alt="nick" width="170" height="170">
                        <div class="round">
                            <u>NANTANUT CHEIWBANGYANG</u>
                            <h5>590619634</h5>
                            Tester
                        </div>
                    </div>
                </th>
                <th>
                    <div class="style_prevu_kit"><img src="{{url('images/ya.jpg ')}}" alt="ya" width="170" height="170">
                        <div class="round">
                            <u>ATITAYA SINPAKDEE</u>
                            <h5>590619678</h5>
                            UX/UI
                        </div>
                    </div>
                </th>
                <th>
                    <div class="style_prevu_kit"><img src="{{url('images/mind.jpg ')}}" alt="mind" width="170" height="170">
                        <div class="round">
                            <u>AMONWAN LAPINSEE</u>
                            <h5>590619679</h5>
                            Tester
                        </div>
                    </div>
                </th>
                <th>
                    <div class="style_prevu_kit"><img src="{{url('images/farm.jpg ')}}" alt="farm" width="170" height="170">
                        <div class="round">
                            <u>ITTIPORN KEAWUMPAI</u>
                            <h5>590619681</h5>
                            Developer
                        </div>
                    </div>
                </th>
            </tr>
        </table>

        <br><br><br><br><br><br><br><br>
        <div class="flex-center position-ref links">
            <a href="/" class="button cool-link">back</a>
        </div>

    </div>
</body>

</html>