<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
    <style>
        <?php include "cal_style.css" ?>
    </style>
</head>
<body>
    <div class="container">
    <h1> Even or Odd Checker </h1>

    <form method="post" action="even_odd_checker.php">
        Enter a number: <input type="number" name="number" required><br> <br>
        <input class="submitbutton" type="submit" value="Check">
    </form>

    <div id="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if ($number % 2 == 0) {
            echo "The number $number is even.";
        } else {
            echo "The number $number is odd.";
        }
    }
    ?>
    </div>
    </div>
</body>
</html>
