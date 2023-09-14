<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>

    <style>
    <?php include "cal_style.css" ?>
</style>

</head>
<body>
    <div class="container">
    <h1>Grade Calculator</h1>
    <form method="post" action="">
        <label for="score1">Subject 1:</label>
        <input type="number" name="score1" id="score1" placeholder="Enter mark" required>
        <br><br>
        <label for="score2">Subject 2:</label>
        <input type="number" name="score2" id="score2" placeholder="Enter mark" required>
        <br><br>
        <label for="score3">Subject 3:</label>
        <input type="number" name="score3" id="score3" placeholder="Enter mark" required>
        <br><br>
        <input class="submitbutton" type="submit" value="Calculate">
    </form>

    <div id="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];


        $average = ($score1 + $score2 + $score3) / 3;

    
        $letter_grade = '';

        if ($average >= 90) {
            $letter_grade = 'A';
        } elseif ($average >= 80) {
            $letter_grade = 'B';
        } elseif ($average >= 70) {
            $letter_grade = 'C';
        } elseif ($average >= 60) {
            $letter_grade = 'D';
        } else {
            $letter_grade = 'F';
        }

        echo "<p>Average: $average</p>";
        echo "<p>Grade: $letter_grade</p>";
    }
    ?>
    </div>
    </div>
</body>
</html>
