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
<?php
include('function.php');
session_start();
if(!isset($_SESSION['id'])){
	?><script>window.location.href="login.php"</script><?php
}
$users = retreive_user();
$addresss=retreive_address();
$contactt=retreive_contact();
?>
<body>

	<div class="div-body">
		
		<div class="div-table">
			 <table class="table table-hover table-bordered">
			    <thead>
			      <tr>
			        <th>Name</th>
			        <th>Address</th>
			        <th>Contact Info</th>
			        <th>Age</th>
			        <th>Years in the Company</th>
			        <th></th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php
			      		foreach ($users as $user){
			      ?>
			      <tr>
			        <td><?php echo $user['lname'].', '.$user['fname'].' '.$user['mname']; ?></td>
			        <td>
			        	<?php foreach($addresss as $add){
				      		if($add['userid']==$user['userid']){
				      			if($user['address']==$add['adressid']){
				      				echo $add['address'];
				      			}
				      		}
				      	}
				      	?>
			        </td>
			        <td>
			        	<?php foreach($contactt as $con){
				      		if($con['userid']==$user['userid']){
				      			if($user['contact']==$con['contactid']){
				      				echo $con['contact'];
				      			}
				      		}
				      	}
				      	?>
			        </td>
			        <td><?php
			        	$bdate = $user['birthdate'];
			        	$age = date_diff(date_create($bdate), date_create('now'))->y;
			        	echo $age+2;
			        ?></td>
			        <td><?php
			        	$hdate = $user['hireddate'];
			        	$age = date_diff(date_create($hdate), date_create('now'))->y;
			        	echo $age+2;
			        ?></td>
			        <td>
			        	<a href="edit.php?userid=<?php echo $user['userid']; ?>">[edit]</a> | <a href="delete.php?userid=<?php echo $user['userid']; ?>&&method=3" onclick="return confirm('Delete user');">[delete]</a>
			        </td>
			      </tr>
			      <?php
			      	}
			      ?>
			    </tbody>
			  </table>
			
		</div>
	</div>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
  		<button type="button" onclick="window.location.href='logout.php'" class="btn btn-primary">Logout</button>&nbsp;&nbsp;
  		<button type="button" onclick="window.location.href='add.php'" class="btn btn-primary">Add</button>
  	</nav>
</body>