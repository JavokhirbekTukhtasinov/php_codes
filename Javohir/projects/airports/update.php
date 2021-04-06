<?php
exit("hello, im backend ");
$id = $_GET['id']??null;
$id = (int) $id;
$city_name = $_GET["city_name"]??null;
$city_name = $_GET["city_name"]??null;
if (!$id){
   exit("the city name is empty or invalid");
}
if (empty($city_name) || empty($country_name) ) {
    exit("the city name is empty");
}




############################################################################
require_once "database.php";
$obj = new \Database\database("korea");
$sql = "UPDATE airports SET city = '$city_name' where id = $id;";
$delete = $obj->sql($sql);
exit(200);