<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = array(5, -7 , 12, 10 , -7, 11, -6, 12, 1, -7, 2, 9);

    // 1. Prints all elements of the array
    echo "The elements of the array are: <br>";

     for ($i = 0; $i < count($numbers); $i++)
    {
        echo $numbers[$i] . "<br>";
    }
    
    // 2 Total number of elements in the array
    $total = 0;
    for($i = 0; $i<count($numbers); $i++)
    {
        $total+= $numbers[$i];
    }

    echo "<br>Total = $total";

    // 3. Total of even numbers in the array
    $evenTotal = 0;
    for ($i =0; $i  < count($numbers);$i++){
        if ($numbers[$i] % 2 == 0)
        {
            $evenTotal += $numbers[$i];
        }
    }

    echo "<br>Total of even numbers = $evenTotal";

    // 4. Total of odd numbers in the array
    $oddTotal = 0;
    for ($i =0; $i  < count($numbers);$i++){
        if ($numbers[$i] % 2 != 0)
        {
            $oddTotal += $numbers[$i];
        }
    }
    echo "<br>Total of odd numbers = $oddTotal";

    // 5 Minimum element and its position in the array
    $min = min($numbers);
    echo "<br>Minimum element in the array is: $min";
    echo "<br>Minimum Positions: ";
    for ($i =0; $i  < count($numbers);$i++){
        if ($numbers[$i] == $min)
        {
            echo $i . " ";
        }
    }

    // 6 Maximum element and its position in the array
    $max = max($numbers);
    echo "<br>Maximum element in the array is: $max";   
    echo "<br>Maximum Positions: ";
    for ($i =0; $i  < count($numbers);$i++){
        if ($numbers[$i] == $max)
        {
            echo $i . " ";
        }
    }

    ?>
</body>
</html>