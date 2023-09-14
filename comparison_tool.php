<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
    <style>
    <?php include "cal_style.css" ?>
    </style>
</head>
<body>

<div class="container">
    <h1>Comparison Tool</h1>

    <form method="post" action="comparison_tool.php">
        Enter the first number: <input type="number" name="num1" placeholder="type here" required><br>
        Enter the second number: <input type="number" name="num2" placeholder="type here" required><br>
        <br>
        <input class="submitbutton" type="submit" value="Compare">
        <br>
    </form>

    <div id="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $largerNumber = ($num1 > $num2) ? $num1 : $num2;
        echo "The larger number is: $largerNumber";
    }
    ?>

</div>
</div>

</body>
</html>
