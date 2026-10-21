
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-4">

<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Student Registration</h1>

    <form action="display.php" method="post" enctype="multipart/form-data">

        <fieldset class="border p-4 mb-4">
            <legend class="font-bold">Personal Information</legend><br>

            <label>Name</label><br>
            <input class="border p-2 w-full mb-3" type="text" name="name" required><br>

            <label>Place of Birth</label><br>
            <input class="border p-2 w-full mb-3" type="text" name="pob" required><br>

            <label>Date of Birth</label><br>
            <input class="border p-2 w-full mb-3" type="date" name="dob" required><br>

            <label>Address</label><br>
            <input class="border p-2 w-full mb-3" type="text" name="address" required><br>

            <label>Gender</label><br>
            <div class="mb-3">
                <input type="radio" name="gender" value="Male" required> Male
                <input type="radio" name="gender" value="Female"> Female
            </div>

            <label>Telephone</label><br>
            <input class="border p-2 w-full mb-3" type="tel" name="telephone" required><br>

            <label>Email</label><br>
            <input class="border p-2 w-full mb-3" type="email" name="email" required><br>

            <label>Student Image</label><br>
            <input class="border p-2 w-full" type="file" name="image" accept=".jpg,.jpeg,.png,.gif" required><br>
        </fieldset>

        <fieldset class="border p-4 mb-4">
            <legend class="font-bold">Parent Information</legend><br>

            <label>Parent Name</label><br>
            <input class="border p-2 w-full mb-3" type="text" name="parent_name" required><br>

            <label>Parent Telephone</label><br>
            <input class="border p-2 w-full mb-3" type="tel" name="parent_telephone" required><br>

            <label>Relationship</label><br>
            <select class="border p-2 w-full" name="relationship" required>
                <option value="">Choose Relationship</option>
                <option>Father</option>
                <option>Mother</option>
                <option>Guardian</option>
            </select>
        </fieldset>

        <fieldset class="border p-4 mb-4">
            <legend class="font-bold">Academic Information</legend><br>

            <label>Student ID</label><br>
            <input class="border p-2 w-full mb-3" type="text" name="student_id" required><br>

            <label>Faculty</label><br>
            <input class="border p-2 w-full mb-3" type="text" name="faculty" required><br>

            <label>Department</label><br>
            <input class="border p-2 w-full mb-3" type="text" name="department" required><br>

            <label>Class</label><br>
            <input class="border p-2 w-full mb-3" type="text" name="class" required><br>

            <label>Registration Date</label><br>
            <input class="border p-2 w-full mb-3" type="date" name="registration_date" required><br>
        </fieldset>

     
<div class="text-center">
    <input class="bg-blue-600 text-white px-5 py-2 rounded"
           type="submit" name="submit" value="Register">

    <input class="bg-gray-300 px-5 py-2 rounded"
           type="reset" value="Reset">
</div>


    </form>
</div>

</body>
</html>
