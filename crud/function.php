<?php

	date_default_timezone_set('Asia/Manila');
	function db(){
		return new PDO("mysql:host=localhost; dbname=crud;", "root", "");
	}


	function add_user($fname, $mname, $lname, $birthdate, $gender, $mstatus, $pos, $hireddate, $address, $contact){
		$db = db();
		$sql = "INSERT INTO user(fname, mname, lname, birthdate, gender, mstatus, pos, hireddate, address, contact) VALUES (?,?,?,?,?,?,?,?,?,?)";
		$s = $db->prepare($sql);
		$s->execute(array($fname, $mname, $lname, $birthdate, $gender, $mstatus, $pos, $hireddate, $address, $contact));
		$db = null;
	}

	function add_contact($userid, $contact){
		$db = db();
		$sql = "INSERT INTO contact(userid, contact) VALUES (?,?)";
		$s = $db->prepare($sql);
		$s->execute(array($userid, $contact));
		$db = null;
	}

	function add_address($userid, $address){
		$db = db();
		$sql = "INSERT INTO address(userid, address) VALUES (?,?)";
		$s = $db->prepare($sql);
		$s->execute(array($userid, $address));
		$db = null;
	}

	function retreive_contact(){
		$db = db();
		$sql = "SELECT * FROM contact";
		$s = $db->query($sql);
		$row = $s->fetchAll();
		$db = null;
		return $row;
	}

	function retreive_address(){
		$db = db();
		$sql = "SELECT * FROM address";
		$s = $db->query($sql);
		$row = $s->fetchAll();
		$db = null;
		return $row;
	}

	function retreive_user_byid($userid){
		$db = db();
		$sql = "SELECT * FROM user where userid = ?";
		$s = $db->prepare($sql);
		$s->execute(array($userid));
		$item = $s->fetch();
		$db = null;
		return $item;
	}

	function retreive_id(){
	
		$db = db();
		$sql = "SELECT max(id) FROM user";
		$s = $db->query($sql);
		$row = $s->fetchAll();
		$db = null;
		return $row;
	}

	function retreive_user(){
		$db = db();
		$db = db();
		$sql = "SELECT * FROM user";
		$s = $db->query($sql);
		$row = $s->fetchAll();
		$db = null;
		return $row;
	}

	function update_user($userid, $fname, $mname, $lname, $birthdate, $gender, $mstatus, $pos, $hireddate, $address, $contact){
		$db = db();
		$sql =  "UPDATE user set fname = ?, mname = ?, lname = ?, birthdate = ?, gender = ?, mstatus = ?, pos = ?, hireddate = ?, address = ?, contact = ? where userid = ? ";
		$s= $db->prepare($sql);
		$s->execute(array($fname, $mname, $lname, $birthdate, $gender, $mstatus, $pos, $hireddate, $address, $contact, $userid));
		$db=null;
	}

	function delete_user($userid){
		$db = db();
		$sql =  "DELETE FROM user WHERE userid = $userid";
		$s = $db->prepare($sql);
		$s->execute(array($userid));
		$db = null;
	}
	function delete_number($contactid){
		$db = db();
		$sql =  "DELETE FROM contact WHERE contactid = $contactid";
		$s = $db->prepare($sql);
		$s->execute(array($contactid));
		$db = null;
	}

	function delete_address($adressid){
		$db = db();
		$sql =  "DELETE FROM address WHERE adressid = $adressid";
		$s = $db->prepare($sql);
		$s->execute(array($adressid));
		$db = null;
	}



?>