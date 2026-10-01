<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // 1. Student records in a multidimensional array
    $students = array(
        array(
            "Id" => "CA221",
            "Name" => "Mohamed<br>Ahmed Ali",
            "Phone" => "0648440403",
            "Address" => "Laba Dhagax,<br>Wardhiigley"
        ),
        array(
            "Id" => "CA223",
            "Name" => "Ahmed Abdi<br>Jama",
            "Phone" => "0647223201",
            "Address" => "Taleex,<br>Hodan"
        ),
        array(
            "Id" => "CA221",
            "Name" => "Amina Nur<br>Adan",
            "Phone" => "06446990276",
            "Address" => "Macmacaanka,<br>Dharkeynley"
        )
    );

    // 2. Display student data in a table
    echo "<table border='1'>";

    echo "<tr>";
    echo "<th></th>";
    echo "<th>Name</th>";
    echo "<th>Phone</th>";
    echo "<th>Address</th>";
    echo "</tr>";

    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>{$student['Id']}</td>";
        echo "<td>{$student['Name']}</td>";
        echo "<td>{$student['Phone']}</td>";
        echo "<td>{$student['Address']}</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>