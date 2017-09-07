
<?php

include_once("class.Connection.php");
include_once("class.Getset.php");

$setvar = new getSet();

//$uname="rajat";
//$pass="qwerty";


$uname=$_POST["form-username"];
$setvar->setUname($uname);

$pass=$_POST["form-password"];
$setvar->setPass($pass);


$connect = new connection();
$connect->makeConnection();
$connect->checkAuth($setvar);

echo "\n"."inserted";

?>
