<?php
	include('config.php');
	session_start();
	$con=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME)
	if($con->connect_error)
	{
		echo "connection failed".$con->connect_error;
	}
	else
	{
		echo "connected";
	}
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$username=$_POST['user'];
		$password=$_POST['pass'];
		$result=$con->query("select * from user where username='$username' and password='$password'");
		$row=$result->fetch_assos();
		$count=mysqli_num_rows($result);
		if($count==1)
		{
			$_SESSION['login_user']=$username;
			header('location:crudapp.php');
		}
		else
		{
			echo 'invalid email or password';
		}
	}
?>