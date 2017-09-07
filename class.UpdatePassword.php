<?php
session_start();

include_once("class.Database.php");
include_once("class.Connection.php");


	$pcurrent=$_POST["form-password-current"];
	$pnew=$_POST["form-password-new"];
	$pconfirm=$_POST["form-password-confirm"];
	

	if ($pnew == $pconfirm)
	{
		$connect = new connection();
		$connect->changePass($pcurrent,$pnew,$pconfirm);
	}
	else
	{
		header('Location: http://profile-failed.php');
	}





?>