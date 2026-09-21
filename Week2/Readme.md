# PHP Programming — Week 2 Examples

This README explains all the PHP programming screenshots in the Week 2 folder in simple English.
Each screenshot is explained in the same order as the files.

---

## Screenshot 1 — `Constant Variable.png`

### What this screenshot shows

This screenshot shows how to create a constant in PHP and display its value.

### Easy English explanation

- `define()` is used to create a constant.
- The constant in the screenshot is called `Age`.
- The value of `Age` is `20`.
- A constant does not use `$` when you use it.
- `echo` displays the value on the webpage.
- The dot (`.`) joins text and the constant value.
- `<br>` moves the next output to a new line.

### Code shown

```php
<?php

define("Age", 20);

echo "My age is " . Age . "<br>";

?>
```

### Output

```text
My age is 20
```

---

## Screenshot 2 — `if else.png`

### What this screenshot shows

This screenshot demonstrates an `if` and `else` statement.

### Easy English explanation

- `$age` is a variable.
- The variable stores the value `20`.
- `if` checks a condition.
- `$age >= 18` means "is the age 18 or more?"
- If the condition is true, PHP prints `You are an adult`.
- `else` runs when the condition is false.
- `<br>` moves the output to a new line.

### Code shown

```php
<?php

$age = 20;

if ($age >= 18) {
    echo "You are an adult<br>";
} else {
    echo "You are a child<br>";
}

?>
```

### Output

```text
You are an adult
```

---

## Screenshot 3 — `switch.png`

### What this screenshot shows

This screenshot demonstrates a PHP `switch` statement with marks and grades.

### Easy English explanation

- `$marks` stores the student's mark.
- `switch` is used to check different cases.
- `case` gives a condition to check.
- `break` stops the switch after a case.
- `default` runs when no case matches.
- The screenshot uses conditions such as `$marks >= 90`, `$marks >= 80`, and so on.

### Code shown

```php
<?php

$marks = 100;

switch ($marks) {
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

?>
```

### Important note

As written, this code uses:

```php
switch ($marks)
```

but each `case` contains a condition that becomes `true` or `false`.

For this type of condition-based `switch`, the usual pattern is:

```php
switch (true)
```

Then PHP checks the cases from top to bottom and uses the first condition that is `true`.

---

## Screenshot 4 — `Ternary Operator.png`

### What this screenshot shows

This screenshot demonstrates the PHP ternary operator.

### Easy English explanation

The ternary operator is a short way to write a simple `if/else`.

It uses:

```text
condition ? value_if_true : value_if_false
```

- `$fuel` stores the fuel amount.
- `($fuel <= 1)` checks if the fuel is low.
- `?` means "if true".
- `:` means "otherwise".
- If the condition is true, the result is `Low Tank`.
- If the condition is false, the result is `Full Tank`.

### Code shown

```php
<?php

$fuel = 5;

$result = ($fuel <= 1) ? "Low Tank" : "Full Tank";

echo $result . "<br>";

?>
```

### Output

```text
Full Tank
```

---

## Screenshot 5 — `While Loop.png`

### What this screenshot shows

This screenshot demonstrates a `while` loop.

### Easy English explanation

- `$count` starts with the value `15`.
- `while` repeats the code while its condition is true.
- The condition is `$count <= 5`.
- `15 <= 5` is false.
- Because the condition is false at the beginning, the loop does not run.

### Code shown

```php
<?php

$count = 15;

while ($count <= 5) {
    echo $count . "<br>";
    $count++;
}

?>
```

### Output

There is **no output**, because `15 <= 5` is false.

---

## Screenshot 6 — `Do-While-Loop.png`

### What this screenshot shows

This screenshot demonstrates a `do...while` loop.

### Easy English explanation

A `do...while` loop is different from a normal `while` loop because it runs the code **at least one time** before checking the condition.

- `$i` starts with `15`.
- The `do` block runs first.
- PHP prints `15`.
- Then PHP checks `$i <= 10`.
- `15 <= 10` is false.
- The loop stops after the first run.

### Code shown

```php
<?php

$i = 15;

do {
    echo $i . "<br>";
    $i++;
} while ($i <= 10);

?>
```

### Output

```text
15
```

### Easy way to remember

```text
while      → check first, then run
do...while → run first, then check
```

---

## Screenshot 7 — `For Loop.png`

### What this screenshot shows

This screenshot demonstrates several `for` loops.

### Part 1 — Multiplication Table

```php
for ($count = 1; $count <= 12; $count++) {
    echo $count . " times 12 is " . ($count * 12) . "<br>";
}
```

### Easy English explanation

- `$count = 1` means start at `1`.
- `$count <= 12` means continue until `12`.
- `$count++` increases the number by `1`.
- `$count * 12` calculates the multiplication.
- The loop displays the multiplication table of `12`.

### Output

```text
1 times 12 is 12
2 times 12 is 24
3 times 12 is 36
...
12 times 12 is 144
```

### Part 2 — Numbers 1 to 15

```php
for ($count = 1; $count <= 15; $count++) {
    echo $count . "<br>";
}
```

### Easy English explanation

This loop starts at `1` and prints every number until `15`.

### Output

```text
1
2
3
...
15
```

### Part 3 — Square Numbers

```php
for ($i = 1; $i <= 10; $i++) {
    echo "The square of $i is " . ($i * $i) . "<br>";
}
```

### Easy English explanation

- `$i` starts at `1`.
- The loop continues until `10`.
- `$i * $i` calculates the square.
- For example, `3 * 3 = 9`.

### Output

```text
The square of 1 is 1
The square of 2 is 4
The square of 3 is 9
...
The square of 10 is 100
```

---

## Screenshot 8 — `Nested Loop.png`

### What this screenshot shows

This screenshot demonstrates a nested `for` loop.

A nested loop means **one loop is inside another loop**.

### Easy English explanation

- The first loop uses `$i`.
- The second loop uses `$j`.
- For every value of `$i`, the inner loop runs through all its values of `$j`.
- `$i * $j` calculates the multiplication.
- The program displays the row, column, and multiplication result.

### Code shown

```php
<?php

for ($i = 1; $i <= 10; $i++) {

    for ($j = 1; $j <= 10; $j++) {

        echo "Row $i, Column $j: $i * $j = "
             . ($i * $j) . "<br>";
    }
}

?>
```

### Example output

```text
Row 1, Column 1: 1 * 1 = 1
Row 1, Column 2: 1 * 2 = 2
Row 1, Column 3: 1 * 3 = 3
...
Row 10, Column 10: 10 * 10 = 100
```

### Easy way to remember

```text
Outer loop = rows
Inner loop = columns
```

---

## Screenshot 9 — `Numeric Array.png`

### What this screenshot shows

This screenshot demonstrates a numeric array in PHP.

It also shows `var_dump()`, `print_r()`, and a `for` loop.

### Part 1 — Creating the numeric array

```php
$names = array();

$names[0] = "CA233 is the best class in computer Applications";
$names[1] = 123;
$names[2] = 12.34;
```

### Easy English explanation

- `array()` creates an array.
- A numeric array uses numbers as indexes.
- The first index is `0`.
- `$names[0]` stores text.
- `$names[1]` stores the number `123`.
- `$names[2]` stores the decimal number `12.34`.

So the array looks like:

```text
Index 0 → CA233 is the best class in computer Applications
Index 1 → 123
Index 2 → 12.34
```

### Part 2 — `var_dump()`

```php
var_dump($names);
```

`var_dump()` displays detailed information about the array, including the data type and value.

### Part 3 — `print_r()`

```php
echo "<pre>";
print_r($names);
echo "</pre>";
```

`print_r()` displays the array in an easier-to-read format.

`<pre>` helps keep the array formatting readable in the browser.

### Part 4 — Using a `for` loop

The screenshot also creates another array:

```php
$info = array(
    "101",
    "Sadaam",
    20,
    "Hodan District",
    "Single"
);

for ($i = 0; $i < count($info); $i++) {
    echo $info[$i] . "<br>";
}
```

### Easy English explanation

- `$info` is a numeric array.
- The first item has index `0`.
- `count($info)` counts how many items are in the array.
- `$i++` increases the index by `1`.
- `$info[$i]` gets the current item.
- The loop prints every item.

### Output

```text
101
Sadaam
20
Hodan District
Single
```

---

## Screenshot 10 — `Associative Array.png`

### What this screenshot shows

This screenshot demonstrates an associative array.

### Easy English explanation

An associative array uses **names (keys)** instead of only numbers as indexes.

For example:

```php
"ID" => 101
```

Here:

- `"ID"` is the key.
- `101` is the value.

### Code shown

```php
<?php

$student = array(
    "ID" => 101,
    "Name" => "Sadaam",
    "Age" => 20,
    "Address" => "Hodan District",
    "Status" => "Single",
    "weight" => 160.5
);

echo "<pre>";

echo "Information about the person:<br>";

print_r($student);

var_dump($student);

echo "</pre>";

?>
```

### Easy English explanation

The array stores information about a student:

```text
ID       → 101
Name     → Sadaam
Age      → 20
Address  → Hodan District
Status   → Single
weight   → 160.5
```

### `print_r()`

```php
print_r($student);
```

This displays the array in a readable format.

### `var_dump()`

```php
var_dump($student);
```

This displays more detailed information, including the data types.

### `<pre>`

```php
echo "<pre>";
```

`<pre>` helps make the array output easier to read in the browser.

---

# Summary

These Week 2 screenshots introduce important PHP concepts:

1. **Constants** — creating a fixed value with `define()`.
2. **if/else** — making a decision based on a condition.
3. **switch** — checking different cases.
4. **Ternary operator** — a short way to write a simple `if/else`.
5. **while loop** — repeating code while a condition is true.
6. **do...while loop** — running code first and checking the condition afterward.
7. **for loop** — repeating code a specific number of times.
8. **Nested loop** — putting one loop inside another loop.
9. **Numeric array** — an array that uses numeric indexes.
10. **Associative array** — an array that uses named keys.
11. **`var_dump()`** — showing detailed information about a variable or array.
12. **`print_r()`** — displaying an array in a readable way.

These examples provide a basic introduction to PHP conditions, loops, arrays, constants, and decision-making.
