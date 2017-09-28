<?php	

	function userAuthorised($dbConnected, $username, $password) {

		setcookie("userID", "", time()-7200, "/");	
		setcookie("loginAuthorised", "", time()-7200, "/");
		setcookie("admin", "", time()-7200, "/");

			mysqli_query($dbConnected, "SET NAMES 'utf8'");

			$md5Password = md5($password);
			$sqlQueryStatement = "SELECT ID, password, admin FROM login ";
			$sqlQueryStatement .= "WHERE username = '".$username."' ";	

			$sqlQuery = mysqli_query($dbConnected, $sqlQueryStatement); 	
			while ($row = mysqli_fetch_array($sqlQuery, MYSQLI_ASSOC)) {
			    $userID = $row['ID'];
			    $passwordRetrieved = $row['password'];
			    $admin = $row['admin'];
			}
		
			mysqli_free_result($sqlQuery);
						
			if (!empty($passwordRetrieved) AND ($md5Password == $passwordRetrieved)) {
				setcookie("admin", "", time()-3600);
	
				if ($admin == '1') {
					setcookie("userID", $userID, time()+7200, "/");	
					setcookie("loginAuthorised", "34f326defb43f22a4fef8af2a25fa331", time()+7200, "/");
					setcookie("admin", "70e90320def2267590e4bef4f682eb3e", time()+7200, "/");
					$returnCode[1] = true;
				} else if ($admin == '0') {
					setcookie("userID", $userID, 0, "/");	
					setcookie("loginAuthorised", "34f326defb43f22a4fef8af2a25fa331", 0, "/");
					setcookie("admin", "bdba9101fc52ae1f6035fba90bd61618", time()+7200, "/");
					$returnCode[1] = false;
				}
				
				$returnCode[0] = true;
								
			} else {
				$returnCode[0] = false;			
			}
			
		return $returnCode;
	}

?>