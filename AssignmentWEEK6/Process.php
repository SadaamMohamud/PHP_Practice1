<?php
include_once "Function.php";

$name = $_POST['student_name'] ?? '';
$id = $_POST['student_id'] ?? '';
$gender = $_POST['gender'] ?? '';
$faculty = $_POST['faculty'] ?? '';

$php = $_POST['php_mark'] ?? '';
$database = $_POST['database_mark'] ?? '';
$networking = $_POST['networking_mark'] ?? '';


if (
    trim($name) == '' || 
    trim($id) == '' || 
    $gender == '' ||
     $faculty == '' || 
      $php === '' || 
      $database === '' || 
      $networking === ''
) {
    echo("Error: Please fill in all student information.");
}
if (
    !is_numeric($php) || !is_numeric($database) ||
    !is_numeric($networking) ||
    $php < 0 || $php > 100 ||
    $database < 0 || $database > 100 ||
    $networking < 0 || $networking > 100
) {
    echo("Error: Marks Must be 0 to 100.");
}


$total = calculateTotal($php, $database, $networking);
$average = calculateAverage($total);
$grade = calculateGrade($average);
$result = checkResult($average);


if (!isset($_FILES['certificate']) ||
    $_FILES['certificate']['error'] != UPLOAD_ERR_OK) {
    die("Error: Please upload a certificate.");
}

$fileName = basename($_FILES['certificate']['name']);
$fileType = $_FILES['certificate']['type'];
$fileSize = $_FILES['certificate']['size'];


if ($fileSize > 2 * 1024 * 1024) {
    echo("Error: Certificate must not exceed 2 MB.");
}

if (!is_dir("Uploads")) {
    mkdir("Uploads", 0755, true);
}

$uploadName = $fileName;
$uploadPath = "uploads/" . $uploadName;

if (file_exists($uploadPath)) {
    echo("Error: A file with this name already exists. Rename your certificate and try again.");
}

if (move_uploaded_file(
    $_FILES['certificate']['tmp_name'],
    $uploadPath
)) {
    $uploadStatus = "Upload Successful";
} else {
    echo("Error: Certificate upload failed.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h2>Student Grade Management System</h2>
<h3>Student Examination Results</h3>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>Information</th>
        <th>Result</th>
    </tr>

    <tr>
        <td>Student Full Name</td>
        <td><?php echo htmlspecialchars($name); ?></td>
    </tr>
    
    <tr>
        <td>Student ID</td>
        <td><?php echo htmlspecialchars($id); ?></td>
    </tr>

    <tr>
        <td>Gender</td>
        <td><?php echo htmlspecialchars($gender); ?></td>
    </tr>

    <tr>
        <td>Faculty</td>
        <td><?php echo htmlspecialchars($faculty); ?></td>
    </tr>

     <tr>
        <td>PHP Mark</td>
        <td><?php echo $php; ?></td>
    </tr>

    <tr>
        <td>Database Mark</td>
        <td><?php echo $database; ?></td>
    </tr>

    <tr>
        <td>Networking Mark</td>
        <td><?php echo $networking; ?></td>
    </tr>

    <tr>
        <td>Total Marks</td>
        <td><?php echo $total; ?> / 300</td>
    </tr>

    <tr>
        <td>Average Marks</td>
        <td><?php echo number_format($average, 2); ?>%</td>
    </tr>

    <tr>
        <td>Grade</td>
        <td><?php echo $grade; ?></td>
    </tr>

    <tr>
        <td>Pass or Fail</td>
        <td><?php echo $result; ?></td>
    </tr>

    <tr>
        <td>Certificate Name</td>
        <td><?php echo htmlspecialchars($fileName); ?></td>
    </tr>

    <tr>
        <td>File Type</td>
        <td><?php echo htmlspecialchars($fileType); ?></td>
    </tr>

    <tr>
        <td>File Size</td>
        <td><?php echo number_format($fileSize / 1024, 2); ?> KB</td>
    </tr>

    <tr>
        <td>Upload Status</td>
        <td><?php echo $uploadStatus; ?></td>
    </tr>

</table>

<br>

<a href="index.php">Back to Student Form</a>

</body>
</html>

</body>
</html>
