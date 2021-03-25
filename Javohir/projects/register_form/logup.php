<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
</head>

<body>
    <div class="container">
        <?php
        if (isset($_SESSION['msg'])) {
            $msg = $_SESSION['msg'];
            echo "<h3>$msg</h3>";
            session_destroy();
        }
        ?>
        <form action="process.logup.php" method="POST" class="form-control">
            <h2>Register</h2>
            <label for="fname">Frist name</label>
            <input type="text" name="fname" required placeholder="Enter your first name"><br>
            <label for="lname">Last name</label>
            <input type="text" name="lname" id="lname" required placeholder="Enter your last name"><br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required placeholder="Enter your email address"><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required placeholder="Enter your password"><br>
            <button name="save-data" type="submit">save data</button>
        </form>
    </div>
</body>

</html>