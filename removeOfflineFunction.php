		<?php

		$mediaId = $_POST['var_id'];

		if($mediaId != '') 
		{ 
			include('config/dbConfig.php');
			// Create connection
			$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
			if (!$dbConnected) { die("Connection failed: " . mysqli_connect_error());}
			mysqli_set_charset($dbConnected, 'utf8');
			$userid = @$_COOKIE['userID'];
			if($dbConnected){
				$sqlUpdate = "DELETE FROM offline 
							  WHERE offline.useriD ='".$userid."' 
							  AND offline.fileid = '".$mediaId."';";
						
				mysqli_query($dbConnected,$sqlUpdate) or die(mysqli_error($dbConnected)); 
			}
		}
		?>