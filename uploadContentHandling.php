<?php
	$filename = $_FILES['uploadedFile']['name'];

	if ($filename != '') {
		
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

		if(isset($_FILES['uploadedFileIcon'])) {
			$iconFilename = $_FILES['uploadedFileIcon']['name'];
			move_uploaded_file($_FILES['uploadedFileIcon']['tmp_name'], "files/".$iconFilename);

			if($dbConnected) {
				for($i=0; $i<sizeof($MA); $i++) {
					for($j=0; $j<sizeof($PT); $j++) {
						if($PT[$j] == "C") {
							echo 'Loop 1<br/>';
							$content_SQLinsert = "INSERT INTO files (MA, PT, filename, iconFilename, active)";
							$content_SQLinsert .= "VALUES ('".$MA[$i]."', '".$PT[$j]."', '".$filename."', '".$iconFilename."', '1')";
							echo $content_SQLinsert.'<br/>';
							$content_SQLinsert_query = mysqli_query($dbConnected, $content_SQLinsert);
						}
						for($k=0; $k<sizeof($CT); $k++) {
							if(($PT[$j] == "LS") && ($CT[$k] == "MS")) {
								for($l=0; $l<sizeof($CTLSMS); $l++) {
									echo 'Loop 2<br/>';
									$content_SQLinsert = "INSERT INTO files (MA, PT, CT, CTLSMS, filename, iconFilename, active)";
									$content_SQLinsert .= "VALUES ('".$MA[$i]."', '".$PT[$j]."', '".$CT[$k]."', '".$CTLSMS[$l]."', '".$filename."', '".$iconFilename."', '1')";
									echo $content_SQLinsert.'<br/>';
									$content_SQLinsert_query = mysqli_query($dbConnected, $content_SQLinsert);
								}
							} else if(($PT[$j] == "LS") && ($CT[$k] == "V")) {
								for($l=0; $l<sizeof($CTLSV); $l++) {
									echo 'Loop 3<br/>';
									$content_SQLinsert = "INSERT INTO files (MA, PT, CT, CTLSV, filename, iconFilename, active)";
									$content_SQLinsert .= "VALUES ('".$MA[$i]."', '".$PT[$j]."', '".$CT[$k]."', '".$CTLSV[$l]."', '".$filename."', '".$iconFilename."', '1')";
									echo $content_SQLinsert.'<br/>';
									$content_SQLinsert_query = mysqli_query($dbConnected, $content_SQLinsert);
								}
							} else if ($PT[$j] == "BS") {
								if(($CT[$k] == "MS") || ($CT[$k] == "PL")) {
									echo 'Loop 4</br>';
									$content_SQLinsert = "INSERT INTO files (MA, PT, CT, filename, iconFilename, active)";
									$content_SQLinsert .= "VALUES ('".$MA[$i]."', '".$PT[$j]."', '".$CT[$k]."', '".$filename."', '".$iconFilename."', '1')";
									echo $content_SQLinsert.'<br/>';
									$content_SQLinsert_query = mysqli_query($dbConnected, $content_SQLinsert);
								}
							} else {
								if($PT[$j] != "C") {
									echo 'Loop 5<br/>';
									$content_SQLinsert = "INSERT INTO files (MA, PT, CT, filename, iconFilename, active)";
									$content_SQLinsert .= "VALUES ('".$MA[$i]."', '".$PT[$j]."', '".$CT[$k]."', '".$filename."', '".$iconFilename."', '1')";
									echo $content_SQLinsert.'<br/>';
									$content_SQLinsert_query = mysqli_query($dbConnected, $content_SQLinsert);
								}
							}
						}
					}
				}
			}
			header("Location: uploadContent.php?saved=1");
		} 
	} else {
		header("Location: uploadContent.php?saved=0");
	}

?>