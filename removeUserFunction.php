<?php

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

?>