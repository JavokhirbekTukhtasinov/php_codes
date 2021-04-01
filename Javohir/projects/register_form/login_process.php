<?php
session_start();
// connect to database
$conn = new mysqli("localhost", "root", "", "phplessons");
###############################################################
if (isset($_POST["check-user"])) {
    $user_email = $_POST["user_email"];
    $user_pwd = $_POST["password"];
    //getting data from database
    $user = $conn->query("SELECT user_email, user_pwd from users where user_email='$user_email'");
    $row = mysqli_fetch_array($user);
    if ($row["user_email"] === $user_email) {
       $_SESSION["seccess"] = "Welcome! you loged in with email: $user_email and password: $user_pwd";
        header("location: home.php");
        
    } else {
        $_SESSION["email_err"] = "Sorry, $user_email or $user_pwd is not registrated in our system";
        header("location: login.php?msg=failed");
        exit;
    }
}