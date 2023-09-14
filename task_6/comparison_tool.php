<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .tool {
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
    <div class="tool">
        <h2>Comparison Tool</h2>
        <form method="post" action="">
            <label for="number1">Enter Number 1:</label>
            <input type="number" name="number1" id="number1" required>
            <br>
            <label for="number2">Enter Number 2:</label>
            <input type="number" name="number2" id="number2" required>
            <br>
            <input type="submit" value="Compare">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];

            if ($number1 > $number2) {
                echo "<p>The larger number is: {$number1}</p>";
            } elseif ($number1 < $number2) {
                echo "<p>The larger number is: {$number2}</p>";
            } else {
                echo "<p>Both numbers are equal.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
