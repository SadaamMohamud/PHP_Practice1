# PHP Programming — Week 3

This README explains the four PHP files in the Week 3 folder in simple English. The examples cover arrays, functions, loops, number problems, and HTML tables.

---

## 1. `arrays_and_functions.php`

### What this file shows

This file demonstrates indexed and multidimensional arrays, common array checks, and PHP functions.

### Easy English explanation

- `$info` is an indexed array containing three names and the number `21`.
- `is_array()` checks whether a value is an array.
- `array_key_exists(0, $info)` checks whether the array has an item at key `0`.
- `$multiArray` contains several smaller arrays, which makes it a multidimensional array.
- `count($info)` gives the number of items in `$info`.
- `sum()` adds two numbers. Its second argument has a default value of `100` and the function displays the sum.
- `multiply()` multiplies two numbers and uses `return` to give the product back to the code that called it.
- `<br>` starts a new line in the browser output.

### Output

The page reports that both values are arrays, that key `0` exists, and that `$info` has 4 items. It then displays a sum of `210` and a multiplication result of `2000`.

### Screenshots

Save screenshots of each code block in the [Screenshots](Screenshots/Readme.md) folder. The screenshot README lists a descriptive filename for each block.

---

## 2. `Assignment.php`

### What this file shows

This file contains ten practice problems using conditions, loops, arithmetic, and number algorithms.

### Easy English explanation

1. Finds the greatest and smallest of `10`, `20`, and `30`.
2. Checks whether `20` is divisible by `3`, `5`, or both.
3. Prints the odd numbers from `2` to `20`, then the even numbers from `35` down to `7`.
4. Prints numbers from `50` down to `2` that are divisible by both `2` and `5`.
5. Reverses the digits of `12345` using a `while` loop and `intdiv()`.
6. Finds the least common multiple (LCM) of `8` and `12`.
7. Finds the highest common factor (HCF) of `18` and `24`.
8. Builds a multiplication table from `1 × 1` through `12 × 12` using nested `for` loops.
9. Checks whether `1` is prime. Numbers below `2` are not prime.
10. Checks numbers from `10` to `50` and prints the prime numbers.

### Output highlights

- Greatest: `30`; smallest: `10`.
- `20` is divisible by `5`, but not by `3`.
- Reverse of `12345`: `54321`.
- LCM: `24`; HCF: `6`.
- The selected number `1` is non-prime.
- The primes from `10` through `50` are `11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47`.

The multiplication table and the number sequences are printed as rows of values in the browser.

---

## 3. `Multidimensentional_Array.php`

### What this file shows

This file demonstrates storing related values in multidimensional arrays and displaying student records in an HTML table.

### Easy English explanation

- `$info` contains two inner arrays with values such as a number, a name, a course code, and a mark.
- `$info[0][0]` accesses the first value in the first inner array.
- `foreach` visits each inner array so its first value can be displayed.
- `$student` stores three student records. Each record contains a name, year, address, and phone number.
- The PHP code writes table headings and then uses `foreach` to create a row for each student.

### Output

The page begins by displaying values from `$info`, then shows a **Student Information** table with the columns Name, Year, Address, and Phone. The table contains the three students stored in `$student`.

---

## 4. `table.php`

### What this file shows

This file uses an associative array to build a simple HTML table.

### Easy English explanation

- `$info` maps each student ID to a name, for example, ID `1` maps to `Yahye`.
- `foreach ($info as $id => $name)` reads both the key (ID) and the value (name) from each array entry.
- PHP uses `<th>` cells for the table headings and `<td>` cells for each student's data.

### Output

The browser displays a **Student Information** table with ID and Name columns and these rows:

| ID | Name |
| --- | --- |
| 1 | Yahye |
| 2 | Ali |
| 3 | Ahmed |

---

## Week 3 topics

- Indexed, associative, and multidimensional arrays
- Array functions: `is_array()`, `array_key_exists()`, and `count()`
- Functions that display a result and functions that return a value
- Conditions, `for` loops, `while` loops, and nested loops
- Remainders and integer division
- Finding prime numbers, an LCM, and an HCF
- Generating HTML tables with PHP