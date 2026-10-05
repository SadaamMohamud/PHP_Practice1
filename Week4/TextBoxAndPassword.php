<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <main class="page">
        <form class="register-form" action="" method="post">
            <h1>Register</h1>

            <div class="form-field">
                <label for="full-name">Enter full name</label>
                <input type="text" name="full_name" id="full-name" autocomplete="name" required>
            </div>

            <div class="form-field">
                <label for="password">Enter password</label>
                <input type="password" name="password" id="password" autocomplete="new-password" required>
            </div>


            <fieldset class="form-field choice-field">
                <legend>Sex</legend>
                <label><input type="checkbox" name="sex[Male]" value="Male"> Male</label>
                <label><input type="checkbox" name="sex[Female]" value="Female"> Female</label>
            </fieldset>

            <fieldset class="form-field choice-field">
                <legend>Faculty</legend>
                <label><input type="checkbox" name="faculty[IT]" value="IT"> IT</label>
                <label><input type="checkbox" name="faculty[Medicine]" value="Medicine"> Medicine</label>
                <label><input type="checkbox" name="faculty[Engineering]" value="Engineering"> Engineering</label>
            </fieldset>

            <div class="form-field">
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" rows="4"></textarea>
            </div>

            <div class="form-field">
                <label>
                    <input type="checkbox" name="terms" value="yes" required>
                    I agree to the terms and conditions
                </label>
            </div>

            <div class="form-actions">
                <button class="reset-button" type="reset">Reset form</button>
                <button class="register-button" type="submit">Register</button>
            </div>
        </form>

        <?php
        if (!empty($_POST['full_name']) && !empty($_POST['password']) && !empty($_POST['sex']) && !empty($_POST['faculty'])) {
            echo "<div class='info-box'>";
            echo "<h2>Form Data</h2>";
            echo "<p>Full name is: " . $_POST['full_name'] . "</p>";
            echo "<p>Sex: ";
            foreach ($_POST['sex'] as $sex) {
                echo $sex . " ";
            }
            echo "</p>";
            echo "<p>Faculty: ";
            foreach ($_POST['faculty'] as $faculty) {
                echo $faculty . " ";
            }
            echo "</p>";
            echo "<p>Comment: " . $_POST['comment'] . "</p>";
            echo "</div>";
        }
        ?>
    </main>
</body>
</html>
