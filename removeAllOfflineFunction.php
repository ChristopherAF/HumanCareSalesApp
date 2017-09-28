<?php
//$mediaId = $_POST['var_imgID'];
$mediaId = '395';

if($mediaId != '') { 
 
	include('config/dbConfig.php');
	// Create connection
	$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);

	mysqli_set_charset($dbConnected, 'utf8');
	
	if($dbConnected){
		$sqlUpdate = "UPDATE files SET offline='0' WHERE id IN (".$mediaId.");";
		mysqli_query($dbConnected,$sqlUpdate) or die(mysqli_error($dbConnected)); 
		header("Location: offline.php?deleted=1");
	}
		
} else {
	header("Location: offline.php?deleted=0");
}

?>