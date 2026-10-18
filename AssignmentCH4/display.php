
<?php
if (isset($_POST['submit'])) {

    if (empty($_POST['name'])) {
        die("Please enter your name.");
    }

    if (empty($_POST['pob'])) {
        die("Please enter your place of birth.");
    }

    if (empty($_POST['dob'])) {
        die("Please enter your date of birth.");
    }

    if (empty($_POST['address'])) {
        die("Please enter your address.");
    }

    if (empty($_POST['gender'])) {
        die("Please select your gender.");
    }

    if (empty($_POST['telephone'])) {
        die("Please enter your telephone.");
    }

    if (empty($_POST['email'])) {
        die("Please enter your email.");
    }

    if (empty($_POST['parent_name'])) {
        die("Please enter parent name.");
    }

    if (empty($_POST['parent_telephone'])) {
        die("Please enter parent telephone.");
    }

    if (empty($_POST['relationship'])) {
        die("Please select relationship.");
    }

    if (empty($_POST['student_id'])) {
        die("Please enter student ID.");
    }

    if (empty($_POST['faculty'])) {
        die("Please enter faculty.");
    }

    if (empty($_POST['department'])) {
        die("Please enter department.");
    }

    if (empty($_POST['class'])) {
        die("Please enter class.");
    }

    if (empty($_POST['registration_date'])) {
        die("Please enter registration date.");
    }

    if (!preg_match("/^[a-zA-Z ]+$/", $_POST['name'])) {
        die("Name must contain letters and spaces only.");
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        die("Please enter a valid email.");
    }

    if (empty($_FILES['image']['name'])) {
        die("Please upload an image.");
    }

    $allowed = array("image/jpeg", "image/png", "image/gif");

    if (!in_array($_FILES['image']['type'], $allowed)) {
        die("Only JPG, PNG, and GIF images are allowed.");
    }

    if (!is_dir("uploads")) {
        mkdir("uploads");
    }

    $image = basename($_FILES['image']['name']);
    $image_path = "uploads/" . $image;

    if (!move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
        die("Image upload failed.");
    }

} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-4">

<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">

    <h1 class="text-2xl font-bold mb-4">Student Information</h1>

    <img src="<?php echo htmlspecialchars($image_path); ?>"
         alt="Student Image"
         class="w-32 h-32 object-cover mb-4">

    <table class="w-full border-collapse border">
        <tr class="bg-gray-200">
            <th class="border p-2">Information</th>
            <th class="border p-2">Details</th>
        </tr>

        <tr>
            <td class="border p-2">Name</td>
            <td class="border p-2"><?php echo htmlspecialchars($_POST['name']); ?></td>
        </tr>

        <tr>
            <td class="border p-2">Place of Birth</td>
            <td class="border p-2"><?php echo htmlspecialchars($_POST['pob']); ?></td>
        </tr>

        <tr>
            <td class="border p-2">Date of Birth</td>
            <td class="border p-2"><?php echo htmlspecialchars($_POST['dob']); ?></td>
        </tr>

        <tr>
            <td class="border p-2">Address</td>
            <td class="border p-2"><?php echo htmlspecialchars($_POST['address']); ?></td>
        </tr>

        <tr>
            <td class="border p-2">Gender</td>
            <td class="border p-2"><?php echo htmlspecialchars($_POST['gender']); ?></td>
        </tr>

        <tr>
            <td class="border p-2">Telephone</td>
            <td class="border p-2"><?php echo htmlspecialchars($_POST['telephone']); ?></td>
        </tr>

        <tr>
            <td class="border p-2">Email</td>
            <td class="border p-2"><?php echo htmlspecialchars($_POST['email']); ?></td>
        </tr>

        <tr>
            <td class="border p-2">Parent Name</td>
            <td class="border p-2"><?php echo htmlspecialchars($_POST['parent_name']); ?></td>
        </tr>

        <tr>
            <td class="border p-2">Parent Telephone</td>
            <td class="border p-2"><?php echo htmlspecialchars($_POST['parent_telephone']); ?></td>
        </tr>

        <tr>
            <td class="border p-2">Relationship</td>
            <td class="border p-2"><?php echo htmlspecialchars($_POST['relationship']); ?></td>
        </tr>

        <tr>
            <td class="border p-2">Student ID</td>
            <td class="border p-2"><?php echo htmlspecialchars($_POST['student_id']); ?></td>
        </tr>

        <tr>
            <td class="border p-2">Faculty</td>
            <td class="border p-2"><?php echo htmlspecialchars($_POST['faculty']); ?></td>
        </tr>

        <tr>
            <td class="border p-2">Department</td>
            <td class="border p-2"><?php echo htmlspecialchars($_POST['department']); ?></td>
        </tr>

        <tr>
            <td class="border p-2">Class</td>
            <td class="border p-2"><?php echo htmlspecialchars($_POST['class']); ?></td>
        </tr>

        <tr>
            <td class="border p-2">Registration Date</td>
            <td class="border p-2"><?php echo htmlspecialchars($_POST['registration_date']); ?></td>
        </tr>
    </table>

    <a href="index.php"
       class="inline-block bg-blue-600 text-white px-4 py-2 rounded mt-4">
        Back to Form
    </a>

</div>

</body>
</html>
