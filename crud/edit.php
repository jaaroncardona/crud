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
$userid = $_GET['userid'];
$user = retreive_user_byid($userid);
if(!isset($_SESSION['id'])){
	?><script>window.location.href="login.php"</script><?php
}
			$addresss=retreive_address();
			$contactt=retreive_contact();
?>
<body>

	<div class="div-body">
		<div class="div-form" style="text-align: center;">
			<form method="post"><center>
				<table style="width: 90%;">
				   <tr>
				      <td><div class="div-left">
				      	<h6>Name</h6>
				      	<input required type="text" name="fname" value="<?php echo $user['fname']; ?>">
				      	<input required type="text" name="mname" value="<?php echo $user['mname']; ?>">
				      	<input required type="text" name="lname" value="<?php echo $user['lname']; ?>">
				      	<input required type="radio" name="gender" value="m" <?php if($user['gender']=="m") echo "checked" ?> ><label>Male</label><input required type="radio" name="gender" value="f" <?php if($user['gender']=="f") echo "checked" ?> ><label>Female</label>
				      	<h6>Birth Date</h6>
				      	<input required type="date" name="birthdate" value="<?php echo $user['birthdate']; ?>">
				      	<h6>Marital Status</h6>
				      	<input required type="text" name="mstatus" value="<?php echo $user['mstatus']; ?>">
				      	<h6>Position</h6>
				      	<input required type="text" name="pos" value="<?php echo $user['pos']; ?>">
				      	<h6>Date Hired</h6>
				      	<input required type="date" name="hireddate" value="<?php echo $user['hireddate']; ?>">
				      </div></td>
				      <td><div class="div-right">
				      	<?php ?>
				      	<h6>Contact Information</h6>
				      	<?php foreach($contactt	 as $con){
				      		if($con['userid']==$user['userid']){
				      			?><input required type="radio" name="contact" <?php if($user['contact']==$con['contactid']) echo "checked" ?> value="<?php echo $con['contactid']; ?>"><?php echo $con['contact']; ?><a href="delete.php?method=1&&userid=<?php echo $user['userid']; ?>&&contactid=<?php echo $con['contactid']; ?>"> x</a><br><?php
				      		}
				      	} ?>
				      	<input type="number" name="newcontacat" placeholder="Add number"><input type="submit" name="addnumber" value="add">
				      	<h6>Address Information</h6>
				      	<?php foreach($addresss as $add){
				      		if($add['userid']==$user['userid']){
				      			?><input required type="radio" name="address" <?php if($user['address']==$add['adressid']) echo "checked" ?> value="<?php echo $add['adressid']; ?>"><?php echo $add['address']; ?><a href="delete.php?method=2&&userid=<?php echo $user['userid']; ?>&&adressid=<?php echo $add['adressid']; ?>"> x</a><br><?php
				      		}
				      	} ?>
				      	<input type="asd" name="newaddress" placeholder="Add Addresss"><input type="submit" name="addaddress" value="add">
				      	<br><br><br><br><br><br><br>
				      	<button style='float: right;' name="add">Save</button>
				      </div></td>
				   </tr>
				</table></center>
			</form>
		</div>
	</div>
	<h2>Modal Example</h2>


 

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
			update_user($userid, $fname, $mname, $lname, $birthdate, $gender, $mstatus, $pos, $hireddate, $address, $contact);
			header("Refresh:0");
			

		}
		if(isset($_POST['addnumber'])){
			$contact = $_POST['newcontacat'];
			add_contact($userid, $contact);
			header("Refresh:0");
		}
		if(isset($_POST['addaddress'])){
			$address = $_POST['newaddress'];
			add_address($userid, $address);
			header("Refresh:0");
		}

	?>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
  		<button type="button" onclick="window.location.href='logout.php'" class="btn btn-primary">Logout</button>&nbsp;&nbsp;
  		<button type="button" onclick="window.location.href='index.php'" class="btn btn-primary">Back</button>
  	</nav>


</body>