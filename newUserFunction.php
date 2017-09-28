<?php

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

?>