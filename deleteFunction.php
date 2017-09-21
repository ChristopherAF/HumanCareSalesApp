<?php
	
	$chboxId = $_POST['chboxId'];

	if ($chboxId != '') {
		include('config/dbConfig.php');
		$dbSuccess = false;
		$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
		mysqli_set_charset($dbConnected, 'utf8');

		if($dbConnected) {
			for ($i=0; $i<sizeof($chboxId); $i++) {
				$delete_SQLselect = "UPDATE files SET active='0' WHERE id='".$chboxId[$i]."';";
				echo $delete_SQLselect;
				$delete_SQLselect_Query = mysqli_query($dbConnected, $delete_SQLselect);
			}
		}
		header("Location: manageContent.php?deleted=1");
	} else {
		header("Location: manageContent.php?deleted=0");
	}
	
?>