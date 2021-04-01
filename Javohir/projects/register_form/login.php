<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="validate.css">
</head>

<body>
    <div class="container">
        <div class="nav">
            <a href="validate.php"><button class="btn1">Sign up</button></a>
            <a href="main_page.php"><button class="btn">Home</button></a>
        </div>
        <form action="login_process.php" method="POST" class=" form" id="form">
            <h2>Log in</h2>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="text" required name='user_email' id="email" placeholder="Enter email">
                <small>Error message</small>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" required name='password' id="password" placeholder="Enter password">
                    <small>Error message</small>
                </div>
                <button type="submit" name="check-user">Submit</button>
        </form>
    </div>
</body>

</html>