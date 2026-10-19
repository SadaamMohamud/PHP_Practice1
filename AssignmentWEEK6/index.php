<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-gray-100 p-6">

    <div class="p-2 max-w-xl">

        <h1 class="text-2xl font-bold text-blue-600 mb-2">
            Student Grade Management System
        </h1>

        <p class="text-gray-600 mb-6">
            Enter Student Information
        </p>

        <form action="Process.php" method="POST"
              enctype="multipart/form-data">

            <label class="block mb-1">Student Full Name</label>
            <input type="text" name="student_name"
                   placeholder="Enter full name" required
                   class="block w-full p-2 mb-4 bg-gray-100"> <br>

            <label class="block mb-1">Student ID</label>
            <input type="text" name="student_id"
                   placeholder="Enter student ID" required
                   class="block w-full p-2 mb-4 bg-gray-100"><br>

            <label class="block mb-2">Gender</label>
            <div class="mb-4">
                <input type="radio" name="gender"
                       value="Male" required> Male

                <input type="radio" name="gender"
                       value="Female" class="ml-4"> Female
            </div>

            <label class="block mb-1">Faculty</label>
            <select name="faculty" required
                    class="block w-full p-2 mb-4 bg-gray-100">
                <option value="">Select Faculty</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Business">Business</option>
                <option value="Engineering">Engineering</option>
                <option value="Health Science">Health Science</option>
            </select><br>

            <label class="block mb-1">PHP Mark</label>
            <input type="number" name="php_mark" min="0" max="100"
                   required class="block w-full p-2 mb-4 bg-gray-100"><br>

            <label class="block mb-1">Database Mark</label>
            <input type="number" name="database_mark" min="0" max="100"
                   required class="block w-full p-2 mb-4 bg-gray-100"><br>

            <label class="block mb-1">Networking Mark</label>
            <input type="number" name="networking_mark" min="0" max="100"
                   required class="block w-full p-2 mb-4 bg-gray-100"><br>

            <label class="block mb-1">Student Certificate</label>
            <input type="file" name="certificate" required
                   class="block mb-6"><br>

            <button type="submit"
                    class="bg-blue-600 text-white p-2 mr-2">
                Submit and Calculate
            </button>

            <button type="reset" class="bg-gray-300 p-2">
                Reset
            </button>

        </form>

    </div>

</body>

</html>