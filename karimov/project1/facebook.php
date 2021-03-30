<?php
session_start();
if (empty($_SESSION['is_user_logged_in'])){
    $msg = "Get out of here!";
    header("Location: index.php?msg=$msg");
}
if ($_SESSION['is_user_logged_in'] !=1){
    $msg = "You are not authorized to view this page!";
    header("Location: index.php?msg=$msg");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Azamatjon Karimov</title>
    <link rel="stylesheet" href="facebook.css">
</head>
<body>
<a href="Logout.php">Logout</a>
<hr>
<h1>hey</h1>

</body>
</html>
