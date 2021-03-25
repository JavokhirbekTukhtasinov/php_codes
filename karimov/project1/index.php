<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
$msg = $_GET['msg']??NULL;
?>
<form class="box" action="account_check.php" method='POST'>
    <?php
    if (!empty($msg)){
    ?>
    <p>
        <div class="warning">
            <?php
            echo $msg;
            ?>
        </div>
    </p>
    <?php
    }
    ?>
    <h1>Login</h1>
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Login">

</form>

</body>
</html>