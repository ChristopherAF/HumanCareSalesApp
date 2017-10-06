<?php
include_once('logInAndOut/authorise.php');

	$status = @$_POST['status'];
	$loginAuthorised = (@$_COOKIE["loginAuthorised"] == "34f326defb43f22a4fef8af2a25fa331");
	$admin = (@$_COOKIE['admin'] == "70e90320def2267590e4bef4f682eb3e");

	if($loginAuthorised && $admin) {

	$userid = @$_POST['userid'];

	include('config/dbConfig.php'); 
	$dbSuccess = false;
	$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);

	if ($dbConnected) {		
		$dbSelected = mysqli_select_db($dbConnected,$db['database']);
		if ($dbSelected) {
			$dbSuccess = true;
		} 	
	}

	if ($dbSuccess) {
		
		$user_SQLdelete = "DELETE FROM login WHERE id='".$userid."'";
		$user_SQLdelete_query = mysqli_query($dbConnected, $user_SQLdelete);
		header("Location: manageUsers.php?deleteuser=success");

	} else {
		header("Location: manageUsers.php?deleteuser=failed");
	}
} else {
	$username = @$_POST['username'];
	$password = @$_POST['password'];
	if (userAuthorised($dbConnected, $username, $password)) {
		header("Location: index.php");
	} else {
		header("Location: logInAndOut/loginForm.php");
	}
}

?>