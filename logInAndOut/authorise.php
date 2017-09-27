<?php	

	function userAuthorised($dbConnected, $username, $password) {

			mysqli_query($dbConnected, "SET NAMES 'utf8'");

			$md5Password = md5($password);
			$sqlQueryStatement = "SELECT ID, password FROM login ";
			$sqlQueryStatement .= "WHERE username = '".$username."' ";	

			$sqlQuery = mysqli_query($dbConnected, $sqlQueryStatement); 	
			while ($row = mysqli_fetch_array($sqlQuery, MYSQLI_ASSOC)) {
			    $userID = $row['ID'];
			    $passwordRetrieved = $row['password'];
			}
		
			mysqli_free_result($sqlQuery);
						
			if (!empty($passwordRetrieved) AND ($md5Password == $passwordRetrieved)) {
	
					//setcookie("accessLevel", $accessLevel, time()+7200, "/");	
					setcookie("userID", $userID, time()+7200, "/");	
					setcookie("loginAuthorised", "34f326defb43f22a4fef8af2a25fa331", time()+7200, "/");
					
					$returnCode = true;
								
			} else {
				$returnCode = false;			
			}
			
		return $returnCode;
	}

?>