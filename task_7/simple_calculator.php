
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
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
        <h2>Simple Calculator</h2>
        <form method="post" action="">
            <label for="num1">Enter Number 1:</label>
            <input type="number" name="num1" id="num1" required>
            <br>
            <label for="operation">Select Operation:</label>
            <select name="operation" id="operation" required>
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select>
            <br>
            <label for="num2">Enter Number 2:</label>
            <input type="number" name="num2" id="num2" required>
            <br>
            <input type="submit" value="Calculate">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];
            $result = 0;

            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        echo "<p>Cannot divide by zero.</p>";
                        break;
                    }
                    break;
                default:
                    echo "<p>Invalid operation selected.</p>";
                    break;
            }

            echo "<p>Result: {$result}</p>";
        }
        ?>
    </div>
</body>
</html>
