<!DOCTYPE html>
<html>
	<head>
		<?php
		require_once("DB.php");
		$con= new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		if($con->connect_error)
		{
			echo "connection failed:".$con->connect_error;
		}else
		{
			echo "connected";
		}
		$id=$_GET['id'];
		echo $id;
		$sql="SELECT * FROM employee WHERE user_id=$id";
		$row=$con->query($sql);
		if($row)
		{
			echo "done";
		}
		$result=$row->fetch_assoc();
		$fname=$result['fname'];
		$lname=$result['lname'];
		$address=$result['address'];
		echo $fname;
		echo $lname;
		echo $address;
		$Ufname=$Ulname=$Uaddress="";
		function test_input($data)
		{
		$data=htmlspecialchars($data);
		$data=stripslashes($data);
		$data=trim($data);
		return $data;
		}
		if(isset($_POST['send']))
		{
		$Ufname=test_input($_POST['fname']);
		$Ulname=test_input($_POST['lname']);
		$Uaddress=test_input($_POST['address']);
		$sqlu="UPDATE `employee` SET `fname` = '$Ufname', `lname` = '$Ulname' , `address` = '$Uaddress' WHERE `employee`.`user_id` = $id";
		$val=$con->query($sqlu);
		if($val)
		{
		header('location:crudapp.php');
		}
		else
		{
		echo "error";
		echo $Ufname;
		echo $Ulname;
		echo $Uaddress;
		}
		}
		?>
		<title>Crud app</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="..\bootstrap-3.3.7-dist\css\bootstrap.min.css">
		<script type="text/javascript" src="jquery/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="w3.css">
	</head>
	<body>
		<div class="container">
			<center><h1>update user</h1></center>
			<form method="post">
				<div class="form-group">
					<label>First name:</label>
					<input type="text" class="form-control" name="fname" value="<?php echo $fname?>">
				</div>
				<div class="form-group">
					<label>last name:</label>
					<input type="text" class="form-control" name="lname" value="<?php echo $lname?>">
				</div>
				<div class="form-group">
					<label>address:</label>
					<input type="text" class="form-control" name="address" value="<?php echo $address?>">
				</div>
				<button class="btn btn-primary" type="submit" name="send">submit</button>
				<a href="../index.php" class="btn btn-default">back</a>
			</form>
		</div>
	</body>
</html>