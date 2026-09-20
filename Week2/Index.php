<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Php Tags



// Constant
define("Age", 20);
echo "My age is " . Age . "<br>";


// If and Else
$age = 20;

if ($age >= 18) {
    echo "You are an adult<br>";
} else {
    echo "You are a child<br>";
}


// Switch
$marks = 100;

switch (true) {
    case ($marks >= 90):
        echo "You Get A<br>";
        break;

    case ($marks >= 80):
        echo "You Get B<br>";
        break;

    case ($marks >= 70):
        echo "You Get C<br>";
        break;

    case ($marks >= 60):
        echo "You Get D<br>";
        break;

    default:
        echo "You Fail<br>";
        break;
}


// Ternary Operator
$fuel = 5;

$result = ($fuel <= 1) ? "Low Tank" : "Full Tank";

echo $result . "<br>";


// While Loop
$count = 1;

while ($count <= 5) {
    echo $count . "<br>";
    $count++;
}


// Do While Loop
$i = 1;

do {
    echo $i . "<br>";
    $i++;
} while ($i <= 10);


// For Loop - Multiplication Table
for ($count = 1; $count <= 12; $count++) {
    echo $count . " times 12 is " . ($count * 12) . "<br>";
}


// For Loop - Numbers 1 to 15
for ($count = 1; $count <= 15; $count++) {
    echo $count . "<br>";
}


// For Loop - Square Numbers
for ($i = 1; $i <= 10; $i++) {
    echo "The square of $i is " . ($i * $i) . "<br>";
}


// Another Square Numbers Example
for ($i = 1; $i <= 10; $i++) {
    echo "The square of $i is " . ($i * $i) . "<br>";
}


// Nested For Loop - Multiplication Table
for ($i = 1; $i <= 10; $i++) {

    for ($j = 1; $j <= 10; $j++) {

        echo "Row $i, Column $j: $i * $j = " . ($i * $j) . "<br>";
    }
}




    ?>
</body>
</html>