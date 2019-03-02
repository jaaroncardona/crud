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
	
?>
<body>

	<div class="div-body">
		<div class="div-form" style="text-align: center;">
			<form method="post"><center>
				<table style="width: 90%;">
				   <tr>
				      <td><div class="div-left">
				      	<h6>Name</h6>
				      	<input required type="text" name="fname" placeholder="First Name">
				      	<input required type="text" name="mname" placeholder="Middle Name">
				      	<input required type="text" name="lname" placeholder="Last Name">
				      	<input required type="radio" name="gender" value="m"><label>Male</label><input required type="radio" name="gender" value="f"><label>Female</label>
				      	<h6>Birth Date</h6>
				      	<input required type="date" name="birthdate" placeholder="Birth Date">
				      	<h6>Marital Status</h6>
				      	<input required type="text" name="mstatus" placeholder="Marital Status">
				      	<h6>Position</h6>
				      	<input required type="text" name="pos" placeholder="Position">
				      	<h6>Date Hired</h6>
				      	<input required type="date" name="hireddate" placeholder="Date Hired">
				      </div></td>
				      <td><div class="div-right">
				      	<h6>Contact Information</h6>
				      	<input required type="text" name="contact" placeholder="Phone/Tel number"><br>
				      	<h6>Address Information</h6>
				      	<input required type="text" name="address" placeholder="Address"><br><br><br><br><br><br><br>
				      	<button style='float: right;' class="btn btn-primary " name="add">Add</button>
				      </div></td>
				   </tr>
				</table></center>
			</form>
		</div>
	</div>

	<?php
		if(isset($_POST['add'])){
			$fname = $_POST['fname'];
			$mname = $_POST['mname'];
			$lname = $_POST['lname'];
			$birthdate = $_POST['birthdate'];
			$gender = $_POST['gender'];
			$mstatus = $_POST['mstatus'];
			$pos = $_POST['pos'];
			$hireddate = $_POST['hireddate'];
			$contact = $_POST['contact'];
			$address = $_POST['address'];
			$users=retreive_user();
			foreach ($users as $user) {
				$userid = $user['userid'];
			}
			$userid = $userid + 1;
			add_address($userid, $address);
			add_contact($userid, $contact);
			$addresss=retreive_address();
			$contactt=retreive_contact();
			foreach($addresss as $a){
				$address=$a['adressid'];
			}
			foreach($contactt as $c){
				$contact=$c['contactid'];
			}
			add_user($fname, $mname, $lname, $birthdate, $gender, $mstatus, $pos, $hireddate, $address, $contact);
			


		}
	?>

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
  		<button type="button" onclick="window.location.href='logout.php'" class="btn btn-primary">Logout</button>&nbsp;&nbsp;
  		<button type="button" onclick="window.location.href='index.php'" class="btn btn-primary">back</button>
  	</nav>
</body>