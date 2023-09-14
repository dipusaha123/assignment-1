<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Personal Information</h1>
        <?php
         
            $name = "shoumik saha";
            $age = 25;
            $country = "bangladesh";
            $introduction = "Hello! I am shoumik. I am $age years old and I come from $country. Nice to meet you!";
            echo "<div class='info'>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Age:</strong> $age</p>";
            echo "<p><strong>Country:</strong> $country</p>";
            echo "<p><strong>Introduction:</strong> $introduction</p>";
            echo "</div>";
        ?>
    </div>
</body>
</html>