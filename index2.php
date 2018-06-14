<!DOCTYPE html>
<html>
<head>
	<?php
		require_once('classes/DB.php');
	?>
	<title></title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
		<script type="text/javascript" src="jquery/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3.css">
		<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
	<div class="container">
		<div class="row">
		    <div class="col-lg-4">
		    	
		    </div>
			<div class="col-lg-4">
				<form action="login.php" method="post" id="login-form">
			<div class="form-group">
				<div class="col-lg-12">
					<label>Username:</label>
				<input type="test" name="user" class="form-control" required>
				</div>
			</div>
			<br /><br /><br /><br />
			<div class="form-group">
				<div class="col-lg-12">
					<label>Password:</label>
				<input type="password" name="pass" class="form-control" required>
				</div>
			</div>
			<br /><br /><br /><br />
			<input type="submit" name="submit" value='login' class="btn btn-primary"  >
			
		</form>
		<button class="btn btn-default pull-right" data-toggle="modal" data-target='#mymodal'>REGISTER</button>
			</div>
			<div class="modal fade" id="mymodal">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button class="close" data-dismiss="modal">&times</button>
									<h2 class="modal-heading">Add user</h2>
								</div>
								<div class="modal-body">
									<form action="classes/register.php" method="post">
										<div class="form-group">
											<label>First name:</label>
											<input type="text" name="username" class="form-control" required placeholder="Enter your username">
										</div>
										<div class="form-group">
											<label>password:</label>
											<input type="password" name="password" class="form-control" required placeholder="Enter you password">
										</div>
										
										<button class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>
			<div class="col-lg-4">
				
			</div>
		</div>
	</div>
</body>
</html>