<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .calculator {
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            width: 300px;
            background-color: #f7f7f7;
        }
        h2 {
            margin-top: 0;
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Grade Calculator</h2>
        <form method="post" action="">
            <label for="score1">Test Score 1:</label>
            <input type="number" name="score1" id="score1" required>
            <br>
            <label for="score2">Test Score 2:</label>
            <input type="number" name="score2" id="score2" required>
            <br>
            <label for="score3">Test Score 3:</label>
            <input type="number" name="score3" id="score3" required>
            <br>
            <input type="submit" value="Calculate">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score1 = $_POST["score1"];
            $score2 = $_POST["score2"];
            $score3 = $_POST["score3"];

            $average = ($score1 + $score2 + $score3) / 3;

            $letterGrade = "";

            if ($average >= 90) {
                $letterGrade = "A";
            } elseif ($average >= 80) {
                $letterGrade = "B";
            } elseif ($average >= 70) {
                $letterGrade = "C";
            } elseif ($average >= 60) {
                $letterGrade = "D";
            } else {
                $letterGrade = "F";
            }

            echo "<p>Average Score: {$average}</p>";
            echo "<p>Letter Grade: {$letterGrade}</p>";
        }
        ?>
    </div>
</body>
</html>