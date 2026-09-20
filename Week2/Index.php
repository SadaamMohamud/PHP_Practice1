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

    define("Age" , 20);
    echo "My age is " . Age, "<br>";


    $age = 20;
    if ($age >= 10) {
        echo "Your Adult" , "<br>";
    } else {
        echo "Your child" , "<br>";
    }


    $marks = 100;
    switch($marks){
        case($marks>=90):
        echo "You Get A" , "<br>";
        break;
        case($marks>=80):
        echo "You Get B" , "<br>";
        break;
        case($marks>=70):
        echo "You Get c" , "<br>";
        break;
        case($marks>=60):
        echo "You Get d", "<br>";
        break;
        default:
        echo "You Fail", "<br>";
        break;

    }
    
    $fuel = 5;
    $result = ($fuel <= 1) ? "Low Thank" : "Full Thank";
    echo $result , "<br>";

    $count = 1;
    while($count<=5){
        echo $count , "<br>";
    $count++;

    }

        $i = 1;

    do {
        echo $i . "<br>";
        $i++;
    } while ($i <= 10);

    for ($count = 1; $count <=12; ++$count) 
        echo "$count times 12 is" . $count * 12 .  "<br>";

    for ($count = 1 ; $count <= 15 ; $count++)
    echo "$count " . "<br>";


    for ($i = 1; $i <= 10; $i++) {
    echo "The square of $i is ". $i*$i ."<br>";
    }

    for ($i = 1; $i <= 10; $i++) {
    echo "The square of $i is ". $i*$i ."<br>";
    }
     
    
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "Row $i, Column $j: $i * $j = " . ($i * $j) . "<br>";
    }
}
    ?>
</body>
</html>