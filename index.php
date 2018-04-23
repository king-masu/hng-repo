<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>HNG Stage1</title>
    <link  rel="stylesheet" type="text/css" href="style.css" />
    <style>
        body {
            font-family: raleway;
            margin: 0;

        }
        .nav {
            background-color:  #69D8F0;
            display: flex;
            justify-content: flex-end;
            padding: 0 40px;
        }
        .nav li {
            list-style: none;
            display: inline;
            padding: 0 5px;
        }
        .nav a {
            text-decoration: none;
            color: #FFF;
            font-size: 36px;
            text-shadow: 1px 3px 8px #000000;
            border-radius: 10px;
            padding: 5px;
        }
        .nav a:hover {
            color:#000;
            text-shadow: none;
        }

        .slide {
            background: url("bg.jpg");
            height: 500px;
            display: flex;
            justify-content: flex-end;
            font-size: 48px;
            font-weight: bold;
            padding: 40px;
            color: white;

        }
        .motto {

            width: 372px;
            height: 170px;
            padding: 10px;
            border-radius: 10px;
            background: rgba(0, 0, 0, .8);  
        }

        .time {
            background-color: #69D8F0;
            height: 80px;
            font-weight: bold;
            font-size: 48px;
            text-align: center;
            color: #FFF;
            padding-top: 20px;
        }
    </style>
</head>
<body>
<div class="nav">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</div>
<div class="slide">
    <div class="motto">
        Its a place where we Build the Future
    </div>
</div>
</div>
<div class="time">
<?php
date_default_timezone_set("Africa/Lagos");
echo date("h:i:sa");
?>
</div>
</body>
</html>


menu 36px blur 0
time bold 48
head bold 48