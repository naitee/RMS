<?php $client = new GuzzleHttp\Client(['headers' => ['Teamup-Token' => 'b3599f06270e7573e706cd1078f92249368ecd11d3a06d1da242641de81fd6a8']]);
$sdate = '2018-8-10';
$edate = '2018-8-10';
$result = $client->get('https://teamup.com/ksg7y4nwkfp7q6xyio/events?startDate=' . $sdate . '&endDate=' . $edate);
date_default_timezone_set("Asia/Bangkok");
$data = json_decode($result->getBody());
for ($i = 0; $i < sizeof($data->events); $i++) {
    $room[$i] = $data->events[$i]->who;
    preg_match('/\([0-9]+\)/', $room[$i], $match[$i]);
    $match[$i] = substr($match[$i][0], 1, -1);
    $Stime[$i] = date('G', strtotime($data->events[$i]->start_dt)) * 60 + date('i', strtotime($data->events[$i]->start_dt));
    $Etime[$i] = date('G', strtotime($data->events[$i]->end_dt)) * 60 + date('i', strtotime($data->events[$i]->end_dt));
}
?>
<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
<link href="https://fonts.googleapis.com/css?family=Athiti|Pattaya" rel="stylesheet">
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
<link rel="stylesheet" href="css/style.css">
<!-- Styles -->
<style>
    /* FARM CODE TIME SLIDER */
    #time-range p {
        font-family: "Arial", sans-serif;
        font-size: 14px;
        color: #FFFFFF;
    }

    .h3 {
        font-family: 'Athiti', sans-serif;
    }

    .ui-slider-horizontal {
        height: 8px;
        background: #D7D7D7;
        border: 1px solid #BABABA;
        box-shadow: 0 1px 0 #FFF, 0 1px 0 #CFCFCF inset;
        clear: both;
        margin: 8px 0;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        -ms-border-radius: 6px;
        -o-border-radius: 6px;
        border-radius: 6px;
    }

    .ui-slider {
        position: relative;
        text-align: left;
    }

    .ui-slider-horizontal .ui-slider-range {
        top: -1px;
        height: 100%;
    }

    .ui-slider .ui-slider-range {
        position: absolute;
        z-index: 1;
        height: 8px;
        font-size: .7em;
        display: block;
        border: 1px solid #5BA8E1;
        box-shadow: 0 1px 0 #AAD6F6 inset;
        -moz-border-radius: 6px;
        -webkit-border-radius: 6px;
        -khtml-border-radius: 6px;
        border-radius: 6px;
        background: #81B8F3;
        background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgi…pZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
        background-size: 100%;
        background-image: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0%, #A0D4F5), color-stop(100%, #81B8F3));
        background-image: -webkit-linear-gradient(top, #A0D4F5, #81B8F3);
        background-image: -moz-linear-gradient(top, #A0D4F5, #81B8F3);
        background-image: -o-linear-gradient(top, #A0D4F5, #81B8F3);
        background-image: linear-gradient(top, #A0D4F5, #81B8F3);
    }

    .ui-slider .ui-slider-handle {
        border-radius: 50%;
        background: #F9FBFA;
        background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgi…pZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
        background-size: 100%;
        background-image: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0%, #C7CED6), color-stop(100%, #F9FBFA));
        background-image: -webkit-linear-gradient(top, #C7CED6, #F9FBFA);
        background-image: -moz-linear-gradient(top, #C7CED6, #F9FBFA);
        background-image: -o-linear-gradient(top, #C7CED6, #F9FBFA);
        background-image: linear-gradient(top, #C7CED6, #F9FBFA);
        width: 22px;
        height: 22px;
        -webkit-box-shadow: 0 2px 3px -1px rgba(0, 0, 0, 0.6), 0 -1px 0 1px rgba(0, 0, 0, 0.15) inset, 0 1px 0 1px rgba(255, 255, 255, 0.9) inset;
        -moz-box-shadow: 0 2px 3px -1px rgba(0, 0, 0, 0.6), 0 -1px 0 1px rgba(0, 0, 0, 0.15) inset, 0 1px 0 1px rgba(255, 255, 255, 0.9) inset;
        box-shadow: 0 2px 3px -1px rgba(0, 0, 0, 0.6), 0 -1px 0 1px rgba(0, 0, 0, 0.15) inset, 0 1px 0 1px rgba(255, 255, 255, 0.9) inset;
        -webkit-transition: box-shadow .3s;
        -moz-transition: box-shadow .3s;
        -o-transition: box-shadow .3s;
        transition: box-shadow .3s;
    }

    .ui-slider .ui-slider-handle {
        position: absolute;
        z-index: 2;
        width: 22px;
        height: 22px;
        cursor: default;
        border: none;
        cursor: pointer;
    }

    .ui-slider .ui-slider-handle:after {
        content: "";
        position: absolute;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        top: 50%;
        margin-top: -4px;
        left: 50%;
        margin-left: -4px;
        background: #30A2D2;
        -webkit-box-shadow: 0 1px 1px 1px rgba(22, 73, 163, 0.7) inset, 0 1px 0 0 #FFF;
        -moz-box-shadow: 0 1px 1px 1px rgba(22, 73, 163, 0.7) inset, 0 1px 0 0 white;
        box-shadow: 0 1px 1px 1px rgba(22, 73, 163, 0.7) inset, 0 1px 0 0 #FFF;
    }

    .ui-slider-horizontal .ui-slider-handle {
        top: -.5em;
        margin-left: -.6em;
    }

    .ui-slider a:focus {
        outline: none;
    }

    #slider-range {
        width: 90%;
        margin: 0 auto;
    }

    #time-range {
        width: 400px;
    }

    < !-- .slidecontainer {
        width: 100%;
        /* Width of the outside container */
    }

    /* The slider itself */
    .slider {
        -webkit-appearance: none;
        /* Override default CSS styles */
        appearance: none;
        width: 100%;
        /* Full-width */
        height: 25px;
        /* Specified height */
        background: #d3d3d3;
        /* Grey background */
        outline: none;
        /* Remove outline */
        opacity: 0.7;
        /* Set transparency (for mouse-over effects on hover) */
        -webkit-transition: .2s;
        /* 0.2 seconds transition on hover */
        transition: opacity .2s;
    }

    /* Mouse-over effects */
    .slider:hover {
        opacity: 1;
        /* Fully shown on mouse-over */
    }

    /* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
    .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        /* Override default look */
        appearance: none;
        width: 25px;
        /* Set a specific slider handle width */
        height: 25px;
        /* Slider handle height */
        background: #4CAF50;
        /* Green background */
        cursor: pointer;
        /* Cursor on hover */
    }

    .slider::-moz-range-thumb {
        width: 25px;
        /* Set a specific slider handle width */
        height: 25px;
        /* Slider handle height */
        background: #4CAF50;
        /* Green background */
        cursor: pointer;
        /* Cursor on hover */
    }



    html,
    body {
        color: #FFFFFF;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .bg {
        background-image: url("images/bg2.png");
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

    .top-left {
        position: absolute;
        left: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 50px;

    }

    .h1 {
        font-size: 15px;

    }

    .links>a {
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

    .rectangle {
        height: 50px;
        width: 100px;
        background-color: #555;
    }

    .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    img {
        border: 4px solid #021a40;
    }

    #calendar {
        margin-left: auto;
        margin-right: auto;
        width: 320px;
        font-family: 'Lato', sans-serif;
    }

    #calendar_weekdays div {
        display: inline-block;
        vertical-align: top;
    }

    #calendar_content,
    #calendar_weekdays,
    #calendar_header {
        position: relative;
        width: 320px;
        overflow: hidden;
        float: left;
        z-index: 10;
    }

    #calendar_weekdays div,
    #calendar_content div {
        width: 40px;
        height: 40px;
        overflow: hidden;
        text-align: center;
        background-color: #FFFFFF;
        color: #787878;
    }

    #calendar_content {
        -webkit-border-radius: 0px 0px 12px 12px;
        -moz-border-radius: 0px 0px 12px 12px;
        border-radius: 0px 0px 12px 12px;
    }

    #calendar_content div {
        float: left;
    }

    #calendar_content div:hover {
        background-color: #F8F8F8;
    }

    #calendar_content div.blank {
        background-color: #E8E8E8;
    }

    #calendar_header,
    #calendar_content div.today {
        zoom: 1;
        filter: alpha(opacity=70);
        opacity: 0.7;
    }

    #calendar_content div.today {
        color: #FFFFFF;
    }

    #calendar_header {
        width: 100%;
        height: 37px;
        text-align: center;
        background-color: #FF6860;
        padding: 18px 0;
        -webkit-border-radius: 12px 12px 0px 0px;
        -moz-border-radius: 12px 12px 0px 0px;
        border-radius: 12px 12px 0px 0px;
    }

    #calendar_header h1 {
        font-size: 1.5em;
        color: #FFFFFF;
        float: left;
        width: 70%;
    }

    i[class^=icon-chevron] {
        color: #FFFFFF;
        float: left;
        width: 15%;
        border-radius: 50%;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" type="image/x-icon" href="images/RMS.ico" />
    <title>RMS: 5th floor</title>


</head>

<body>
    <div class="bg">
        <div class="flex-center position-ref full-height">

            <div class="top-left">



                <div class="title m-b-md links">
                    <strong>
                        <font color="#636b6f">Room Monitoring System</font>
                    </strong>
                </div>
                <div><img src="{{url('images/5floor.jpg ')}} "></div>
                <div></div>

                <!-- Color Room Blog -->
                <div>
                    <!-- AJ room -->
                    <div>
                        <div id='BlogAJ' style="position:absolute; top:100px; right:-100px; z-index:3">
                            <canvas id="canvasAJ" width="75" height="75" position="Center"></canvas>
                        </div>
                        <div id='CharacterAJ' class="h3" style="position:absolute; top:120px; right:-240px; z-index:3">
                            <font color="#636b6f">
                                <h3>ห้องพักอาจารย์</h3>
                            </font>
                        </div>
                    </div>

                    <!-- LAB -->
                    <div>
                        <div id='BlogLAB' style="position:absolute; top:150px; right:-100px; z-index:3">
                            <canvas id="canvasLABdemo" width="75" height="75" position="Center"></canvas>
                        </div>
                        <div id='CharacterLABdemo' class="h3" style="position:absolute; top:170px; right:-195px; z-index:3">
                            <font color="#636b6f">
                                <h3>ห้องแลป</h3>
                            </font>
                        </div>
                    </div>

                    <!-- Busy -->
                    <div>
                        <div id='BlogBusy' style="position:absolute; top:200px; right:-100px; z-index:3">
                            <canvas id="canvasBusy" width="75" height="75" position="Center"></canvas>
                        </div>
                        <div id='CharacterBusy' class="h3" style="position:absolute; top:220px; right:-180px; z-index:3">
                            <font color="#636b6f">
                                <h3>ไม่ว่าง</h3>
                            </font>
                        </div>
                    </div>

                    <!-- Avaible -->
                    <div>
                        <div id='BlogAvai' style="position:absolute; top:250px; right:-100px; z-index:3">
                            <canvas id="canvasAvai" width="75" height="75" position="Center"></canvas>
                        </div>
                        <div id='CharacterBusy' class="h3" style="position:absolute; top:270px; right:-165px; z-index:3">
                            <font color="#636b6f">
                                <h3>ว่าง</h3>
                            </font>
                        </div>
                    </div>

                    <!-- Shop -->
                    <div>
                        <div id='BlogShop' style="position:absolute; top:300px; right:-100px; z-index:3">
                            <canvas id="canvasShop" width="75" height="75" position="Center"></canvas>
                        </div>
                        <div id='CharacterShop' class="h3" style="position:absolute; top:320px; right:-230px; z-index:3">
                            <font color="#636b6f">
                                <h3>ห้องพนักงาน</h3>
                            </font>
                        </div>
                    </div>


                </div>

                <!-- Button -->
                <div>
                    <div id='BlogButton' style="position:absolute; top:450px; right:-185px; z-index:3">
                        <div><a href="/" class="button">" Home " </a></div>
                        <div><a href="/fouth_floor" class="button">4th Floor</a></div>
                        <div><a href="/fifth_floor" class="button">5th Floor</a></div>
                    </div>

                    <!-- Color Explain -->
                    <script>
                        // AJ Room
                        var c = document.getElementById("canvasAJ");
                        var ctx = c.getContext("2d");
                        ctx.rect(30, 30, 200, 200);
                        ctx.fillStyle = "#0000FF";
                        ctx.fill();

                        // LAB Room
                        var c = document.getElementById("canvasLABdemo");
                        var ctx = c.getContext("2d");
                        ctx.rect(30, 30, 200, 200);
                        ctx.fillStyle = "#800080";
                        ctx.fill();

                        // Busy
                        var c = document.getElementById("canvasBusy");
                        var ctx = c.getContext("2d");
                        ctx.rect(30, 30, 200, 200);
                        ctx.fillStyle = "#FF0000";
                        ctx.fill();

                        // Avaible
                        var c = document.getElementById("canvasAvai");
                        var ctx = c.getContext("2d");
                        ctx.rect(30, 30, 200, 200);
                        ctx.fillStyle = "#99ff99";
                        ctx.fill();

                        // Staff
                        var c = document.getElementById("canvasShop");
                        var ctx = c.getContext("2d");
                        ctx.rect(30, 30, 200, 200);
                        ctx.fillStyle = "#800000";
                        ctx.fill();
                    </script>

                    <!-- Room -->
                    <div>
                        <!-- 502 -->
                        <div>
                            <div id='Blog502' style="position:absolute; top:104px; right:108px; z-index:3">
                                <canvas id="canvas502" width="99" height="300" position="Center"></canvas>
                            </div>
                            <div id='Character502' style="position:absolute; top:130px; right:115px; z-index:3">
                                <h1>502</h1>
                            </div>
                        </div>

                        <!-- 501 -->
                        <div>
                            <div id='Blog501' style="position:absolute; top:104px; right:181px; z-index:3">
                                <canvas id="canvas501" width="97" height="300" position="Center"></canvas>
                            </div>
                            <div id='Character501' style="position:absolute; top:130px; right:185px; z-index:3">
                                <h1>501</h1>
                            </div>
                        </div>

                        <!-- 529 -->
                        <div>
                            <div id='Blog529' style="position:absolute; top:104px; right:252px; z-index:3">
                                <canvas id="canvas529" width="62" height="103" position="Center"></canvas>
                            </div>
                            <div id='Character529' style="position:absolute; top:130px; right:253px; z-index:3">
                                <h4>529</h4>
                            </div>
                        </div>

                        <!-- 528 -->
                        <div>
                            <div id='Blog528' style="position:absolute; top:104px; right:287px; z-index:3">
                                <canvas id="canvas528" width="65" height="103" position="Center"></canvas>
                            </div>
                            <div id='Character528' style="position:absolute; top:130px; right:289px; z-index:3">
                                <h4>528</h4>
                            </div>
                        </div>

                        <!-- 530 -->
                        <div>
                            <div id='Blog530' style="position:absolute; top:180px; right:296px; z-index:3">
                                <canvas id="canvas530" width="56" height="53" position="Center"></canvas>
                            </div>
                            <div id='Character530' style="position:absolute; top:190px; right:297px; z-index:3">
                                <h5>530</h5>
                            </div>
                        </div>

                        <!-- 521 -->
                        <div>
                            <div id='Blog521' style="position:absolute; top:247px; right:322px; z-index:3">
                                <canvas id="canvas521" width="173" height="102" position="Center"></canvas>
                            </div>
                            <div id='Character521' style="position:absolute; top:265px; right:360px; z-index:3">
                                <h1>521</h1>
                            </div>
                        </div>

                        <!-- 518 -->
                        <div>
                            <div id='Blog518' style="position:absolute; top:318px; right:460px; z-index:3" class="container">
                                <canvas id="canvas518" width="106" height="300"></canvas>
                            </div>
                            <div id='Character518' style="position:absolute; top:350px; right:466px; z-index:3">
                                <h1>518</h1>
                            </div>
                        </div>

                        <!-- 517 -->
                        <div>
                            <div id='Blog517' style="position:absolute; top:459px; right:394px; z-index:3" class="container">
                                <canvas id="canvas517" width="171" height="105"></canvas>
                            </div>
                            <div id='Character517' style="position:absolute; top:475px; right:433px; z-index:3">
                                <h1>517</h1>
                            </div>
                        </div>

                        <!-- 516 -->
                        <div>
                            <div id='Blog516' style="position:absolute; top:458px; right:248px; z-index:3" class="container">
                                <canvas id="canvas516" width="173" height="106"></canvas>
                            </div>
                            <div id='Character516' style="position:absolute; top:475px; right:285px; z-index:3">
                                <h1>516</h1>
                            </div>
                        </div>

                        <!-- 515 -->
                        <div>
                            <div id='Blog515' style="position:absolute; top:431px; right:216px; z-index:3" class="container">
                                <canvas id="canvas515" width="66" height="61"></canvas>
                            </div>
                            <div id='Character515' style="position:absolute; top:445px; right:218px; z-index:3">
                                <h4>515</h4>
                            </div>
                        </div>

                        <!-- 514 -->
                        <div>
                            <div id='Blog514' style="position:absolute; top:419px; right:177px; z-index:3" class="container">
                                <canvas id="canvas514" width="65" height="73"></canvas>
                            </div>
                            <div id='Character514' style="position:absolute; top:434px; right:180px; z-index:3">
                                <h4>514</h4>
                            </div>
                        </div>


                        <!-- 510 -->
                        <div>
                            <div id='Blog510' style="position:absolute; top:317px; right:177px; z-index:3" class="container">
                                <canvas id="canvas510" width="65" height="62"></canvas>
                            </div>
                            <div id='Character510' style="position:absolute; top:328px; right:178px; z-index:3">
                                <h4>510</h4>
                            </div>
                        </div>

                        <!-- 506 -->
                        <div>
                            <div id='Blog506' style="position:absolute; top:293px; right:184px; z-index:3" class="container">
                                <canvas id="canvas506" width="60" height="51"></canvas>
                            </div>
                            <div id='Character506' style="position:absolute; top:304px; right:183px; z-index:3">
                                <h4>506</h4>
                            </div>
                        </div>

                        <!-- 505 -->
                        <div>
                            <div id='Blog505' style="position:absolute; top:293px; right:145px; z-index:3" class="container">
                                <canvas id="canvas505" width="66" height="57"></canvas>
                            </div>
                            <div id='Character505' style="position:absolute; top:304px; right:148px; z-index:3">
                                <h4>505</h4>
                            </div>
                        </div>

                        <!-- 504 -->
                        <div>
                            <div id='Blog504' style="position:absolute; top:293px; right:108px; z-index:3" class="container">
                                <canvas id="canvas504" width="65" height="57"></canvas>
                            </div>
                            <div id='Character504' style="position:absolute; top:304px; right:110px; z-index:3">
                                <h4>504</h4>
                            </div>
                        </div>

                        <!-- 503 -->
                        <div>
                            <div id='Blog503' style="position:absolute; top:249px; right:108px; z-index:3" class="container">
                                <canvas id="canvas503" width="74" height="58"></canvas>
                            </div>
                            <div id='Character503' style="position:absolute; top:260px; right:113px; z-index:3">
                                <h4>503</h4>
                            </div>
                        </div>

                        <!-- 507 -->
                        <div>
                            <div id='Blog507' style="position:absolute; top:249px; right:154px; z-index:3" class="container">
                                <canvas id="canvas507" width="90" height="58"></canvas>
                            </div>
                            <div id='Character507' style="position:absolute; top:260px; right:167px; z-index:3">
                                <h4>507</h4>
                            </div>
                        </div>

                        <!-- 509 -->
                        <div>
                            <div id='Blog509' style="position:absolute; top:248px; right:230px; z-index:3" class="container">
                                <canvas id="canvas509" width="65" height="65"></canvas>
                            </div>
                            <div id='Character509' style="position:absolute; top:263px; right:232px; z-index:3">
                                <h4>509</h4>
                            </div>
                        </div>

                        <!-- 508 -->
                        <div>
                            <div id='Blog508' style="position:absolute; top:286px; right:230px; z-index:3" class="container">
                                <canvas id="canvas508" width="65" height="65"></canvas>
                            </div>
                            <div id='Character508' style="position:absolute; top:298px; right:232px; z-index:3">
                                <h4>508</h4>
                            </div>
                        </div>

                        <!-- 520 -->
                        <div>
                            <div id='Blog520' style="position:absolute; top:357px; right:390px; z-index:3" class="container">
                                <canvas id="canvas520" width="65" height="60"></canvas>
                            </div>
                            <div id='Character520' style="position:absolute; top:368px; right:392px; z-index:3">
                                <h4>520</h4>
                            </div>
                        </div>

                        <!-- 519 -->
                        <div>
                            <div id='Blog519' style="position:absolute; top:391px; right:390px; z-index:3" class="container">
                                <canvas id="canvas519" width="65" height="63"></canvas>
                            </div>
                            <div id='Character519' style="position:absolute; top:403px; right:392px; z-index:3">
                                <h4>519</h4>
                            </div>
                        </div>

                    </div>

                    <div id='5th_floor' class="h1" style="position:absolute; top:590px; right:255px; z-index:3">
                        <font color="#636b6f">
                            <h1>5th Floor</h1>
                        </font>
                    </div>

                    <br>
                    <br>

                    <strong>
                        <font color="#636b6f">Date :<span id="today"></span></font>
                    </strong>
                    <script>
                        var today = new Date();
                        var dd = today.getDate();
                        var mm = today.getMonth() + 1;
                        var yyyy = today.getFullYear();
                        if (dd < 10) {
                            dd = '0' + dd;
                        }

                        if (mm < 10) {
                            mm = '0' + mm;
                        }
                        current = ' ' + mm + '-' + dd + '-' + yyyy;
                        document.getElementById("today").innerHTML = current
                    </script>



                    <div style="position:absolute; top:660px; right:460px; z-index:3">
                        <strong>
                            <font color="#636b6f">
                                <p>Time : <span class="slider-time">9:00AM</span></p>
                            </font>
                        </strong>
                    </div>

                    <!-- Slider -->
                    <div>

                        <div id="time-range" style="position:absolute; top:670px; right:0px; z-index:3">
                            <div class="sliders_step1">
                                <div id="slider-range"></div>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

                    <!-- Farm -->
                    <script>
                        // On document ready
                        $(document).ready(function() {
                            draw();
                        });
                        // FARM SCRIPT######################################
                        $("#slider-range").slider({
                            // range: true,
                            min: 480,
                            max: 1080,
                            step: 30,
                            values: [540],
                            slide: function(e, ui) {
                                var timecon = Math.floor(ui.values[0])
                                var hours1 = Math.floor(ui.values[0] / 60);
                                var minutes1 = ui.values[0] - (hours1 * 60);
                                if (hours1.length == 1) hours1 = '0' + hours1;
                                if (minutes1.length == 1) minutes1 = '0' + minutes1;
                                if (minutes1 == 0) minutes1 = '00';
                                if (hours1 >= 12) {
                                    if (hours1 == 12) {
                                        hours1 = hours1;
                                        minutes1 = minutes1 + " PM";
                                    } else {
                                        hours1 = hours1 - 12;
                                        minutes1 = minutes1 + " PM";
                                    }
                                } else {
                                    hours1 = hours1;
                                    minutes1 = minutes1 + " AM";
                                }
                                if (hours1 == 0) {
                                    hours1 = 12;
                                    minutes1 = minutes1;
                                }
                                $('.slider-time').html(hours1 + ':' + minutes1);
                                var hours2 = Math.floor(ui.values[1] / 60);
                                var minutes2 = ui.values[1] - (hours2 * 60);
                                if (hours2.length == 1) hours2 = '0' + hours2;
                                if (minutes2.length == 1) minutes2 = '0' + minutes2;
                                if (minutes2 == 0) minutes2 = '00';
                                if (hours2 >= 12) {
                                    if (hours2 == 12) {
                                        hours2 = hours2;
                                        minutes2 = minutes2 + " PM";
                                    } else if (hours2 == 24) {
                                        hours2 = 11;
                                        minutes2 = "59 PM";
                                    } else {
                                        hours2 = hours2 - 12;
                                        minutes2 = minutes2 + " PM";
                                    }
                                } else {
                                    hours2 = hours2;
                                    minutes2 = minutes2 + " AM";
                                }
                                $('.slider-time2').html(hours2 + ':' + minutes2);
                                draw(ui);
                            }
                        });

                        function draw(ui) {
                            // Fake get ui
                            if (ui == null) {
                                var ui = {
                                    values: [$('#slider-range').slider("values")]
                                };
                            }
                            <?php for ($i = 0; $i < sizeof($match); $i++) : ?>
                                // Check is room  exists
                                if ($('#canvas<?= $match[$i] ?>').length) {
                                    var c = $('#canvas<?= $match[$i] ?>');
                                    var context = c[0].getContext('2d');
                                    if (<?= $Stime[$i] ?> <= ui.values[0] && ui.values[0] <= <?= $Etime[$i] ?>) {
                                        context.fillStyle = "#ff0000";
                                        context.fillRect(30, 30, 300, 106);
                                    } else {
                                        context.fillStyle = "#99ff99";
                                        context.fillRect(30, 30, 300, 106);
                                    }
                                }
                            <?php endfor; ?>
                            // 502
                            var c = $('#canvas502');
                            var context = c[0].getContext('2d');

                            // 501
                            var c = $('#canvas501');
                            var context = c[0].getContext('2d');

                            // 529
                            var c = $('#canvas529');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#800000";
                            context.fillRect(30, 30, 300, 100);


                            // 528
                            var c = $('#canvas528');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#800000";
                            context.fillRect(30, 30, 300, 100);
                            // 530
                            var c = $('#canvas530');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#800000";
                            context.fillRect(30, 30, 300, 100);
                            // 521
                            var c = $('#canvas521');
                            var context = c[0].getContext('2d');
                            // 518
                            var c = $('#canvas518');
                            var context = c[0].getContext('2d');
                            context.fillRect(30, 30, 300, 136);

                            // 517
                            var c = $('#canvas517');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#800080";
                            context.fillRect(30, 30, 300, 100);

                            // 516
                            var c = $('#canvas516');
                            var context = c[0].getContext('2d');

                            // 515
                            var c = $('#canvas515');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 300, 100);

                            // 514
                            var c = $('#canvas514');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 300, 100);

                            // // 512
                            // var c = $('#canvas512');
                            // var context = c[0].getContext('2d');
                            // if (ui.values[0] >= 480 && ui.values[0] <= 570) {
                            //     context.fillStyle = "#99ff99";
                            //     context.fillRect(30, 30, 300, 100);
                            // } else if (ui.value[0] >= 780 && ui.value[0] <= 870) {
                            //     context.fillStyle = "#99ff99";
                            //     context.fillRect(30, 30, 300, 100);
                            // } else {
                            //     context.fillStyle = "#ff0000";
                            //     context.fillRect(30, 30, 300, 100);
                            // }
                            // // 511
                            // var c = $('#canvas511');
                            // var context = c[0].getContext('2d');
                            // if (ui.values[0] >= 480 && ui.values[0] <= 570) {
                            //     context.fillStyle = "#99ff99";
                            //     context.fillRect(30, 30, 300, 100);
                            // } else if (ui.value[0] >= 780 && ui.value[0] <= 870) {
                            //     context.fillStyle = "#99ff99";
                            //     context.fillRect(30, 30, 300, 100);
                            // } else {
                            //     context.fillStyle = "#ff0000";
                            //     context.fillRect(30, 30, 300, 100);
                            // }
                            // 510
                            var c = $('#canvas510');
                            var context = c[0].getContext('2d');

                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 300, 100);

                            // 506
                            var c = $('#canvas506');
                            var context = c[0].getContext('2d');

                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 300, 100);

                            // 505
                            var c = $('#canvas505');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 300, 100);

                            // 504
                            var c = $('#canvas504');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 300, 100);

                            // 503
                            var c = $('#canvas503');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 300, 100);
                            // 507
                            var c = $('#canvas507');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 300, 100);
                            // 509
                            var c = $('#canvas509');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 300, 100);
                            // 508
                            var c = $('#canvas508');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 300, 100);
                            // 520
                            var c = $('#canvas520');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 300, 100);
                            // 519
                            var c = $('#canvas519');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 300, 100);

                        }
                    </script>


                </div>




                <div style="position:absolute; top:70px; right:-850px;">
                    <div id="calendar">
                        <div id="calendar_header"><i class="icon-chevron-left"></i>
                            <h1></h1><i class="icon-chevron-right"></i>
                        </div>
                        <div id="calendar_weekdays"></div>
                        <div id="calendar_content"></div>
                    </div>
                </div>

                <script>
                    $(function() {
                        function c() {
                            p();
                            var e = h();
                            var r = 0;
                            var u = false;
                            l.empty();
                            while (!u) {
                                if (s[r] == e[0].weekday) {
                                    u = true
                                } else {
                                    l.append('<div class="blank"></div>');
                                    r++
                                }
                            }
                            for (var c = 0; c < 42 - r; c++) {
                                if (c >= e.length) {
                                    l.append('<div class="blank"></div>')
                                } else {
                                    var v = e[c].day;
                                    var m = g(new Date(t, n - 1, v)) ? '<div class="today">' : "<div>";
                                    l.append(m + "" + v + "</div>")
                                }
                            }
                            var y = o[n - 1];
                            a.css("background-color", y).find("h1").text(i[n - 1] + " " + t);
                            f.find("div").css("color", y);
                            l.find(".today").css("background-color", y);
                            d()
                        }

                        function h() {
                            var e = [];
                            for (var r = 1; r < v(t, n) + 1; r++) {
                                e.push({
                                    day: r,
                                    weekday: s[m(t, n, r)]
                                })
                            }
                            return e
                        }

                        function p() {
                            f.empty();
                            for (var e = 0; e < 7; e++) {
                                f.append("<div>" + s[e].substring(0, 3) + "</div>")
                            }
                        }

                        function d() {
                            var t;
                            var n = $("#calendar").css("width", e + "px");
                            n.find(t = "#calendar_weekdays, #calendar_content").css("width", e + "px").find("div").css({
                                width: e / 7 + "px",
                                height: e / 7 + "px",
                                "line-height": e / 7 + "px"
                            });
                            n.find("#calendar_header").css({
                                height: e * (1 / 7) + "px"
                            }).find('i[class^="icon-chevron"]').css("line-height", e * (1 / 7) + "px")
                        }

                        function v(e, t) {
                            return (new Date(e, t, 0)).getDate()
                        }

                        function m(e, t, n) {
                            return (new Date(e, t - 1, n)).getDay()
                        }

                        function g(e) {
                            return y(new Date) == y(e)
                        }

                        function y(e) {
                            return e.getFullYear() + "/" + (e.getMonth() + 1) + "/" + e.getDate()
                        }

                        function b() {
                            var e = new Date;
                            t = e.getFullYear();
                            n = e.getMonth() + 1
                        }
                        var e = 480;
                        var t = 2013;
                        var n = 9;
                        var r = [];
                        var i = ["JANUARY", "FEBRUARY", "MARCH", "APRIL", "MAY", "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER", "NOVEMBER", "DECEMBER"];
                        var s = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                        var o = ["#16a085", "#1abc9c", "#c0392b", "#27ae60", "#FF6860", "#f39c12", "#f1c40f", "#e67e22", "#2ecc71", "#e74c3c", "#d35400", "#2c3e50"];
                        var u = $("#calendar");
                        var a = u.find("#calendar_header");
                        var f = u.find("#calendar_weekdays");
                        var l = u.find("#calendar_content");
                        b();
                        c();
                        a.find('i[class^="icon-chevron"]').on("click", function() {
                            var e = $(this);
                            var r = function(e) {
                                n = e == "next" ? n + 1 : n - 1;
                                if (n < 1) {
                                    n = 12;
                                    t--
                                } else if (n > 12) {
                                    n = 1;
                                    t++
                                }
                                c()
                            };
                            if (e.attr("class").indexOf("left") != -1) {
                                r("previous")
                            } else {
                                r("next")
                            }
                        })
                    })
                </script>





            </div>
        </div>

</body>

</html>