<?php
$connection = new mysqli('localhost','root','','korea');


if (isset($_POST['insertData'])) {
    $city = $_POST['city'];
    $name = $_POST['name'];
    $country = $_POST['country'];
    

$sql = "INSERT INTO airports (city,name,country) VALUES('$city','$name','$country')";
$query = $connection->query($sql);


if ($query) {
    echo "<sctipy>alert('data Saved);</sctipt>";
    header('location: crud.php');
} else {
    echo "<sctipy> alert('data Not Saved); </sctipt>";
     header('location: crud.php');
}
    



}




?>