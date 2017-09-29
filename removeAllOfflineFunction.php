		<?php

		$mediaId = $_POST['var_imgID'];

		if($mediaId != '') 
		{ 
			include('config/dbConfig.php');
			// Create connection
			$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);

			mysqli_set_charset($dbConnected, 'utf8');
			$userid = @$_COOKIE['userID'];
			if($dbConnected){
				$sqlSelect = "SELECT * FROM offline WHERE userid='".$userid."';";
				$sqlSelect_query = mysqli_query($dbConnected, $sqlSelect);

				while ($row = mysqli_fetch_array($sqlSelect_query, MYSQLI_ASSOC)) {
					$id = $row['id'];
					$sqlUpdate = "DELETE FROM offline WHERE id='".$id."';";
					mysqli_query($dbConnected,$sqlUpdate) or die(mysqli_error($dbConnected)); 	
				}
			}
		}
		?>