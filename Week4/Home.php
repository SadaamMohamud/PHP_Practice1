<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "welcome to this new page and read previous page of example1" . "<br>";
    include 'Example1.php';
    include_once 'Example1.php';
    sum();
    ?>
</body>
</html>