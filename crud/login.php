<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.min.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-modal.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="bootstrap/js/bootstrap.bundle.js"></script>
  	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  	<script src="bootstrap/js/bootstrap.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
  	<script src="bootstrap/js/bootstrap-modal.js"></script>
  	<script src="bootstrap/js/modal.js"></script>
</head>
<body>
	<div class="div-body">
		<div style="width:400px;height: 400px" class="div-form">
			<form method="post" >	
				<input type="asd" class="form-control" name="username" placeholder="Username">
				<input type="password" name="password" class="form-control" placeholder="Password"><br>
				<input type="submit" class="btn btn-light" name="submit" value="login">
			</form>
		</div>
	</div>
</body>
	<?php
	if(isset($_POST['submit'])){
		if($_POST['username']=="admin" && $_POST['password']=="admin"){
			$_SESSION['id']=1;
			header('location:index.php');
		}
	}
	?>
</html>