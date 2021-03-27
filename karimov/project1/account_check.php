<?php
session_start();
$username = $_POST['username']??NULL;
$password = $_POST['password']??NULL;
if (empty($username)){
    exit("Your username is empty");
}
if (empty($password)){
    exit("Your password is empty");
}
$_SESSION['is_user_logged_in'] = FALSE;
if ($username=='Azamatjon111' && $password == 'Azamatjon9925@'){
    $_SESSION['is_user_logged_in'] = 1;
    $msg = "Your login is successful";
    header("Location: facebook.php?msg=$msg");
    exit($msg);
}else{
    $_SESSION['is_user_logged_in'] = FALSE;
    $msg = "Your username or password is incorrect, check and write again";
    header("Location: index.php?msg=$msg");
    exit($msg);
}
?>