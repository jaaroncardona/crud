<?php
	include('function.php');
	$userid=$_GET['userid'];
	$method = $_GET['method'];
	$contactid = $_GET['contactid'];
	$adressid=$_GET['adressid'];
	if($method==1){
		delete_number($contactid);
		?><script>window.location.href="edit.php?userid=<?php echo $userid ?>"</script>><?php
	}

	if($method==2){
		delete_address($adressid);
		?><script>window.location.href="edit.php?userid=<?php echo $userid ?>"</script>><?php
	}

	else if($method==3){
	delete_user($userid);
	header('location:index.php');
	
	}
?>