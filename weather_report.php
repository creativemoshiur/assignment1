<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
    <style>
    <?php include "cal_style.css" ?>
    </style>
</head>
<body>
<div class="container">
    <h1>Weather Report</h1>
    <form method="post" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" id="temperature" placeholder="Enter Value" required>
        <br><br>
        <input class="submitbutton" type="submit" value="Get Weather Report">
    </form>
    <div id="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];

        if ($temperature <= 0) {
            echo "It's freezing!";
        } elseif ($temperature > 0 && $temperature <= 18) {
            echo "It's cool.";
        } elseif ($temperature > 18 && $temperature <= 29) {
            echo "It's warm.";
        } else {
            echo "It's hot!";
        }
    }
    ?>
    </div>
    </div>
</body>
</html>
