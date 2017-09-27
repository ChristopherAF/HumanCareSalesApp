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
						<a href="index.php">
						<img alt="HumanCare logo" id="#logoOffline" src="images/logo/headerlogo.png">
						</a>
						 <button id="backSelectionBtn" type="button" class="btn btn-success btn-circle btn-offline">Back to selection</button>
				</div>
				<div class="contentDiv">
				<div class="container">
				<div class="row" id="resultContainer" >
							<h3 id="titleResult" class="clearfix">Your selected files for offline</h3>
							
							<?php
							include('config/dbConfig.php');

							$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
							mysqli_set_charset($dbConnected, 'utf8');

							if ($dbConnected) {
								$content_SQLselect = "SELECT * FROM files WHERE active='1' AND offline='1'";
								$content_SQLselect_Query = mysqli_query($dbConnected, $content_SQLselect);

								while ($row = mysqli_fetch_array($content_SQLselect_Query, MYSQLI_ASSOC)) {
									$MA = $row['MA'];
									$PT = $row['PT'];
									$CT = $row['CT'];
									$CTLSMS = $row['CTLSMS'];
									$CTLSV = $row['CTLSV'];
									$filename = $row['filename'];
									$iconFilename = $row['iconFilename'];
									$offline = $row['offline'];
									$id = $row['id'];

									echo '<div class="div-placeholder" name="resultBox" >
									<img id="'.$id.'" src="files/'.$iconFilename.'" ';
									
									echo'/>
									<a href="files/'
									.$filename.'
									"><h3 class="filename">'.$filename.'</h3></a></div>';
								}
							}

							?>
						</div><!-- end row -->
					</div> <!-- end container-->
					</div> <!-- end contentDiv--> 
					<script  type="text/javascript" src="contentHandler.js"></script>
					</body>
				</html>
