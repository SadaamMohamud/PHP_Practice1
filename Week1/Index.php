<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Introduction</title>
</head>
<body>

<?php
// PHP Tags
echo "<h1>Welcome to PHP and SQL</h1>";

// Echo
echo "<h1>Welcome to PHP</h1>";

// Print
print "<h1>Welcome to PHP</h1>";

// Print with single quotes
print '<h1>Welcome to PHP</h1>';

// Print with double quotes
print "<h1>Welcome to PHP</h1>";

// Echo multiple values using ,
echo "<h1>Yahye", " Ali</h1>";

// Print multiple values using .
print "<h1>Yahye" . " Ali</h1>";

// Single quotes using echo 
echo '<h1>Welcome to PHP</h1>';

//Double quotes using echo
echo "<h1>Welcome to PHP</h1>";

// Variable using echo and print
$fullName = "Sadaam Mohamud Abdullahi";
echo "<h1>My Name is $fullName</h1>";
print "<h1>My Name is $fullName</h1>";

// strlen() using with print and echo
$my_str = 'welcome to php republic';
echo strlen($my_str);
print strlen($my_str);

// str_word_count() using with echo and print 
$my_str = 'welcome to php republic';
echo str_word_count($my_str);
print str_word_count($my_str);

?>

</body>
</html>