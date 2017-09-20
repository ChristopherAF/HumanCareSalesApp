<?php

	include('../config/dbConfig.php');
	$dbSuccess = false;
	$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
	mysqli_set_charset($dbConnected, 'utf8');

	if($dbConnected) {
		$content_SQLselect = "SELECT * FROM files";
		$content_SQLselect_Query = mysqli_query($dbConnected, $content_SQLselect);

		echo '
			<!DOCTYPE html>
				<html>
					<head>
						<title>Human Care Sales App</title>
						<meta charset="utf-8">
						<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />	
						<script type="text/javascript" src="../config/jquery.min.js"></script>
						<script type="text/javascript" src="../config/bootstrap.js"></script>
						<link rel="stylesheet" href="../css/main.css" type="text/css" />
					</head>
					<body>
						<div class="container">
							<div class="topDiv">
								<img src="../images/logo/headerlogo.png">
							</div>
							<div class="contentDiv">
								<h4>Choose which files you would like to delete:</h4>
								<form name="deleteFunction" action="deleteFunction.php" method="post" >
							';

		while ($row = mysqli_fetch_array($content_SQLselect_Query, MYSQLI_ASSOC)) {
			$id = $row['id'];
			$MA = $row['MA'];
			$PT = $row['PT'];
			$CT = $row['CT'];
			$CTLSMS = $row['CTLSMS'];
			$CTLSV = $row['CTLSV'];
			$filename = $row['filename'];
			$iconFilename = $row['iconFilename'];
			$active = $row['active'];

			echo '<a href="../files/'.$filename.'"><image src="../files/'.$iconFilename.'" width="150" hight="86"></image></a><input type="checkbox" name="chboxId[]" value="'.$id.'"></br>';
			echo '<p>'.$filename.' - Stored at '.$MA.' '.$PT.' '.$CT.' '.$CTLSMS.' '.$CTLSV.'</p>';

		}

		echo '
									<input type="submit" value="Delete">
								</form>
					      	</div>
						</div>
					</body>
				</html>
		';
		
	}

?>