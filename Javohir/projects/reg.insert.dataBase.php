<?php
include_once= "validate.php";
//connecting database
$serverName = "localhost";
$userName = "root";
$password = "";
$db = "phplessons";

$conn = new mysqli($serverName, $userName, $password, $db);

if ($conn->connect_errno) {
    echo "connection failed: " . $conn->connect_error;
} else {
    echo "connected successfuly";
}

$sql = "INSERT INTO users ('user_first', 'user_last','user_email', 'user_pwd')
VALUES ('$user_first','$user_last','$user_email','$pwd')";

if(isset($_GET["submit"])) {
    if ($conn->query($sql)) {
        header('location:regex.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$user_first = $_GET['user_first'];
$user_last = $_GET['user_last'];
$user_email = $_GET['user_email'];
$pwd = $_GET['password'];

$conn->close();