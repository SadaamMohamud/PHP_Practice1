# PHP Programming - Assignment CH4

This assignment focuses on building a complete PHP student registration form that collects personal, parent, and academic information and uploads a student image to the server. It combines HTML form design, PHP validation, file upload handling, and result display in a clean table layout.

---

## 1. Assignment Title

Student Registration Form with Image Upload

---

## 2. Objectives

By completing this assignment, students will be able to:

- Create a PHP form with multiple sections.
- Use `$_POST` to receive user-submitted values.
- Validate required fields and input types.
- Validate email format and text fields.
- Upload an image using `$_FILES`.
- Save uploaded files to a server folder.
- Display submitted data in a neat layout.
- Use PHP to redirect and prevent invalid submissions.

---

## 3. What This Assignment Covers

This project demonstrates:

- HTML form creation
- Form submission with `method="post"`
- `enctype="multipart/form-data"` for file upload
- PHP validation of required fields
- Regular expression validation for names
- Email validation using `FILTER_VALIDATE_EMAIL`
- Allowed file type checking for image upload
- Creating a directory if it does not exist
- Moving uploaded files with `move_uploaded_file()`
- Secure output display with `htmlspecialchars()`

---

## 4. Project Files

### `index.php`
This file contains the student registration form.

It includes input fields for:

- Name
- Place of birth
- Date of birth
- Address
- Gender
- Telephone
- Email
- Student image
- Parent name
- Parent telephone
- Relationship
- Student ID
- Faculty
- Department
- Class
- Registration date

The form sends all entered data to `display.php` using the POST method.

### `display.php`
This file validates the submitted data and then displays the information in a table.

It performs the following checks:

- All required form fields must be filled
- Name must contain letters and spaces only
- Email must be valid
- Image must be uploaded
- Image type must be one of the allowed formats: JPG, PNG, GIF

If validation fails, the script stops with a clear error message.

If validation passes:

- The image is uploaded into the `uploads/` folder
- The student information is displayed in a formatted table
- The uploaded image is shown on the page
- A back button returns the user to the registration form

### `uploads/`
This folder stores the uploaded student images.

If the folder does not exist, the script creates it automatically.

---

## 5. Form Structure

The registration form is organized into three sections:

### Personal Information
- Name
- Place of birth
- Date of birth
- Address
- Gender
- Telephone
- Email
- Student image

### Parent Information
- Parent name
- Parent telephone
- Relationship

### Academic Information
- Student ID
- Faculty
- Department
- Class
- Registration date

---

## 6. Validation Rules Applied

The assignment includes the following validation logic:

- Required fields are checked with `empty()`
- Name is validated using:
  - `preg_match("/^[a-zA-Z ]+$/", $_POST['name'])`
- Email is validated using:
  - `filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)`
- Uploaded file must not be empty
- Only these MIME types are allowed:
  - `image/jpeg`
  - `image/png`
  - `image/gif`
- The uploaded file is moved to the `uploads/` directory

---

## 7. How the Program Works

1. The user opens `index.php` in the browser.
2. The user fills out the student registration form.
3. When the form is submitted, the browser sends all values to `display.php`.
4. `display.php` checks if the form was submitted.
5. If not submitted, the page redirects back to `index.php`.
6. If submitted, PHP validates every required field.
7. If any field is invalid, the script displays an error and stops execution.
8. If valid, the uploaded image is checked and moved to the `uploads/` folder.
9. The student data is displayed in a table with the uploaded image.

---

## 8. Example of Validation Messages

The script may display messages such as:

- Please enter your name.
- Please enter your email.
- Please upload an image.
- Name must contain letters and spaces only.
- Please enter a valid email.
- Only JPG, PNG, and GIF images are allowed.

---

## 9. Security and Best Practices Used

This assignment uses common PHP practices to improve reliability and security:

- `htmlspecialchars()` is used before displaying user input to reduce XSS risk.
- File checks ensure only accepted image formats are allowed.
- `move_uploaded_file()` is used to safely place the file in the target folder.
- The system creates the upload directory if it does not exist.
- `header("Location: index.php")` is used to redirect users if no form data is submitted.

---

## 10. How to Run the Project

### Prerequisites

- XAMPP or similar PHP local server installed
- Apache running
- PHP enabled

### Steps

1. Open XAMPP Control Panel.
2. Start Apache.
3. Place the project folder in `htdocs`.
4. Open your browser.
5. Go to:

   `http://localhost/PHP_Practice1/AssignmentCH4/index.php`

6. Fill in the registration form.
7. Choose an image file and submit the form.
8. View the result on `display.php`.

---

## 11. Expected Output

After successful submission, the page should show:

- Student image
- Student personal information
- Parent information
- Academic information
- A summary table with all entered values
- A button to return to the form

---

## 12. Project Structure

```text
AssignmentCH4/
├── index.php
├── display.php
├── uploads/
├── Readme.md
```

---

## 13. Summary

This assignment is a practical example of how PHP can collect form data, validate it, upload files, and display the result in a user-friendly format. It helps students understand real-world web form handling and server-side processing in PHP.

---

## 14. Learning Outcome

After finishing this assignment, students should be able to build a basic but complete PHP form application that handles user input, validates data, uploads files, and presents results clearly.
