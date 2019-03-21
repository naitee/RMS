<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Styles -->
<style>
    .slidecontainer {
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
    }
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
            <div class="slidecontainer ">
                <input type="range" min="1" max="100" value="69" class="slider" id="Range_Input">
                <p>Value: <span id="Range_Output"></span></p>
                
            </div>
            <canvas id="canvas1" width="300" height="150" style="border:1px solid #d3d3d3;"></canvas>
            <script>//sliderScript
                var slider = document.getElementById("Range_Input");
                var output = document.getElementById("Range_Output");
                output.innerHTML = slider.value; // Display the default slider value

                // Update the current slider value (each time you drag the slider handle)
                slider.oninput = function() {
                    output.innerHTML = this.value;
                }

                
            </script>

            <!--Rectangle Zone-->
           
            <script>
                var c=document.getElementById('canvas1');
                var context=c.getContext('2d');
                var slider = document.getElementById("Range_Input");
                var v=document.getElementById('Range_Output').innerHTML;
                
                v = slider.value;
                document.write(v.innerHTML)
                
                slider.oninput = function(){
                    v = this.value;
                }
                
                if(v == '69'){
                    context.fillStyle = "#99ff99";
                    context.fillRect(30, 30, 200, 100);
                } else {
                    context.fillStyle = "#ff0000";
                    context.fillRect(30, 30, 200, 100);
                }
                
            </script>

        </div>


    </div>
</body>

</html> 