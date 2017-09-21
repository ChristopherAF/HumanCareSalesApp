<?php

	include('config/dbConfig.php');
	$dbSuccess = false;
	$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
	mysqli_set_charset($dbConnected, 'utf8');

	if($dbConnected) {
		$content_SQLselect = "SELECT * FROM files WHERE active='1'";
		$content_SQLselect_Query = mysqli_query($dbConnected, $content_SQLselect);

		echo '
			<!DOCTYPE html>
				<html>
					<head>
						<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
						<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
						<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
						<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
						<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
						<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
						<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
						<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
						<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
						<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
						<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
						<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
						<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
						<link rel="manifest" href="favicon/manifest.json">
						<meta name="msapplication-TileColor" content="#ffffff">
						<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
						<meta name="theme-color" content="#ffffff">

						<title>Human Care Sales App</title>
						<meta charset="utf-8">
						<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />	
						<script type="text/javascript" src="config/jquery.min.js"></script>
						<script type="text/javascript" src="config/bootstrap.js"></script>
						<link rel="stylesheet" href="css/main.css" type="text/css"/>
					</head>
					<body>
						<div class="container">
							<div>
								<img src="images/logo/headerlogo.png">
							</div>
							<div class="contentDiv" id="admin">';
							include('navigation.php');
							echo '	
								<div class="form-group">
								<h3>Choose which files you would like to delete:</h3></div>

								';

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
			  								No file choosen.
										</div>
									';
								}
							echo '
								<form id="deleteForm" name="deleteFunction" action="deleteFunction.php" method="post" >
								<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover">
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

			echo '
			<tr>
				<td class="check-box-manage">
				<input type="checkbox" name="chboxId[]" value="'.$id.'">
				</td>
				<td>
				<a href="../files/'.$filename.'">
				<image class="delete-img" src="files/'.$iconFilename.'" ></image>
				</a>
				</td>
				';
			echo '<td class="align-left">'.$filename.' - Stored at '.$MA.' '.$PT.' '.$CT.' '.$CTLSMS.' '.$CTLSV.'</td>
			</tr>';

		}

		echo '</table></div>
								<div class="btn-holder">
									<input type="submit" value="Delete" class="btn  submit-style btn-danger" id="btn-submit">
								</div>	
								</form>
					      	</div>
						</div>
					</body>
				</html>
				<script  type="text/javascript" src="handleNavigation.js"></script>
				<script >
					// Check file is selected before POST form
					$( document ).ready(function() {
						$(".alert-success").hide();
						$(".alert-danger").hide();

						$("#deleteForm").on("submit",function() { 
   						if ($("#deleteForm input:checkbox:checked").length > 0)
							{
								$(".alert-danger").hide();
								$(".alert-success").show();
								return true;
							}
							else
							{
   							// none is checked
								$(".alert-success").hide();
								$(".alert-danger").show();
   								alert("No file selected.");
   								return false;
							}	
					});		
				});
				</script>
		';
		
	}

?>