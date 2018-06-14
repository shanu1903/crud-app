<!DOCTYPE html>
<html>
	<head>
		<?php
		require_once("DB.php");
		include('session.php');
		$con= new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		if($con->connect_error)
		{
			echo "connection failed:".$con->connect_error;
		}else
		{
			echo "connected";
		}
		?>
		<title>Crud app</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="..\bootstrap-3.3.7-dist\css\bootstrap.min.css">
		<script type="text/javascript" src="../jquery/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="..\bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="..\w3.css">
		<style type="text/css">
			body{
				background-color:#dcdada;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row" style="margin-top: 78px;">
				<div class="col-md-10 col-md-offset-1">
					<center><h1>EMPLOYEES DETAILS</h1></center>
					<button class="btn btn-warning" data-toggle="modal" data-target="#mymodal">ADD</button>
					<button class="btn btn-default pull-right" onclick="print()">PRINT</button>
					<hr><br>
					<!--modal______________________________________________________-->
					<div class="modal fade" id="mymodal">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button class="close" data-dismiss="modal">&times</button>
									<h2 class="modal-heading">Add user</h2>
								</div>
								<div class="modal-body">
									<form action="classes/add.php" method="post">
										<div class="form-group">
											<label>First name:</label>
											<input type="text" name="fname" class="form-control" required placeholder="Enter your first name">
										</div>
										<div class="form-group">
											<label>Last name:</label>
											<input type="text" name="lname" class="form-control" required placeholder="Enter you last name">
										</div>
										<div class="form-group">
											<label>Address:</label>
											<input type="text" name="address" class="form-control" required placeholder="Enter your address">
										</div>
										
										<button class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!--table____________________________________________________________-->
					<table class="w3-table w3-table-all w3-hoverable">
						<thead>
							<tr>
								<th>User_id</th>
								<th>First name</th>
								<th>Last name</th>
								<th>address</th>
								<th>option</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$result=$con->query("select * from employee");
							while($row=$result->fetch_assoc()):
							?>
							<tr>
								<td><?php echo $row["user_id"]?></td>
								<td><?php echo $row["fname"]?></td>
								<td><?php echo $row["lname"]?></td>
								<td><?php echo $row["address"]?></td>
								<td><a class="btn btn-success" href="update.php?id=<?php echo $row['user_id']?>">edit</a>
								<a class="btn btn-danger" href="delete.php?id=<?php echo $row['user_id']?>">delete</a></td>
								
							</tr>
							
							<?php endwhile;?>
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</body>
</html>