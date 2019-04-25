<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
<link href="https://fonts.googleapis.com/css?family=Athiti|Pattaya" rel="stylesheet">
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
        background-color: powderblue;
        color: #FFFFFF;
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
        font-size: 50px;
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
        border:4px solid #021a40;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Room Monitoring System</title>


</head>

<body>
    <div class="flex-center position-ref full-height">

        <div class="top-left">



            <div class="title m-b-md links" >
                <strong><font color="#636b6f">Room Monitoring System</font></strong>
            </div>
            <div><img src="{{url('images/4floor.jpg ')}} " ></div>


            <!-- Color Room Blog -->
            <div>
                <!-- AJ room -->
                <div>
                    <div id='BlogAJ' style="position:absolute; top:100px; right:-100px; z-index:3">
                        <canvas id="canvasAJ" width="75" height="75" position="Center"></canvas>
                    </div>
                    <div id='CharacterAJ' class="h3" style="position:absolute; top:120px; right:-240px; z-index:3">
                    <font color="#636b6f"><h3>ห้องพักอาจารย์</h3></font>
                    </div>
                </div>

                <!-- LAB -->
                <div>
                    <div id='BlogLAB' style="position:absolute; top:150px; right:-100px; z-index:3">
                        <canvas id="canvasLABdemo" width="75" height="75" position="Center"></canvas>
                    </div>
                    <div id='CharacterLABdemo' class="h3" style="position:absolute; top:170px; right:-195px; z-index:3">
                    <font color="#636b6f"><h3>ห้องแลป</h3></font>
                    </div>
                </div>

                <!-- Busy -->
                <div>
                    <div id='BlogBusy' style="position:absolute; top:200px; right:-100px; z-index:3">
                        <canvas id="canvasBusy" width="75" height="75" position="Center"></canvas>
                    </div>
                    <div id='CharacterBusy' class="h3" style="position:absolute; top:220px; right:-180px; z-index:3">
                    <font color="#636b6f"><h3>ไม่ว่าง</h3></font>
                    </div>
                </div>

                <!-- Avaible -->
                <div>
                    <div id='BlogAvai' style="position:absolute; top:250px; right:-100px; z-index:3">
                        <canvas id="canvasAvai" width="75" height="75" position="Center"></canvas>
                    </div>
                    <div id='CharacterBusy' class="h3" style="position:absolute; top:270px; right:-165px; z-index:3">
                    <font color="#636b6f"><h3>ว่าง</h3></font>
                    </div>
                </div>

                <!-- Shop -->
                <div>
                    <div id='BlogShop' style="position:absolute; top:300px; right:-100px; z-index:3">
                        <canvas id="canvasShop" width="75" height="75" position="Center"></canvas>
                    </div>
                    <div id='CharacterShop' class="h3" style="position:absolute; top:320px; right:-245px; z-index:3">
                    <font color="#636b6f"><h3>ร้านค้านักศึกษา</h3></font>
                    </div>
                </div>

                <!-- Student Room -->
                <div>
                    <div id='BlogStudent' style="position:absolute; top:350px; right:-100px; z-index:3">
                        <canvas id="canvasStudent" width="75" height="75" position="Center"></canvas>
                    </div>
                    <div id='CharacterStudent' class="h3" style="position:absolute; top:370px; right:-230px; z-index:3">
                    <font color="#636b6f"><h3>ห้องนักศึกษา</h3></font>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div>
            <div id='BlogButton' style="position:absolute; top:450px; right:-185px; z-index:3">
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
 
                // Shop
                var c = document.getElementById("canvasShop");
                var ctx = c.getContext("2d");
                ctx.rect(30, 30, 200, 200);
                ctx.fillStyle = "#800000";
                ctx.fill();
 
                // Student Room
                var c = document.getElementById("canvasStudent");
                var ctx = c.getContext("2d");
                ctx.rect(30, 30, 200, 200);
                ctx.fillStyle = "#FFA500";
                ctx.fill();
            </script>
 


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

                    // Shop
                    var c = document.getElementById("canvasShop");
                    var ctx = c.getContext("2d");
                    ctx.rect(30, 30, 200, 200);
                    ctx.fillStyle = "#800000";
                    ctx.fill();

                    // Student Room
                    var c = document.getElementById("canvasStudent");
                    var ctx = c.getContext("2d");
                    ctx.rect(30, 30, 200, 200);
                    ctx.fillStyle = "#FFA500";
                    ctx.fill();
                </script>

                <!-- Room -->
                <div>
                    <!-- 402 -->
                    <div>
                        <div id='Blog402' style="position:absolute; top:119px; right:91px; z-index:3">
                            <canvas id="canvas402" width="96" height="220" position="Center"></canvas>
                        </div>
                        <div id='Character402' style="position:absolute; top:130px; right:95px; z-index:3">
                            <h1>402</h1>
                        </div>
                    </div>

                    <!-- 401 -->
                    <div>
                        <div id='Blog401' style="position:absolute; top:119px; right:160px; z-index:3">
                            <canvas id="canvas401" width="95" height="220" position="Center"></canvas>
                        </div>
                        <div id='Character402' style="position:absolute; top:130px; right:165px; z-index:3">
                            <h1>401</h1>
                        </div>
                    </div>

                    <!-- 422 -->
                    <div>
                        <div id='Blog422' style="position:absolute; top:119px; right:229px; z-index:3">
                            <canvas id="canvas422" width="97" height="100" position="Center"></canvas>
                        </div>
                        <div id='Character422' style="position:absolute; top:130px; right:234px; z-index:3">
                            <h1>422</h1>
                        </div>
                    </div>

                    <!-- 415 -->
                    <div>
                        <div id='Blog415' style="position:absolute; top:258px; right:294px; z-index:3">
                            <canvas id="canvas415" width="95" height="98" position="Center"></canvas>
                        </div>
                        <div id='Character415' style="position:absolute; top:267px; right:297px; z-index:3">
                            <h1>415</h1>
                        </div>
                    </div>

                    <!-- LIL -->
                    <div>
                        <div id='BlogLIL' style="position:absolute; top:258px; right:362px; z-index:3">
                            <canvas id="canvasLIL" width="99" height="98" position="Center"></canvas>
                        </div>
                        <div id='CharacterLIL' style="position:absolute; top:265px; right:375px; z-index:3">
                            <h1>LIL</h1>
                        </div>
                    </div>

                    <!-- DentLab -->
                    <div>
                        <div id='BlogDent' style="position:absolute; top:326px; right:435px; z-index:3">
                            <canvas id="canvasDent" width="98" height="78" position="Center"></canvas>
                        </div>
                        <div id='CharacterDent' style="position:absolute; top:335px; right:440px; z-index:3">
                            <h2>Dent</h2>
                        </div>
                    </div>

                    <!-- 413 -->
                    <div>
                        <div id='Blog413' style="position:absolute; top:377px; right:435px; z-index:3">
                            <canvas id="canvas413" width="97" height="112" position="Center"></canvas>
                        </div>
                        <div id='Character413' style="position:absolute; top:385px; right:440px; z-index:3">
                            <h1>413</h1>
                        </div>
                    </div>

                    <!-- 412 -->
                    <div>
                        <div id='Blog412' style="position:absolute; top:462px; right:350px; z-index:3">
                            <canvas id="canvas412" width="80" height="102" position="Center"></canvas>
                        </div>
                        <div id='Character412' style="position:absolute; top:470px; right:353px; z-index:3">
                            <h2>412</h2>
                        </div>
                    </div>

                    <!-- LAB -->
                    <div>
                        <div id='BlogLAB' style="position:absolute; top:462px; right:288px; z-index:3">
                            <canvas id="canvasLAB" width="89" height="102" position="Center"></canvas>
                        </div>
                        <div id='CharacterLAB' style="position:absolute; top:470px; right:295px; z-index:3">
                            <h2>LAB</h2>
                        </div>
                    </div>

                    <!-- 411-->
                    <div>
                        <div id='Blog411' style="position:absolute; top:462px; right:226px; z-index:3">
                            <canvas id="canvas411" width="89" height="102" position="Center"></canvas>
                        </div>
                        <div id='Character411' style="position:absolute; top:470px; right:233px; z-index:3">
                            <h2>411</h2>
                        </div>
                    </div>

                    <!-- 414-->
                    <div>
                        <div id='Blog414' style="position:absolute; top:363px; right:362px; z-index:3">
                            <canvas id="canvas414" width="65" height="95" position="Center"></canvas>
                        </div>
                        <div id='Character414' style="position:absolute; top:373px; right:362px; z-index:3">
                            <h3>414</h3>
                        </div>
                    </div>

                    <!-- 410-->
                    <div>
                        <div id='Blog410' style="position:absolute; top:437px; right:194px; z-index:3">
                            <canvas id="canvas410" width="64" height="58" position="Center"></canvas>
                        </div>
                        <div id='Character410' style="position:absolute; top:445px; right:197px; z-index:3">
                            <h4>410</h4>
                        </div>
                    </div>

                    <!-- 409-->
                    <div>
                        <div id='Blog409' style="position:absolute; top:424px; right:157px; z-index:3">
                            <canvas id="canvas409" width="64" height="71" position="Center"></canvas>
                        </div>
                        <div id='Character409' style="position:absolute; top:432px; right:160px; z-index:3">
                            <h4>409</h4>
                        </div>
                    </div>

                    <!-- 403 -->
                    <div>
                        <div id='Blog403' style="position:absolute; top:259px; right:90px; z-index:3">
                            <canvas id="canvas403" width="82" height="56" position="Center"></canvas>
                        </div>
                        <div id='Character403' style="position:absolute; top:268px; right:98px; z-index:3">
                            <h3>403</h3>
                        </div>
                    </div>

                    <!-- 404 -->
                    <div>
                        <div id='Blog404' style="position:absolute; top:288px; right:90px; z-index:3">
                            <canvas id="canvas404" width="72" height="70" position="Center"></canvas>
                        </div>
                        <div id='Character404' style="position:absolute; top:297px; right:95px; z-index:3">
                            <h3>404</h3>
                        </div>
                    </div>
                </div>

                <div id='4floor' class="h1" style="position:absolute; top:580px; right:245px; z-index:3">
                <font color="#636b6f"><h1>4th Floor</h1></font>
                </div>

                <br>
                <br>
        
                <strong><font color="#636b6f">Date :<span id="today"></span></font></strong>
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
            

                <div style="position:absolute; top:660px; right:450px; z-index:3">
                <strong><font color="#636b6f"><p>Time : <span class="slider-time">9:00AM</span></p></font></strong>
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




                            // 402
                            var c = $('#canvas402');
                            var context = c[0].getContext('2d');
                            if (ui.values[0] >= 480 && ui.values[0] <= 570) {
                                context.fillStyle = "#99ff99";
                                context.fillRect(30, 30, 200, 103);
                            } else if (ui.value[0] >= 780 && ui.value[0] <= 870) {
                                context.fillStyle = "#99ff99";
                                context.fillRect(30, 30, 200, 103);
                            } else {
                                context.fillStyle = "#ff0000";
                                context.fillRect(30, 30, 200, 103);
                            }

                            // 401
                            var c = $('#canvas401');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#FFA500";
                            context.fillRect(30, 30, 200, 103);

                            // 422
                            var c = $('#canvas422');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#800000";
                            context.fillRect(30, 30, 200, 103);

                            // 415
                            var c = $('#canvas415');
                            var context = c[0].getContext('2d');
                            if (ui.values[0] >= 480 && ui.values[0] <= 570) {
                                context.fillStyle = "#99ff99";
                                context.fillRect(30, 30, 200, 100);
                            } else if (ui.value[0] >= 780 && ui.value[0] <= 870) {
                                context.fillStyle = "#99ff99";
                                context.fillRect(30, 30, 200, 100);
                            } else {
                                context.fillStyle = "#ff0000";
                                context.fillRect(30, 30, 200, 100);
                            }

                            // LIL
                            var c = $('#canvasLIL');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#800080";
                            context.fillRect(30, 30, 200, 100);

                            // Dent
                            var c = $('#canvasDent');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#800080";
                            context.fillRect(30, 30, 200, 100);

                            // 413
                            var c = $('#canvas413');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 200, 100);

                            // 412
                            var c = $('#canvas412');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#800080";
                            context.fillRect(30, 30, 200, 100);


                            // LAB
                            var c = $('#canvasLAB');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#800080";
                            context.fillRect(30, 30, 200, 100);

                            // 411
                            var c = $('#canvas411');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 200, 100);

                            // 414
                            var c = $('#canvas414');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 200, 100);

                            // 410
                            var c = $('#canvas410');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 200, 100);


                            // 409
                            var c = $('#canvas409');
                            var context = c[0].getContext('2d');
                            context.fillStyle = "#0000FF";
                            context.fillRect(30, 30, 200, 100);


                            // 403
                            var c = $('#canvas403');
                            var context = c[0].getContext('2d');
                            if (ui.values[0] >= 480 && ui.values[0] <= 570) {
                                context.fillStyle = "#99ff99";
                                context.fillRect(30, 30, 200, 100);
                            } else if (ui.value[0] >= 780 && ui.value[0] <= 870) {
                                context.fillStyle = "#99ff99";
                                context.fillRect(30, 30, 200, 100);
                            } else {
                                context.fillStyle = "#ff0000";
                                context.fillRect(30, 30, 200, 100);
                            }

                            // 404
                            var c = $('#canvas404');
                            var context = c[0].getContext('2d');
                            if (ui.values[0] >= 480 && ui.values[0] <= 570) {
                                context.fillStyle = "#99ff99";
                                context.fillRect(30, 30, 200, 100);
                            } else if (ui.value[0] >= 780 && ui.value[0] <= 870) {
                                context.fillStyle = "#99ff99";
                                context.fillRect(30, 30, 200, 100);
                            } else {
                                context.fillStyle = "#ff0000";
                                context.fillRect(30, 30, 200, 100);
                            }

                        }
                    });
                </script>


            </div>

        </div>

</body>

</html>