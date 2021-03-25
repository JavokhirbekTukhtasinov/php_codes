<?php  
$servername = 'localhost';
$username = 'root';
$pwd = "";
$DBname = "KOREA";
$conn = new mysqli($servername,$username,$pwd,$DBname);

if ($conn->connect_errno) {
    echo "connection failed: " . $conn->error;
}else {
    echo "successfuly connected";
}


$sql = "INSERT INTO followers";

if ($conn->query($sql)==true) {
    echo "table created";
}else {
    echo 'failed: ' . $conn->error;
}