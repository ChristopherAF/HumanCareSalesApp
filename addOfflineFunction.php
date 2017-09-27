<?php

if(isset($_POST['var_id']) && isset($_POST['bool_offline']) ) 
{ 
  $mediaId = $_POST['var_id']; 
  $isOffline = $_POST['bool_offline']; 

	include('config/dbConfig.php');
	// Create connection
	$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
	// Check connection
	if (!$dbConnected) { die("Connection failed: " . mysqli_connect_error());}
	mysqli_set_charset($dbConnected, 'utf8');
	// update offlinen  status of media file
	$modify_SQLselect = "UPDATE files SET offline='".$isOffline."' WHERE id='".$mediaId."';";
	$modify_SQLselect_Query = mysqli_query($dbConnected, $modify_SQLselect);
	// close conection
	mysqli_close($dbConnected);
}

?>