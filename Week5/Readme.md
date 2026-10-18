# PHP Programming - Week 5

This week introduces HTML forms handled by PHP, single and multiple selections, and uploading a file with `$_FILES`.

## 1. `Example1.php`

### What this file shows

This file contains two forms for choosing residences: one allows a single selection and the other allows multiple selections.

### Easy English explanation

- The first `<select>` uses `name="single"`, so the form submits one selected value.
- When its Register button is pressed, PHP checks `$_POST['single']`. If a residence was selected, it displays that residence; otherwise, it asks the user to choose one.
- The second `<select>` uses `name="multiple[]"` and the `multiple` attribute, so the form can submit an array of selected residences.
- PHP checks `$_POST['multiple']` and uses `foreach` to display each selection. If none were selected, it asks the user to choose a residence.
- The residence options are Muqdisho, Hargeysa, Kismayo, and Marko.

## 2. `Files.php`

### What this file shows

This file demonstrates receiving an uploaded file and moving it from PHP's temporary upload location to a destination folder.

### Easy English explanation

1. The form uses `method="post"` and `enctype="multipart/form-data"`, which are needed to submit a file.
2. The file input is named `scertificate`. PHP reads its details from `$_FILES['scertificate']`.
3. The page displays the uploaded file's name, size, temporary location, and reported type.
4. The code creates the destination folder if it does not already exist.
5. `move_uploaded_file()` moves the uploaded file to the destination, using `basename()` for the filename. The page reports whether the move succeeded.

### Important: configure the destination folder

The current code saves files to:

`C:/Users/Qurbac/Downloads/Move files/`

This is specific to one Windows user account. Before using the upload form on another computer, change `$folder` in `Files.php` to a destination folder that exists or that the PHP process can create and write to. The code creates the folder when possible.

## Screenshots

The [Screenshots](Screenshots/) folder contains code screenshots for the examples:

| Screenshot | What it shows |
| --- | --- |
| [Single Choice.png](<Screenshots/Single Choice.png>) | The single-residence selection form and its PHP handling |
| [Multiple Choice.png](<Screenshots/Multiple Choice.png>) | The multiple-residence selection form and its PHP handling |
| [File.png](<Screenshots/File.png>) | The upload form and file handling code |

## How to run

1. Start Apache in XAMPP.
2. Open the examples through your local server:
   - `http://localhost/PHP_Practice1/Week5/Example1.php`
   - `http://localhost/PHP_Practice1/Week5/Files.php`
3. In `Example1.php`, choose a residence and submit each form to see the selected value or values.
4. In `Files.php`, select a file and submit the upload form. Make sure the destination path is configured as described above.

## Week 5 topics

- HTML select fields
- Single and multiple selections
- Submitting and checking form data with `$_POST`
- Handling uploaded files with `$_FILES`
- Creating a destination directory
- Moving uploads with `move_uploaded_file()`
