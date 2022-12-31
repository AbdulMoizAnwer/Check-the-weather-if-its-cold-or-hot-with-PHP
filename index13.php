<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature in Centigrade.</title>
</head>
<body>
    <!-- 2. Write a php program to read temperature in centigrade and display a suitable message according to temperature state below
    Temp < 0 then Freezing weather
    Temp 0-10 then Very Cold weather
    Temp 10-20 then Cold weather
    Temp 20-30 then Normal in Temp
    Temp 30-40 then Its Hot
    Temp >=40 then Its Very Hot
    Test Data :
    42
    Expected Output :
    Its very hot. -->
    <h1>Defining Temperature in Centigrade</h1>
    <form action="#" method="POST">
        <label>Temperature in Centigrade</label>
        <input type="text" name="n1">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $n1 = $_POST['n1'];
    if($n1 >= 40)
        echo "It's very hot weather.";
    else if($n1 >= 30)
        echo "It's hot weather.";
    else if($n1 >= 20)
        echo "It's normal weather.";
    else if($n1 >= 10)
        echo "It's cold weather.";
    else if($n1 >= 0)
        echo "It's very cold weather.";
    else if($n1 < 0)
        echo "Freezing Weather.";
    }
?>
