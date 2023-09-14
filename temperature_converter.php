<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>

    <style>
    <?php include "cal_style.css" ?>
</style>

</head>

<body>
    <div class="container">
    <h1>Temperature Converter</h1>
    <form method="post" action="">
        <label for="temperature">Enter Temperature:</label>
        <input class="inputf" type="number" name="temperature" id="temperature" placeholder="Enter Value" required>
        <br><br>
        <label for="conversion">Select Conversion:</label>
        <select name="conversion" id="conversion" required>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>
        <br><br>

        <input class="submitbutton" type="submit" value="Convert">
    </form>

    <div id="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversion = $_POST["conversion"];

        if ($conversion == "celsius_to_fahrenheit") {
            $converted_temperature = ($temperature * 9/5) + 32;
            echo "<p>$temperature Celsius is $converted_temperature Fahrenheit</p>";
        } elseif ($conversion == "fahrenheit_to_celsius") {
            $converted_temperature = ($temperature - 32) * 5/9;
            echo "<p>$temperature Fahrenheit is $converted_temperature Celsius</p>";
        }
    }
    ?>

</div>
</div>
</body>
</html>
