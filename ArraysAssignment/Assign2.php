<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // 1. Two-dimensional associative array for color values
    $colors = array(
        "light" => array(
            "Red" => "Light Red",
            "Green" => "Light Green",
            "Blue" => "Light Blue"
        ),
        "Normal" => array(
            "Red" => "Normal Red",
            "Green" => "Normal Green",
            "Blue" => "Normal Blue"
        ),
        "Dark" => array(
            "Red" => "Dark Red",
            "Green" => "Dark Green",
            "Blue" => "Dark Blue"
        )
    );

    // 2. Display the array in a table
    echo "<table border='1'>";

    echo "<tr>";
    echo "<th></th>";
    echo "<th>Red</th>";
    echo "<th>Green</th>";
    echo "<th>Blue</th>";
    echo "</tr>";

    foreach ($colors as $row => $values) {
        echo "<tr>";
        echo "<td>$row</td>";

        foreach ($values as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>