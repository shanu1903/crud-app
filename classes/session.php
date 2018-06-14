<?php
	include('config.php');
	$con=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	session_start();
	if(!isset($_SESSION['login_user']))
	{
		header('locaion:../index.php');
	}
	$user_check=$_SESSION['login_user'];
	$sess_sql="SELECT * FROM `user` WHERE `username`='$username'";
	$result=$con->query($sess_sql);
	if($result)
	{
		echo "done";
	}
	else
	{
		echo "error";
	}
	$row=$result->fetch_assoc();
	$login_session=$row['username'];
	
?>