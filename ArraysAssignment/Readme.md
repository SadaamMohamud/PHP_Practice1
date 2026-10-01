# PHP Programming — Arrays Assignment

This README explains the three PHP files in the ArraysAssignment folder. The files focus on arrays, associative arrays, multidimensional arrays, and displaying information in tables.

---

## 1. `Assign1.php`

### What this file shows

This file creates an array of numbers and then performs several operations on it.

### Easy English explanation

- `$numbers` stores 12 integer values.
- A `for` loop is used to read each value in the array.
- `count($numbers)` tells us how many values are in the array.
- `$total` adds all the numbers together.
- `$evenTotal` adds only the even numbers.
- `$oddTotal` adds only the odd numbers.
- `min($numbers)` finds the smallest number.
- `max($numbers)` finds the largest number.
- The code also prints the positions of the minimum and maximum values.
- `<br>` is used to move the output to a new line.

### Output

The page displays:

- all numbers in the array
- the total of all numbers
- the total of even numbers
- the total of odd numbers
- the minimum number and its position
- the maximum number and its position

---

## 2. `Assign2.php`

### What this file shows

This file creates a multidimensional associative array with color names and their shades.

### Easy English explanation

- `$colors` is a multidimensional array.
- The first level contains the row names: `light`, `Normal`, and `Dark`.
- The second level contains the color names: `Red`, `Green`, and `Blue`.
- Each value is the color name with a style, for example `Light Red`.
- The code prints the array in an HTML table.
- `foreach` is used to read each row and each value.
- `echo "<tr>";` starts a new row in the table.
- `echo "<td>";` creates each table cell.

### Output

The browser displays a table with three rows and four columns:

- first column: the row name
- other columns: Red, Green, and Blue values

---

## 3. `Assign3.php`

### What this file shows

This file stores student records in an array and prints them in an HTML table.

### Easy English explanation

- `$students` is an array of student records.
- Each student record contains:
  - ID
  - Name
  - Phone
  - Address
- The code uses `foreach` to read each student and print one row in the table.
- The table has headings for ID, Name, Phone, and Address.
- `<br>` is used inside the Name and Address values to show them on two lines, just like the sample table.

### Output

The page displays a table with information for the students:

- CA221
- CA223
- CA221

The name and address are written in a format similar to the assignment example, with the second part of the name or address on a new line.

---

## ArraysAssignment topics

- Indexed arrays
- Associative arrays
- Multidimensional arrays
- Looping through arrays with `foreach`
- Calculating sums and totals
- Finding minimum and maximum values
- Printing data in HTML tables
- Formatting text with `<br>` for multi-line display
