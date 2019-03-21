<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
<!-- Styles -->
<style>
    /* FARM CODE TIME SLIDER */
    #time-range p {
        font-family: "Arial", sans-serif;
        font-size: 14px;
        color: #FFFFFF;
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

    <!-- .slidecontainer {
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
        background-color: #000;
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
    } -->
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


</head>

<body>
    <div class="flex-center position-ref full-height">

        <div class="top-left">

            <div class="title m-b-md links">
                Room Monitoring System
            </div>

            <!--Slider Zone-->
            <!-- <div class="slidecontainer ">
                <input type="range" min="1" max="100" value="69" class="slider" id="Range_Input">
                <p>Value: <span id="Range_Output"></span></p>

            </div> -->
            <canvas id="canvas1" width="300" height="150" style="border:1px solid #d3d3d3;"></canvas>
            <div id="time-range">
                <p>Time : <span class="slider-time">9:00 AM</span></p>
                <div class="sliders_step1">
                    <div id="slider-range"></div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
            <script>
                // FARM SCRIPT######################################
                $("#slider-range").slider({
                    // range: true,
                    min: 0,
                    max: 1440,
                    step: 15,
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
                        
                        // var c = document.getElementById('canvas1');
                        var c = $('#canvas1');
                        var context = c[0].getContext('2d');
                        if (ui.values[0] > 1000) {
                            context.fillStyle = "#99ff99";
                            context.fillRect(30, 30, 200, 100);
                        } else {
                            context.fillStyle = "#ff0000";
                            context.fillRect(30, 30, 200, 100);
                        }
                    }
                });
                //sliderScript
                // var slider = document.getElementById("Range_Input");
                // var output = document.getElementById("Range_Output");
                // output.innerHTML = slider.value; // Display the default slider value

                // Update the current slider value (each time you drag the slider handle)
                // slider.oninput = function() {
                //     output.innerHTML = this.value;
                //     var c = document.getElementById('canvas1');
                //     var context = c.getContext('2d');
                //     var slider = document.getElementById("Range_Input");
                //     var v = document.getElementById('Range_Output').innerHTML;

                    // if (this.value == '69') {
                    //     context.fillStyle = "#99ff99";
                    //     context.fillRect(30, 30, 200, 100);
                    // } else {
                    //     context.fillStyle = "#ff0000";
                    //     context.fillRect(30, 30, 200, 100);
                    // }
                // }
            </script>

        </div>

    </div>
</body>

</html> 