<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
<!--    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"-->
<!--          rel="stylesheet">-->
    <link href="styles/style.css" rel="stylesheet">
    <!--    <script src="node_modules/chart.js/dist/Chart.js"></script>-->
<!--    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css"-->
<!--          integrity="sha512-SUJFImtiT87gVCOXl3aGC00zfDl6ggYAw5+oheJvRJ8KBXZrr/TMISSdVJ5bBarbQDRC2pR5Kto3xTR0kpZInA=="-->
<!--          rel="stylesheet"/>-->
    <title>Weather App php</title>
</head>

<body>
<div class="container">

<!--    <div class="input-container">-->
<!--        <label for="cityInput">Enter the city Name to get the weather info:</label> </br>-->
<!--        <input id="cityInput" name="cityInput" placeholder="Enter City" type="text"> </br>-->
<!--        <input id='submit' type="submit" value="Show weather info">-->
<!--    </div>-->
    <?php
    include_once 'inputContainer.php';
    ?>

<!--    <div class="header">-->
<!--        <p id="cityCountryName"></p>-->
<!--        <p id="date"></p>-->
<!--    </div>-->
    <?php
    include_once 'header.php';
    ?>

<!--    <div class="mainDayInfo">-->
<!--        <p id="temperature"></p>-->
<!--        <img id="weatherIcon" src="">-->
<!--        <p id="description"></p>-->
<!--    </div>-->
<!--    <div class="mainDayExtra">-->
<!--        <div class="row">-->
<!--            <div class="col-s-6 dayExtra">-->
<!--                <p id="windSpeed"></p>-->
<!--            </div>-->
<!--            <div class="col-s-6 dayExtra">-->
<!--                <p id="humidity"></p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <?php
    include_once 'dayInfo.php';
    ?>

<!--    <canvas height="350px" id="myChart" width="700px"></canvas>-->
    <?php
    include_once 'canvas.php';
    ?>

<!--    <div class="otherDays">-->
<!--        <div class="row">-->
<!--            <div class="col-s-1"></div>-->
<!--            <div class="col-s-2 col-xs-6 day" id="dayOne">-->
<!--                <p id="dayOneName"></p>-->
<!--                <img alt="" class="iconOtherDays" id="dayOneIcon" src="">-->
<!--                <p id="dayOneMinMaxTemp"></p>-->
<!--            </div>-->
<!--            <div class="col-s-2 col-xs-6 day" id="dayTwo">-->
<!--                <p id="dayTwoName"></p>-->
<!--                <img alt="" class="iconOtherDays" id="dayTwoIcon" src="">-->
<!--                <p id="dayTwoMinMaxTemp"></p>-->
<!--            </div>-->
<!--            <div class="col-s-2 col-xs-6 day" id="dayThree">-->
<!--                <p id="dayThreeName"></p>-->
<!--                <img alt="" class="iconOtherDays" id="dayThreeIcon" src="">-->
<!--                <p id="dayThreeMinMaxTemp"></p>-->
<!--            </div>-->
<!--            <div class="col-s-2 col-xs-6 day" id="dayFour">-->
<!--                <p id="dayFourName"></p>-->
<!--                <img alt="" class="iconOtherDays" id="dayFourIcon" src="">-->
<!--                <p id="dayFourMinMaxTemp"></p>-->
<!--            </div>-->
<!--            <div class="col-s-2 col-xs-6 day" id="dayFive">-->
<!--                <p id="dayFiveName"></p>-->
<!--                <img alt="" class="iconOtherDays" id="dayFiveIcon" src="">-->
<!--                <p id="dayFiveMinMaxTemp"></p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <?php
    include_once 'otherDayInfo.php';
    ?>

</div>

<!--<script crossorigin="anonymous"-->
<!--        integrity="sha512-QEiC894KVkN9Tsoi6+mKf8HaCLJvyA6QIRzY5KrfINXYuP9NxdIkRQhGq3BZi0J4I7V5SidGM3XUQ5wFiMDuWg=="-->
<!--        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>-->
<!--<script src="dist/bundle.js" type="module"></script>-->
<!--<script type="module" src="scripts/nameOfDay.js"></script>-->
<?php
include_once 'nameOfDay.php';
include_once 'nameOfMonth.php';
include_once  'otherDays.php';
?>
<!--<script type="module" src="scripts/nameOfMonth.js"></script>-->
<!--<script type="module" src="scripts/otherDays.js"></script>-->
<!--<script type="module" src="scripts/drawChart.js"></script>-->
<script src="scripts/Chart.js" type="javascript"></script>


</body>

</html>