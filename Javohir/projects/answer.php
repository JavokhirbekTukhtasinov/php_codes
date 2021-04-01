<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="answer.css">
</head>

<body>
    <div class="container">
        <form action="answer.php" method="GET">
            <h1>Login</h1>
            <div class="form-control">
                <input type="text" required name="email" id="email" placeholder="">
            </div>
            <div class="form-control">
                <input type="password" required name="password" id="email" placeholder="">
            </div>
            <button type="submit" name="send-data">Let's Gooo</button>
        </form>
    </div>
</body>
<?php

if (isset($_GET["send-data"])) {
    $user = $_GET["email"];
    $pwd = $_GET["password"];
    if ($user == 'javohir@gmail.com' && $pwd == 'javohir1') {
        header('location: answer.home.php');
    }else {
        $msg = 'your email or password is incorrect';
    }
}


?>

</html>