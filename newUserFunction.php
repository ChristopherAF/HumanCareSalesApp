<?php
include_once('logInAndOut/authorise.php');

	$status = @$_POST['status'];
	$loginAuthorised = (@$_COOKIE["loginAuthorised"] == "34f326defb43f22a4fef8af2a25fa331");
	$admin = (@$_COOKIE['admin'] == "70e90320def2267590e4bef4f682eb3e");

	if($loginAuthorised && $admin) {

	$username = @$_POST['newUsername'];
	$password1 = @$_POST['newUserPassword1'];
	$password2 = @$_POST['newUserPassword2'];
	$admin = @$_POST['adminCheckbox'];

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
		if ($username != '') {
			if($password1 != '' && $password2 != '') {
				if ($password1 == $password2) {
					$password = md5($password1);
					if ($admin == 'on') {
						$isAdmin = '1';
					} else {
						$isAdmin = '0';
					}
					$newuser_SQLinsert = "INSERT INTO login(username, password, admin) VALUES ('".$username."', '".$password."', '".$isAdmin."')";
					$newuser_SQLinsert_query = mysqli_query($dbConnected, $newuser_SQLinsert);
					header("Location: manageUsers.php?newuser=success");
				} else {
					header("Location: manageUsers.php?newuser=failed");
				}
			} else {
				header("Location: manageUsers.php?newuser=failed");
			}
		} else {
			header("Location: manageUsers.php?newuser=failed");
		}
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