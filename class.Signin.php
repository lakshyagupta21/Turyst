
<?php
include_once("class.Connection.php");
include_once("class.Getset.php");

$setvar = new getSet();


$fname=$_POST["form-first-name"];
$setvar->setFname($fname);

$lname=$_POST["form-last-name"];
$setvar->setLname($lname);

$email =$_POST["form-email"];
$setvar->setEmail($email);


$uname=$_POST["form-username"];
$setvar->setUname($uname);

$pass=$_POST["form-password"];
$setvar->setPass($pass);

$dob=$_POST["date"];
$setvar->setDob($dob);

$connect = new connection();
$connect->makeConnection();
$connect->insertData($setvar);


echo "\n"."inserted";

?>
