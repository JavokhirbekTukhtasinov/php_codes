<?php
$connection = new mysqli('localhost','root','','phplessons');


if (isset($_POST['insertData'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $contact = $_POST['contact'];

$sql = "INSERT INTO students (firstname,lastname,courses,contact) VALUES('$fname','$lname','$course','$contact')";
$query = $connection->query($sql);


if ($query) {
    echo "<sctipy> alert('data Saved); </sctipt>";
    header('location: crud.php');
} else {
    echo "<sctipy> alert('data Not Saved); </sctipt>";
     header('location: crud.php');
}
    



}

?>