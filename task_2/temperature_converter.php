<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        
        }
        .converter {
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
    <div class="converter">
        <h2>Temperature Converter</h2>
        <form method="post" action="">
            <label for="temperature">Enter Temperature:</label>
            <input type="text" name="temperature" id="temperature" required>
            <br>
            <label for="conversion"></label>
            <select name="conversion" id="conversion" required>
                <option value="c_to_f">Celsius to Fahrenheit</option>
                <option value="f_to_c">Fahrenheit to Celsius</option>
            </select>
            <br>
            <input type="submit" value="Convert">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST["temperature"];
            $conversion = $_POST["conversion"];
            $result = "";

            if ($conversion == "c_to_f") {
                $result = ($temperature * 9/5) + 32;
                echo "<p>{$temperature}°C is equal to {$result}°F</p>";
            } elseif ($conversion == "f_to_c") {
                $result = ($temperature - 32) * 5/9;
                echo "<p>{$temperature}°F is equal to {$result}°C</p>";
            }
        }
        ?>
    </div>
</body>
</html>