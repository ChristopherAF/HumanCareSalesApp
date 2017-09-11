<?php
	
	$market = @$_GET['market'];
	$productType = @$_GET['productType'];
	$contentType = @$_GET['contentType'];
	$contentTypeLS = @$_GET['contentTypeLS'];

	include('config/dbConfig.php');
	$dbSuccess = false;
	$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
	mysqli_set_charset($dbConnected, 'utf8');

	if($dbConnected) {

		$content_SQLselect = "SELECT * FROM files WHERE MA='".$market."' AND PT='".$productType."' AND CT='".$contentType."' AND active=1";
		$content_SQLselect_Query = mysqli_query($dbConnected, $content_SQLselect);

		while ($row = mysqli_fetch_array($content_SQLselect_Query, MYSQLI_ASSOC)) {
			$MA = $row['MA'];
			$PT = $row['PT'];
			$CT = $row['CT'];
			$filename = $row['filename'];
			$iconFilename = $row['iconFilename'];

			echo '
				<a href="files/'.$filename.'"><img src="files/'.$iconFilename.'"/></a>
			';
		}

	}

?>