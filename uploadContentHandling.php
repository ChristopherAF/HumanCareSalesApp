<?php
	
	if (isset($_FILES['uploadedFile'])) {
		$filename =  $_FILES['uploadedFile']['name'];
		move_uploaded_file($_FILES['uploadedFile']['tmp_name'], "files/".$filename);

		include('config/dbConfig.php'); 
		$dbSuccess = false;
		$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
		mysqli_set_charset($dbConnected, 'utf8');

		$MA = @$_POST['market'];
		$PT = @$_POST['productType'];
		$CT = @$_POST['contentType'];
		$CTLSMS = @$_POST['contentTypeLSMS'];
		$CTLSV = @$_POST['contentTypeLSV'];

		// ADD CHECK FOR THAT FILE NAME IS NOT EMPTY


		//NOT COMPLETE
		if(!empty($MA)) {
			if(!empty($PT)) {
				if(!empty($CT)) {
					if($dbConnected) { // WRONG ROW
						for($i=0; $i<sizeof($MA); $i++) {
							for($j=0; $j<sizeof($PT); $j++) {
								for($k=0; $k<sizeof($CT); $k++) {
									if(!(($PT[$j]=='LS' && $CT[$k]=='MS') || ($PT[$j]=='LS' && $CT[$k]=='V'))) {
										$content_SQLinsert = "INSERT INTO files (MA, PT, CT, filename, active)";
										$content_SQLinsert .= "VALUES ('".$MA[$i]."', '".$PT[$j]."', '".$CT[$k]."', '".$filename."', '1')";
										echo $content_SQLinsert.'<br/>';
										//$content_SQLinsert_query = mysqli_query($dbConnected, $content_SQLinsert);
									} else {
										if (($PT[$j]=='LS' && $CT[$k]=='MS') && !empty($CTLSMS)) {
											$content_SQLinsert = "INSERT INTO files (MA, PT, CT, filename, active)";
											$content_SQLinsert .= "VALUES ('".$MA[$i]."', '".$PT[$j]."', '".$CTLSMS[$k]."', '".$filename."', '1')";
											echo $content_SQLinsert.'<br/>';
											//$content_SQLinsert_query = mysqli_query($dbConnected, $content_SQLinsert);
										} else {
											echo 'If Lifting solutions and Market & Sales material is checked, subcategory must be chosen.';
										}
									}
								}
							}
						} 
					} else {
						echo "DB connect failed";
					}
				} else {
					echo 'Content type cannot be empty.';
				}
			} else {
				echo 'Product type cannot be empty';
			}
		} else {
			echo 'Market area cannot be empty.';
		}

		//header("Location: uploadContent.php?saved=1");

	} else {
		echo "No file uploaded.";
	}

?>