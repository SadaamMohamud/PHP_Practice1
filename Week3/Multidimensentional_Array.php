<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Creating Multidimensional array
    $info = array(
        array(10,20,"CA233",90.12),
        array(123,"Sadaam Mohamud Abdullahi","CA233",90.12)
    );

    //display
    echo $info[0][0];

    //Display foreach

    foreach($info as $list)
        echo $list[0];

    $student = array (
        array ("sadaam",2005,"Hodan","615337922"),
        array ("Ali",2005,"Hodan","615337923"),
        array ("Ahmed",2005,"Hodan","615337924")

    );
    echo "<h2>Student Information</h2>";

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Year</th>";
    echo "<th>Address</th>";    
    echo "<th>Phone</th>";
    echo "</tr>";
    foreach ($student as $list) {
        echo "<tr>";
        echo "<td>$list[0]</td>";
        echo "<td>$list[1]</td>";
        echo "<td>$list[2]</td>";
        echo "<td>$list[3]</td>";
        echo "</tr>";
    }   

    ?>
</body>
</html>