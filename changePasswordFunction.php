<?php 
include_once('logInAndOut/authorise.php');

$status = @$_POST['status'];
$loginAuthorised = (@$_COOKIE["loginAuthorised"] == "34f326defb43f22a4fef8af2a25fa331");
$admin = (@$_COOKIE['admin'] == "70e90320def2267590e4bef4f682eb3e");

if($loginAuthorised && $admin) {
	$userid = $_POST['userid'];
	$password1 = $_POST['changePassword1'];
	$password2 = $_POST['changePassword2'];

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

		if ($password1 != '' && $password2 != '') {
			if ($password1 == $password2) {
				$newPassword = md5($password1);
				$pass_SQLupdate = "UPDATE login SET password='".$newPassword."' WHERE id='".$userid."'";
				$pass_SQLupdate_Query = mysqli_query($dbConnected, $pass_SQLupdate);
				header("Location: manageUsers.php?password=success");
			} else {
				header("Location: manageUsers.php?password=failed");
			}
		} else {
			header("Location: manageUsers.php?password=failed");
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