<?php
include('config/dbConfig.php'); 
$dbSuccess = false;
$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);

if ($dbConnected) {		
	$dbSelected = mysqli_select_db($dbConnected,$db['database']);
	if ($dbSelected) {
		$dbSuccess = true;
	} 	
}

if($dbSuccess) {
	include_once('logInAndOut/authorise.php');

	$loginAuthorised = (@$_COOKIE["loginAuthorised"] == "34f326defb43f22a4fef8af2a25fa331");
	$admin = (@$_COOKIE["admin"] == "70e90320def2267590e4bef4f682eb3e");

	if($loginAuthorised) {

?>

<!DOCTYPE html>
				<html>
			<head>
				<meta charset="utf-8">
				<link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-icon-57x57.png">
				<link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicon/apple-icon-60x60.png">
				<link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-icon-72x72.png">
				<link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicon/apple-icon-76x76.png">
				<link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-icon-114x114.png">
				<link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-icon-120x120.png">
				<link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon/apple-icon-144x144.png">
				<link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-icon-152x152.png">
				<link rel="apple-touch-icon-precomposed" sizes="180x180" href="favicon/apple-icon-180x180.png">
				<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
				<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
				<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
				<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
				<link rel="manifest" href="favicon/manifest.json">
				<meta name="msapplication-TileColor" content="#ffffff">
				<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
				<meta name="theme-color" content="#ffffff">

				<title>Human Care Sales App offline list</title>
				
				<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
				<link rel="stylesheet" href="css/main.css" type="text/css" />
				<script type="text/javascript" src="config/jquery.min.js"></script>
				<script type="text/javascript" src="config/bootstrap.js"></script>
				<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimal-ui">
				<meta name="apple-mobile-web-app-capable" content="yes">  <!-- ANDROID -->
				<meta name="apple-touch-fullscreen" content="yes"><!-- iOS -->
				<meta name="apple-mobile-web-app-status-bar-style" content="black">
			</head>
					<body>
				<div class="topDiv">
						 <button id="backSelectionBtn" type="button" class="btn btn-success btn-circle btn-offline">Homepage</button>

						 <button id="removeAllBtn" type="button" class="btn btn-danger btn-circle btn-offline">Remove all</button>
				</div>
				<div class="contentDiv">
				<div class="container">
				<div class="row" id="resultContainer" >
							<h3 id="titleResult" class="clearfix">Your selected files for offline</h3>
							
							<?php
								if (@$_GET['deleted'] == '1') {
								echo '
								<div class="alert alert-success" role="alert">
										File(s) deleted.
									</div>
								';
							} else if (@$_GET['deleted'] == '0') {
							echo '
								<div class="alert alert-danger" role="alert">
	  								<span class="sr-only">Error:</span>
	  								Error: No file deleted.
								</div>
							';
							}

							$userid = @$_COOKIE['userID'];
							include('config/dbConfig.php');

							$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
							mysqli_set_charset($dbConnected, 'utf8');

							if ($dbConnected) {
								/*
								$content_SQLselect = "SELECT * FROM offline WHERE userid='".$userid."'";
								*/
								$content_SQLselect = "SELECT files.* FROM files JOIN offline ON files.id = offline.fileid WHERE files.active = '1' AND offline.userid='".$userid."'";
								$content_SQLselect_Query = mysqli_query($dbConnected, $content_SQLselect);

								while ($row = mysqli_fetch_array($content_SQLselect_Query, MYSQLI_ASSOC)) {
									$filename = $row['filename'];
									$iconFilename = $row['iconFilename'];
									$id = $row['id'];

									echo '<div class="div-placeholder" name="resultBox" >
									<div class="crop">
									<img id="'.$id.'" src="files/'.$iconFilename.'" ';
									
									echo'/>
									</div>
									<a href="files/'
									.$filename.'
									"><h3 class="filename">'.$filename.'</h3></a>
									</div>';
								}
							}

							?>
						</div><!-- end row -->
					</div> <!-- end container-->
					</div> <!-- end contentDiv--> 
					<script  type="text/javascript" src="offlineHandler.js"></script>
					</body>
				</html>
<?php

	} else {	
			header("Location: logInAndOut/loginForm.php");
	}		
}
?>