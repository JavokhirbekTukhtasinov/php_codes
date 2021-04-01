<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validate</title>
    <link rel="stylesheet" href="validate.css">
</head>

<body>


    <div class="container">
        <div class="nav">
            <a href="login.php"><button class="btn1">login</button></a>
            <a href="main_page.php"><button class="btn">Home</button></a>
        </div>
        <form action="reg.insert.dataBase.php" method="POST" class=" form" id="form">
            <h2>Register With Us</h2>
            <div class="form-control">
                <label for="username">First name</label>
                <input type="text" required name='user_first' id="username" placeholder="Enter first name">
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Last name</label>
                <input type="text" required name='user_last' id="username" placeholder="Enter last name">
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" required name='user_email' id="email" placeholder="Enter email">
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" required name='password' id="password" placeholder="Enter password">
                <small>Error message</small>
            </div>

            <button type="submit" name="insert-data">Submit</button>
        </form>
    </div>

    <!-- 
    <script src="validate.js"></script> -->
</body>

</html>