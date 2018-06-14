<?php
include('config.php');
$con=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($con->connect_error)
{
	echo "connection failed".$con->connect_error;
}
else
{
	echo "connect";
}
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	echo $username;
	echo'<br>'.$password;
	$result=$con->query("INSERT INTO `user`(`username`,`password`) values('$username','$password')");
	if($result)
	{
		header('location:../index2.php');
	}
	else{
		echo "error";
	}
}
?>