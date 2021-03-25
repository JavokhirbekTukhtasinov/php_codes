<?php
session_start();

$conn = new mysqli("localhost","root","","phplessons");
if ($conn->connect_errno) {
    echo "connection failed: ". $conn->error;
}

if (isset($_POST["save-data"])) {
    $first_name = $_POST['fname'];
    $last_name = $_POST["lname"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
}

$sql = "INSERT INTO users(user_first, user_last, user_email, user_pwd) VALUES('$first_name','$last_name','$email','$pwd')";
$result = $conn->query($sql);
if ($result) {
    $_SESSION["smg"] = "data inserted successfully";
    header("location: logup.php");
}else {
    $_SESSION["smg"] = "data did not inserted successfully";
    header("location: logup.php");
}
?>