<?php
session_start();
//connect to the database
$conn = new mysqli("localhost","root","","phplessons");

// if ($conn->connect_errno) {
//     echo "connection failed: ". $conn->error;
// }
//getting data from user form
if (isset($_POST["insert-data"])) {
    $first_name = $_POST["user_first"];
    $last_name = $_POST["user_last"];
    $email = $_POST["user_email"];
    $pwd = md5($_POST["password"]);

// inserting user's data to the database

    $sql = "INSERT INTO users (user_first, user_last, user_email, user_pwd) VALUES('$first_name','$last_name','$email','$pwd')";
$result = $conn->query($sql);
if ($result) {
    $_SESSION["msg"] = "$first_name welcome to our website";
    header('location: main.page.php');
}else {
        $_SESSION["err"] = "Sorry, you did not log up successfully";
        header("location: validate.php");
        exit;
}
}

?>