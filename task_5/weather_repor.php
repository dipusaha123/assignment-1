<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .report {
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            width: 300px;
            background-color: #f7f7f7;
        }
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="report">
        <h2>Weather Report</h2>

        <?php
        $temperature = 0;

        if ($temperature < 0) {
            echo "<p>It's freezing!</p>";
        } elseif ($temperature >= 0 && $temperature < 15) {
            echo "<p>It's cool.</p>";
        } elseif ($temperature >= 15) {
            echo "<p>It's warm.</p>";
        }
        ?>
    </div>
</body>
</html>
