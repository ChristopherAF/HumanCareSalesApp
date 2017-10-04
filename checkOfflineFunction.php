<?php
checkOffline();

function checkOffline() {
	$returnStatement ="";
	$userid = @$_COOKIE['userID'];
	$fileidArray = [];

	if(isset($_POST['var_id'])) 
	{ 
	  $mediaId = $_POST['var_id']; 

		include('config/dbConfig.php');
		// Create connection
		$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
		if (!$dbConnected) { die("Connection failed: " . mysqli_connect_error());}
		mysqli_set_charset($dbConnected, 'utf8');
		
		$offline_SQLselect = "SELECT * FROM offline WHERE userid='".$userid."'";
		$offline_SQLselect_query = mysqli_query($dbConnected, $offline_SQLselect);
		while ($row = mysqli_fetch_array($offline_SQLselect_query, MYSQLI_ASSOC)) {
			array_push($fileidArray, $row['fileid']);
		}

	$_POST['fileArray'] = $fileidArray;
		if (in_array($mediaId, $fileidArray)) {
			$offline_SQLdelete = "DELETE FROM offline WHERE fileid='".$mediaId."' AND userid='".$userid."'";
			$offline_SQLdelete_query = mysqli_query($dbConnected, $offline_SQLdelete);
			$returnStatement = "false";

		} else {
			$modify_SQLselect = "INSERT INTO offline (offline.userid,offline.fileid) VALUES ('".$userid."','".$mediaId."');";
			$modify_SQLselect_Query = mysqli_query($dbConnected, $modify_SQLselect);
			$returnStatement = "true";

		}
		
		// close conection
		mysqli_close($dbConnected);
	}

	echo $returnStatement;
}

?>