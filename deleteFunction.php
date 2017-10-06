<?php
	include_once('logInAndOut/authorise.php');

	$status = @$_POST['status'];
	$loginAuthorised = (@$_COOKIE["loginAuthorised"] == "34f326defb43f22a4fef8af2a25fa331");
	$admin = (@$_COOKIE['admin'] == "70e90320def2267590e4bef4f682eb3e");

	if($loginAuthorised && $admin) {
	
		$chboxId = $_POST['chboxId'];

		if ($chboxId != '') {
			include('config/dbConfig.php');
			$dbSuccess = false;
			$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
			mysqli_set_charset($dbConnected, 'utf8');

			if($dbConnected) {
				for ($i=0; $i<sizeof($chboxId); $i++) {
					$delete_SQLselect = "UPDATE files SET active='0' WHERE id='".$chboxId[$i]."';";
					$delete_SQLselect_Query = mysqli_query($dbConnected, $delete_SQLselect);
				}
			}
			header("Location: manageContent.php?deleted=1");
		} else {
			header("Location: manageContent.php?deleted=0");
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