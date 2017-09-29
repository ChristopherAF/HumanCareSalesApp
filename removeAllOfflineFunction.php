		<?php

			include('config/dbConfig.php');
			// Create connection
			$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);

			mysqli_set_charset($dbConnected, 'utf8');
			$userid = @$_COOKIE['userID'];
			if($dbConnected){
				$sqlUpdate = "DELETE FROM offline WHERE userid='".$userid."';";

				mysqli_query($dbConnected,$sqlUpdate) or die(mysqli_error($dbConnected)); 
			}
		?>