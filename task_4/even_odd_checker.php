<!DOCTYPE html>
<html>
<head>
    <title>Even-Odd Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .checker {
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
    <div class="checker">
        <h2>Even-Odd Checker</h2>
        <form method="post" action="">
            <label for="number">Enter a Number:</label>
            <input type="number" name="number" id="number" required>
            <br>
            <input type="submit" value="Check">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];

            if ($number % 2 == 0) {
                echo "<p>{$number} is an even number.</p>";
            } else {
                echo "<p>{$number} is an odd number.</p>";
            }
        }
        ?>
    </div>
</body>
</html>