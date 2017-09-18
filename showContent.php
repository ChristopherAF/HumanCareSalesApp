<?php
	
	$market = @$_POST['market'];
	$productType = @$_POST['productType'];
	$contentType = @$_POST['contentType'];
	$contentTypeLS = @$_POST['contentTypeLS'];
	
	include('config/dbConfig.php');
	$dbSuccess = false;
	$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
	mysqli_set_charset($dbConnected, 'utf8');

	if ($dbConnected) {

		if ($productType == "C") {
			$content_SQLselect = "SELECT * FROM files WHERE MA='".$market."' AND PT='".$productType."' AND active=1";
		} else if (($contentTypeLS == "QRG") || ($contentTypeLS == "MM")) {
			$content_SQLselect = "SELECT * FROM files WHERE MA='".$market."' AND PT='".$productType."' AND CT='".$contentType."' AND CTLSMS='".$contentTypeLS."'  AND active=1";
		} else if (($contentTypeLS == "PV") || ($contentTypeLS == "TV") || ($contentTypeLS == "STV")) {
			$content_SQLselect = "SELECT * FROM files WHERE MA='".$market."' AND PT='".$productType."' AND CT='".$contentType."' AND CTLSV='".$contentTypeLS."'  AND active=1";
		} else {
			$content_SQLselect = "SELECT * FROM files WHERE MA='".$market."' AND PT='".$productType."' AND CT='".$contentType."' AND active=1";
		}

		$content_SQLselect_Query = mysqli_query($dbConnected, $content_SQLselect);

		while ($row = mysqli_fetch_array($content_SQLselect_Query, MYSQLI_ASSOC)) {
			$MA = $row['MA'];
			$PT = $row['PT'];
			$CT = $row['CT'];
			$CTLSMS = $row['CTLSMS'];
			$CTLSV = $row['CTLSV'];
			$filename = $row['filename'];
			$iconFilename = $row['iconFilename'];

			echo '<div class="div-placeholder">	
					<a href="files/'.$filename.'">
  					<img src="files/'.$iconFilename.'" />
  					</a>
				</div>';
		}
	}

?>