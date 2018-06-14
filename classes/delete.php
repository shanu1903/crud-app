<?php require_once("DB.php");
$con= new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($con->connect_error)
{
	echo "error".$con->connect_error;
}
else{
	echo "connected";
}
$id=$_GET["id"];
echo $id;
$sql="delete from employee where user_id=$id";
$val=$con->query($sql);
if($val)
{
	header('location:crudapp.php');
}
else
{
	echo "error";
}
?>