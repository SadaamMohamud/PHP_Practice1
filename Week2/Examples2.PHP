<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //creating array  - numeric array
    
    //first creating array
    $names = array();
    $names [0] = "CA233 is the best class in computer Applications";
    $names [1] = 123;
    $names [2] = 12.34;
    //display the array values using var_dump function
    var_dump ($names);
    //display all the values using pre tag
    echo "<pre>";
    print_r($names);
    echo "<pre>";

    //using for loop to display the array values
    $info =array(
        "101",
        "Sadaam",
        20,
        "Hodan District",
        "Single"

    );
    for ($i=0; $i < count($info); $i++) { 
        echo $info[$i] . "<br>";
    }


    //Associative array
    $student = array(
        "ID" => 101,
        "Name" => "Sadaam",
        "Age" => 20,
        "Address" => "Hodan District",
        "Status" => "Single",
        "weight" => 160.5
    );
    //displaying the infotmation stored in the associative array
    echo "<pre>";
    echo "information about the person: <br>";
    print_r($student);
    var_dump($student);
    echo "<pre>";
    

    ?>
</body>
</html>