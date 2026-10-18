# PHP Programming - Week 4

This week introduces PHP functions, passing arguments by value and by reference, variable scope, static variables, including PHP files, and handling form data with `$_POST`.

## 1. `Example1.php`

### What this file shows

This file demonstrates functions and different kinds of variables.

### Easy English explanation

- `addByValue($x, $y)` receives copies of the two values. It adds them and displays the result without changing the original variables.
- `addByReference(&$x, &$y)` receives the original variables. It adds `5` to each one, then displays their new sum and values.
- `localExample()` creates `$x` inside the function. A local variable is available only within the function where it is created.
- `$y` is created outside `globalExample()`. The `global $y` statement lets that function use the outside variable.
- `sum()` creates a regular local counter. It starts at `0` on each call, so each call displays `1`.
- `sum2()` uses `static $x`, which keeps the counter's value between calls. Its three calls display `1`, `2`, and `3`.

### Output highlights

- Passing by value: `30`
- Passing by reference: `40`; the original variables become `15` and `25`
- Local variable: `10`
- Global variable: `20`
- Regular counter: `1`, `1`, `1`
- Static counter: `1`, `2`, `3`

## 2. `TextBoxAndPassword.php`

### What this file shows

This file demonstrates including another PHP file.

### Easy English explanation

- `include 'Example1.php'` runs the contents of `Example1.php`.
- `include_once 'Example1.php'` does not include it again because it has already been included on this page.
- The final `sum()` call displays `1`, because `sum()` resets its local counter each time it runs.

The browser first displays a welcome message, followed by the output from `Example1.php` and the final counter result.

## 3. `Home.php`

### What this file shows

This file contains a registration form and processes its submitted values.

### Form fields

- Full name and password text fields
- Checkboxes for Sex and Faculty
- An optional comment
- A required terms-and-conditions checkbox
- Reset and Register buttons

The form uses the `POST` method. After submission, PHP checks for a full name, password, and at least one selected Sex and Faculty option, then displays the submitted name, selections, and comment.

## 4. `Style.css`

Styles the registration page, including the form layout, fields, buttons, and submitted-data panel used by `Home.php`.

## Screenshots

The [Screenshots](Screenshots/) folder contains code screenshots for Week 4:

| Screenshot | What it shows |
| --- | --- |
| [Passing By Value.png](<Screenshots/Passing By Value.png>) | The function that receives argument values and its call |
| [Passing By Reference.png](<Screenshots/Passing By Reference.png>) | The function that changes the original arguments |
| [Local Variable.png](<Screenshots/Local Variable.png>) | The local variable example |
| [Global Variable.png](<Screenshots/Global Variable.png>) | The global variable and regular/static counter examples |
| [Text Box and password.png](<Screenshots/Text Box and password.png>) | The file-inclusion example |

## How to run

1. Start Apache in XAMPP.
2. Open these pages in a browser:
   - `http://localhost/PHP_Practice1/Week4/Example1.php`
   - `http://localhost/PHP_Practice1/Week4/TextBoxAndPassword.php`
   - `http://localhost/PHP_Practice1/Week4/Home.php`
3. To see the form result, enter a name and password, select at least one Sex and Faculty option, agree to the terms, and submit the form.

## Week 4 topics

- PHP functions and arguments
- Passing by value and by reference
- Local and global variable scope
- Static local variables
- Including PHP files with `include` and `include_once`
- HTML forms and reading submitted data with `$_POST`
