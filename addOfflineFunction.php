<?php

if(isset($_POST['var_id'])) 
{ 
  $mediaId = $_POST['var_id']; 

	include('config/dbConfig.php');
	// Create connection
	$userid = @$_COOKIE['userID'];
	$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
	if (!$dbConnected) { die("Connection failed: " . mysqli_connect_error());}
	mysqli_set_charset($dbConnected, 'utf8');
	
	
	$modify_SQLselect = "INSERT INTO offline (offline.userid,offline.fileid) VALUES ('".$userid."','".$mediaId."');";

	$modify_SQLselect_Query = mysqli_query($dbConnected, $modify_SQLselect);
	// close conection
	mysqli_close($dbConnected);
}

?>