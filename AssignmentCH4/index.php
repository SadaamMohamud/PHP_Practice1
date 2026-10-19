
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
            <legend class="font-bold">Personal Information</legend>

            <label>Name</label>
            <input class="border p-2 w-full mb-3" type="text" name="name" required>

            <label>Place of Birth</label>
            <input class="border p-2 w-full mb-3" type="text" name="pob" required>

            <label>Date of Birth</label>
            <input class="border p-2 w-full mb-3" type="date" name="dob" required>

            <label>Address</label>
            <input class="border p-2 w-full mb-3" type="text" name="address" required>

            <label>Gender</label>
            <div class="mb-3">
                <input type="radio" name="gender" value="Male" required> Male
                <input type="radio" name="gender" value="Female"> Female
            </div>

            <label>Telephone</label>
            <input class="border p-2 w-full mb-3" type="tel" name="telephone" required>

            <label>Email</label>
            <input class="border p-2 w-full mb-3" type="email" name="email" required>

            <label>Student Image</label>
            <input class="border p-2 w-full" type="file" name="image" accept=".jpg,.jpeg,.png,.gif" required>
        </fieldset>

        <fieldset class="border p-4 mb-4">
            <legend class="font-bold">Parent Information</legend>

            <label>Parent Name</label>
            <input class="border p-2 w-full mb-3" type="text" name="parent_name" required>

            <label>Parent Telephone</label>
            <input class="border p-2 w-full mb-3" type="tel" name="parent_telephone" required>

            <label>Relationship</label>
            <select class="border p-2 w-full" name="relationship" required>
                <option value="">Choose Relationship</option>
                <option>Father</option>
                <option>Mother</option>
                <option>Guardian</option>
            </select>
        </fieldset>

        <fieldset class="border p-4 mb-4">
            <legend class="font-bold">Academic Information</legend>

            <label>Student ID</label>
            <input class="border p-2 w-full mb-3" type="text" name="student_id" required>

            <label>Faculty</label>
            <input class="border p-2 w-full mb-3" type="text" name="faculty" required>

            <label>Department</label>
            <input class="border p-2 w-full mb-3" type="text" name="department" required>

            <label>Class</label>
            <input class="border p-2 w-full mb-3" type="text" name="class" required>

            <label>Registration Date</label>
            <input class="border p-2 w-full mb-3" type="date" name="registration_date" required>
        </fieldset>

        <input class="bg-blue-600 text-white px-5 py-2 rounded"
               type="submit" name="submit" value="Register">

        <input class="bg-gray-300 px-5 py-2 rounded"
               type="reset" value="Reset">

    </form>
</div>

</body>
</html>


 