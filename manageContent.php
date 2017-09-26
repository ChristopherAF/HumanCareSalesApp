<?php

	include('config/dbConfig.php');
	$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
	mysqli_set_charset($dbConnected, 'utf8');

	if ($dbConnected) {

?>
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
			<script type="text/javascript" src="config/manageContentScript.js"></script>
			<link rel="stylesheet" href="css/main.css" type="text/css"/>
		</head>
		<body>
			<div class="container">
				<div>
					<img src="images/logo/headerlogo.png">
				</div>
				<div class="contentDiv" id="admin">
					<div class="form-group">
					<h3>Choose which files you would like to delete:</h3></div>

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
	  								No file choosen.
								</div>
							';
						}
						include('navigation.php');
					?>

				<form id="deleteForm" name="deleteFunction" action="deleteFunction.php" method="post" >

				<div id="USheading">
					<h3 onclick="show('UScontent')">United States</h3>
					<div id="UScontent" style="display:none">

						<h3 onclick="show('USMA')">- Mobility Aids</h3>
						<div id="USMA" style="display:none">
							<h3 onclick="show('USMAP')">-- Presentations</h3>
							<div id="USMAP" style="display:none">
								<?php content('US', 'MA', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('USMAMS')">-- Market &amp; Sales Material</h3>
							<div id="USMAMS" style="display:none">
								<?php content('US', 'MA', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('USMAV')">-- Videos</h3>
							<div id="USMAV" style="display:none">
								<?php content('US', 'MA', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('USMAPL')">-- Pricelists / Local Content</h3>
							<div id="USMAPL" style="display:none">
								<?php content('US', 'MA', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('USLS')">- Lifting Solutions</h3>
						<div id="USLS" style="display:none">
							<h3 onclick="show('USLSP')">-- Presentations</h3>
							<div id="USLSP" style="display:none">
								<?php content('US', 'LS', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('USLSMS')">-- Market &amp; Sales Material</h3>
							<div id="USLSMS" style="display:none">
								<h3 onclick="show('USLSMSQRG')">--- Quick Reference Guides</h3>
								<div id="USLSMSQRG" style="display:none">
									<?php content('US', 'LS', 'MS', 'QRG', ''); ?>
								</div>
								<h3 onclick="show('USLSMSMM')">--- Marketing Material</h3>
								<div id="USLSMSMM" style="display:none">
									<?php content('US', 'LS', 'MS', 'MM', ''); ?>
								</div>
							</div>
							<h3 onclick="show('USLSV')">-- Videos</h3>
							<div id="USLSV" style="display:none">
								<h3 onclick="show('USLSVPV')">--- Product Videos</h3>
								<div id="USLSVPV" style="display:none">
									<?php content('US', 'LS', 'V', '', 'PV'); ?>
								</div>
								<h3 onclick="show('USLSVTV')">--- Technical Videos</h3>
								<div id="USLSVTV" style="display:none">
									<?php content('US', 'LS', 'V', '', 'TV'); ?>
								</div>
								<h3 onclick="show('USLSVSTV')">--- Sales Training Videos</h3>
								<div id="USLSVSTV" style="display:none">
									<?php content('US', 'LS', 'V', '', 'STV'); ?>
								</div>
							</div>
							<h3 onclick="show('USLSPL')">-- Pricelists / Local Content</h3>
							<div id="USLSPL" style="display:none">
								<?php content('US', 'LS', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('USHB')">- Healthcare Beds</h3>
						<div id="USHB" style="display:none">
							<h3 onclick="show('USHBP')">-- Presentations</h3>
							<div id="USHBP" style="display:none">
								<?php content('US', 'HB', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('USHBMS')">-- Market &amp; Sales Material</h3>
							<div id="USHBMS" style="display:none">
								<?php content('US', 'HB', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('USHBV')">-- Videos</h3>
							<div id="USHBV" style="display:none">
								<?php content('US', 'HB', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('USHBPL')">-- Pricelists / Local Content</h3>
							<div id="USHBPL" style="display:none">
								<?php content('US', 'HB', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('USCC')">- Convertible Chairs</h3>
						<div id="USCC" style="display:none">
							<h3 onclick="show('USCCP')">-- Presentations</h3>
							<div id="USCCP" style="display:none">
								<?php content('US', 'CC', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('USCCMS')">-- Market &amp; Sales Material</h3>
							<div id="USCCMS" style="display:none">
								<?php content('US', 'CC', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('USCCV')">-- Videos</h3>
							<div id="USCCV" style="display:none">
								<?php content('US', 'CC', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('USCCPL')">-- Pricelists / Local Content</h3>
							<div id="USCCPL" style="display:none">
								<?php content('US', 'CC', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('USC')">- Corporate</h3>
						<div id="USC" style="display:none">
							<?php content('US', 'C', '', '', ''); ?>
						</div>

					</div>
				</div>

				<div id="NLheading">
					<h3 onclick="show('NLcontent')">Netherlands</h3>
					<div id="NLcontent" style="display:none">

						<h3 onclick="show('NLMA')">- Mobility Aids</h3>
						<div id="NLMA" style="display:none">
							<h3 onclick="show('NLMAP')">-- Presentations</h3>
							<div id="NLMAP" style="display:none">
								<?php content('NL', 'MA', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('NLMAMS')">-- Market &amp; Sales Material</h3>
							<div id="NLMAMS" style="display:none">
								<?php content('NL', 'MA', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('NLMAV')">-- Videos</h3>
							<div id="NLMAV" style="display:none">
								<?php content('NL', 'MA', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('NLMAPL')">-- Pricelists / Local Content</h3>
							<div id="NLMAPL" style="display:none">
								<?php content('NL', 'MA', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('NLLS')">- Lifting Solutions</h3>
						<div id="NLLS" style="display:none">
							<h3 onclick="show('NLLSP')">-- Presentations</h3>
							<div id="NLLSP" style="display:none">
								<?php content('NL', 'LS', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('NLLSMS')">-- Market &amp; Sales Material</h3>
							<div id="NLLSMS" style="display:none">
								<h3 onclick="show('NLLSMSQRG')">--- Quick Reference Guides</h3>
								<div id="NLLSMSQRG" style="display:none">
									<?php content('NL', 'LS', 'MS', 'QRG', ''); ?>
								</div>
								<h3 onclick="show('NLLSMSMM')">--- Marketing Material</h3>
								<div id="NLLSMSMM" style="display:none">
									<?php content('NL', 'LS', 'MS', 'MM', ''); ?>
								</div>
							</div>
							<h3 onclick="show('NLLSV')">-- Videos</h3>
							<div id="NLLSV" style="display:none">
								<h3 onclick="show('NLLSVPV')">--- Product Videos</h3>
								<div id="NLLSVPV" style="display:none">
									<?php content('NL', 'LS', 'V', '', 'PV'); ?>
								</div>
								<h3 onclick="show('NLLSVTV')">--- Technical Videos</h3>
								<div id="NLLSVTV" style="display:none">
									<?php content('NL', 'LS', 'V', '', 'TV'); ?>
								</div>
								<h3 onclick="show('NLLSVSTV')">--- Sales Training Videos</h3>
								<div id="NLLSVSTV" style="display:none">
									<?php content('NL', 'LS', 'V', '', 'STV'); ?>
								</div>
							</div>
							<h3 onclick="show('NLLSPL')">-- Pricelists / Local Content</h3>
							<div id="NLLSPL" style="display:none">
								<?php content('NL', 'LS', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('NLHB')">- Healthcare Beds</h3>
						<div id="NLHB" style="display:none">
							<h3 onclick="show('NLHBP')">-- Presentations</h3>
							<div id="NLHBP" style="display:none">
								<?php content('NL', 'HB', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('NLHBMS')">-- Market &amp; Sales Material</h3>
							<div id="NLHBMS" style="display:none">
								<?php content('NL', 'HB', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('NLHBV')">-- Videos</h3>
							<div id="NLHBV" style="display:none">
								<?php content('NL', 'HB', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('NLHBPL')">-- Pricelists / Local Content</h3>
							<div id="NLHBPL" style="display:none">
								<?php content('NL', 'HB', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('NLCC')">- Convertible Chairs</h3>
						<div id="NLCC" style="display:none">
							<h3 onclick="show('NLCCP')">-- Presentations</h3>
							<div id="NLCCP" style="display:none">
								<?php content('NL', 'CC', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('NLCCMS')">-- Market &amp; Sales Material</h3>
							<div id="NLCCMS" style="display:none">
								<?php content('NL', 'CC', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('NLCCV')">-- Videos</h3>
							<div id="NLCCV" style="display:none">
								<?php content('NL', 'CC', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('NLCCPL')">-- Pricelists / Local Content</h3>
							<div id="NLCCPL" style="display:none">
								<?php content('NL', 'CC', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('NLBS')">- Bathroom Safety</h3>
						<div id="NLBS" style="display:none">
							<h3 onclick="show('NLBSMS')">-- Market &amp; Sales Material</h3>
							<div id="NLBSMS" style="display:none">
								<?php content('NL', 'BS', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('NLBSPL')">-- Pricelists / Local Content</h3>
							<div id="NLBSPL" style="display:none">
								<?php content('NL', 'BS', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('NLC')">- Corporate</h3>
						<div id="NLC" style="display:none">
							<?php content('NL', 'C', '', '', ''); ?>
						</div>

					</div>
				</div>

				<div id="SEheading">
					<h3 onclick="show('SEcontent')">Sweden</h3>
					<div id="SEcontent" style="display:none">

						<h3 onclick="show('SEMA')">- Mobility Aids</h3>
						<div id="SEMA" style="display:none">
							<h3 onclick="show('SEMAP')">-- Presentations</h3>
							<div id="SEMAP" style="display:none">
								<?php content('SE', 'MA', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('SEMAMS')">-- Market &amp; Sales Material</h3>
							<div id="SEMAMS" style="display:none">
								<?php content('SE', 'MA', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('SEMAV')">-- Videos</h3>
							<div id="SEMAV" style="display:none">
								<?php content('SE', 'MA', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('SEMAPL')">-- Pricelists / Local Content</h3>
							<div id="SEMAPL" style="display:none">
								<?php content('SE', 'MA', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('SELS')">- Lifting Solutions</h3>
						<div id="SELS" style="display:none">
							<h3 onclick="show('SELSP')">-- Presentations</h3>
							<div id="SELSP" style="display:none">
								<?php content('SE', 'LS', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('SELSMS')">-- Market &amp; Sales Material</h3>
							<div id="SELSMS" style="display:none">
								<h3 onclick="show('SELSMSQRG')">--- Quick Reference Guides</h3>
								<div id="SELSMSQRG" style="display:none">
									<?php content('SE', 'LS', 'MS', 'QRG', ''); ?>
								</div>
								<h3 onclick="show('SELSMSMM')">--- Marketing Material</h3>
								<div id="SELSMSMM" style="display:none">
									<?php content('SE', 'LS', 'MS', 'MM', ''); ?>
								</div>
							</div>
							<h3 onclick="show('SELSV')">-- Videos</h3>
							<div id="SELSV" style="display:none">
								<h3 onclick="show('SELSVPV')">--- Product Videos</h3>
								<div id="SELSVPV" style="display:none">
									<?php content('SE', 'LS', 'V', '', 'PV'); ?>
								</div>
								<h3 onclick="show('SELSVTV')">--- Technical Videos</h3>
								<div id="SELSVTV" style="display:none">
									<?php content('SE', 'LS', 'V', '', 'TV'); ?>
								</div>
								<h3 onclick="show('SELSVSTV')">--- Sales Training Videos</h3>
								<div id="SELSVSTV" style="display:none">
									<?php content('SE', 'LS', 'V', '', 'TV'); ?>
								</div>
							</div>
							<h3 onclick="show('SELSPL')">-- Pricelists / Local Content</h3>
							<div id="SELSPL" style="display:none">
								<?php content('SE', 'LS', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('SEHB')">- Healthcare Beds</h3>
						<div id="SEHB" style="display:none">
							<h3 onclick="show('SEHBP')">-- Presentations</h3>
							<div id="SEHBP" style="display:none">
								<?php content('SE', 'HB', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('SEHBMS')">-- Market &amp; Sales Material</h3>
							<div id="SEHBMS" style="display:none">
								<?php content('SE', 'HB', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('SEHBV')">-- Videos</h3>
							<div id="SEHBV" style="display:none">
								<?php content('SE', 'HB', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('SEHBPL')">-- Pricelists / Local Content</h3>
							<div id="SEHBPL" style="display:none">
								<?php content('SE', 'HB', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('SECC')">- Convertible Chairs</h3>
						<div id="SECC" style="display:none">
							<h3 onclick="show('SECCP')">-- Presentations</h3>
							<div id="SECCP" style="display:none">
								<?php content('SE', 'CC', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('SECCMS')">-- Market &amp; Sales Material</h3>
							<div id="SECCMS" style="display:none">
								<?php content('SE', 'CC', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('SECCV')">-- Videos</h3>
							<div id="SECCV" style="display:none">
								<?php content('SE', 'CC', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('SECCPL')">-- Pricelists / Local Content</h3>
							<div id="SECCPL" style="display:none">
								<?php content('SE', 'CC', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('SEC')">- Corporate</h3>
						<div id="SEC" style="display:none">
							<?php content('SE', 'C', '', '', ''); ?>
						</div>

					</div>
				</div>

				<div id="CAheading">
					<h3 onclick="show('CAcontent')">Canada</h3>
					<div id="CAcontent" style="display:none">

						<h3 onclick="show('CAMA')">- Mobility Aids</h3>
						<div id="CAMA" style="display:none">
							<h3 onclick="show('CAMAP')">-- Presentations</h3>
							<div id="CAMAP" style="display:none">
								<?php content('CA', 'MA', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('CAMAMS')">-- Market &amp; Sales Material</h3>
							<div id="CAMAMS" style="display:none">
								<?php content('CA', 'MA', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('CAMAV')">-- Videos</h3>
							<div id="CAMAV" style="display:none">
								<?php content('CA', 'MA', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('CAMAPL')">-- Pricelists / Local Content</h3>
							<div id="CAMAPL" style="display:none">
								<?php content('CA', 'MA', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('CALS')">- Lifting Solutions</h3>
						<div id="CALS" style="display:none">
							<h3 onclick="show('CALSP')">-- Presentations</h3>
							<div id="CALSP" style="display:none">
								<?php content('CA', 'LS', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('CALSMS')">-- Market &amp; Sales Material</h3>
							<div id="CALSMS" style="display:none">
								<h3 onclick="show('CALSMSQRG')">--- Quick Reference Guides</h3>
								<div id="CALSMSQRG" style="display:none">
									<?php content('CA', 'LS', 'MS', 'QRG', ''); ?>
								</div>
								<h3 onclick="show('CALSMSMM')">--- Marketing Material</h3>
								<div id="CALSMSMM" style="display:none">
									<?php content('CA', 'LS', 'MS', 'MM', ''); ?>
								</div>
							</div>
							<h3 onclick="show('CALSV')">-- Videos</h3>
							<div id="CALSV" style="display:none">
								<h3 onclick="show('CALSVPV')">--- Product Videos</h3>
								<div id="CALSVPV" style="display:none">
									<?php content('CA', 'LS', 'V', '', 'PV'); ?>
								</div>
								<h3 onclick="show('CALSVTV')">--- Technical Videos</h3>
								<div id="CALSVTV" style="display:none">
									<?php content('CA', 'LS', 'V', '', 'TV'); ?>
								</div>
								<h3 onclick="show('CALSVSTV')">--- Sales Training Videos</h3>
								<div id="CALSVSTV" style="display:none">
									<?php content('CA', 'LS', 'V', '', 'STV'); ?>
								</div>
							</div>
							<h3 onclick="show('CALSPL')">-- Pricelists / Local Content</h3>
							<div id="CALSPL" style="display:none">
								<?php content('CA', 'LS', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('CAHB')">- Healthcare Beds</h3>
						<div id="CAHB" style="display:none">
							<h3 onclick="show('CAHBP')">-- Presentations</h3>
							<div id="CAHBP" style="display:none">
								<?php content('CA', 'HB', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('CAHBMS')">-- Market &amp; Sales Material</h3>
							<div id="CAHBMS" style="display:none">
								<?php content('CA', 'HB', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('CAHBV')">-- Videos</h3>
							<div id="CAHBV" style="display:none">
								<?php content('CA', 'HB', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('CAHBPL')">-- Pricelists / Local Content</h3>
							<div id="CAHBPL" style="display:none">
								<?php content('CA', 'HB', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('CACC')">- Convertible Chairs</h3>
						<div id="CACC" style="display:none">
							<h3 onclick="show('CACCP')">-- Presentations</h3>
							<div id="CACCP" style="display:none">
								<?php content('CA', 'CC', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('CACCMS')">-- Market &amp; Sales Material</h3>
							<div id="CACCMS" style="display:none">
								<?php content('CA', 'CC', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('CACCV')">-- Videos</h3>
							<div id="CACCV" style="display:none">
								<?php content('CA', 'CC', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('CACCPL')">-- Pricelists / Local Content</h3>
							<div id="CACCPL" style="display:none">
								<?php content('CA', 'CC', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('CABS')">- Bathroom Safety</h3>
						<div id="CABS" style="display:none">
							<h3 onclick="show('CABSMS')">-- Market &amp; Sales Material</h3>
							<div id="CABSMS" style="display:none">
								<?php content('CA', 'BS', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('CABSPL')">-- Pricelists / Local Content</h3>
							<div id="CABSPL" style="display:none">
								<?php content('CA', 'BS', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('CAC')">- Corporate</h3>
						<div id="CAC" style="display:none">
							<?php content('CA', 'C', '', '', ''); ?>
						</div>

					</div>
				</div>
				
				<div id="AUheading">
					<h3 onclick="show('AUcontent')">Australia</h3>
					<div id="AUcontent" style="display:none">

						<h3 onclick="show('AUMA')">- Mobility Aids</h3>
						<div id="AUMA" style="display:none">
							<h3 onclick="show('AUMAP')">-- Presentations</h3>
							<div id="AUMAP" style="display:none">
								<?php content('AU', 'MA', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('AUMAMS')">-- Market &amp; Sales Material</h3>
							<div id="AUMAMS" style="display:none">
								<?php content('AU', 'MA', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('AUMAV')">-- Videos</h3>
							<div id="AUMAV" style="display:none">
								<?php content('AU', 'MA', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('AUMAPL')">-- Pricelists / Local Content</h3>
							<div id="AUMAPL" style="display:none">
								<?php content('AU', 'MA', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('AULS')">- Lifting Solutions</h3>
						<div id="AULS" style="display:none">
							<h3 onclick="show('AULSP')">-- Presentations</h3>
							<div id="AULSP" style="display:none">
								<?php content('AU', 'LS', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('AULSMS')">-- Market &amp; Sales Material</h3>
							<div id="AULSMS" style="display:none">
								<h3 onclick="show('AULSMSQRG')">--- Quick Reference Guides</h3>
								<div id="AULSMSQRG" style="display:none">
									<?php content('AU', 'LS', 'MS', 'QRG', ''); ?>
								</div>
								<h3 onclick="show('AULSMSMM')">--- Marketing Material</h3>
								<div id="AULSMSMM" style="display:none">
									<?php content('AU', 'LS', 'MS', 'MM', ''); ?>
								</div>
							</div>
							<h3 onclick="show('AULSV')">-- Videos</h3>
							<div id="AULSV" style="display:none">
								<h3 onclick="show('AULSVPV')">--- Product Videos</h3>
								<div id="AULSVPV" style="display:none">
									<?php content('AU', 'LS', 'V', '', 'PV'); ?>
								</div>
								<h3 onclick="show('AULSVTV')">--- Technical Videos</h3>
								<div id="AULSVTV" style="display:none">
									<?php content('AU', 'LS', 'V', '', 'TV'); ?>
								</div>
								<h3 onclick="show('AULSVSTV')">--- Sales Training Videos</h3>
								<div id="AULSVSTV" style="display:none">
									<?php content('AU', 'LS', 'V', '', 'STV'); ?>
								</div>
							</div>
							<h3 onclick="show('AULSPL')">-- Pricelists / Local Content</h3>
							<div id="AULSPL" style="display:none">
								<?php content('AU', 'LS', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('AUHB')">- Healthcare Beds</h3>
						<div id="AUHB" style="display:none">
							<h3 onclick="show('AUHBP')">-- Presentations</h3>
							<div id="AUHBP" style="display:none">
								<?php content('AU', 'HB', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('AUHBMS')">-- Market &amp; Sales Material</h3>
							<div id="AUHBMS" style="display:none">
								<?php content('AU', 'HB', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('AUHBV')">-- Videos</h3>
							<div id="AUHBV" style="display:none">
								<?php content('AU', 'HB', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('AUHBPL')">-- Pricelists / Local Content</h3>
							<div id="AUHBPL" style="display:none">
								<?php content('AU', 'HB', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('AUCC')">- Convertible Chairs</h3>
						<div id="AUCC" style="display:none">
							<h3 onclick="show('AUCCP')">-- Presentations</h3>
							<div id="AUCCP" style="display:none">
								<?php content('AU', 'CC', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('AUCCMS')">-- Market &amp; Sales Material</h3>
							<div id="AUCCMS" style="display:none">
								<?php content('AU', 'CC', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('AUCCV')">-- Videos</h3>
							<div id="AUCCV" style="display:none">
								<?php content('AU', 'CC', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('AUCCPL')">-- Pricelists / Local Content</h3>
							<div id="AUCCPL" style="display:none">
								<?php content('AU', 'CC', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('AUC')">- Corporate</h3>
						<div id="AUC" style="display:none">
							<?php content('AU', 'C', '', '', ''); ?>
						</div>

					</div>
				</div>
				
				<div id="OMheading">
					<h3 onclick="show('OMcontent')">Other Markets</h3>
					<div id="OMcontent" style="display:none">

						<h3 onclick="show('OMMA')">- Mobility Aids</h3>
						<div id="OMMA" style="display:none">
							<h3 onclick="show('OMMAP')">-- Presentations</h3>
							<div id="OMMAP" style="display:none">
								<?php content('OM', 'MA', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('OMMAMS')">-- Market &amp; Sales Material</h3>
							<div id="OMMAMS" style="display:none">
								<?php content('OM', 'MA', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('OMMAV')">-- Videos</h3>
							<div id="OMMAV" style="display:none">
								<?php content('OM', 'MA', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('OMMAPL')">-- Pricelists / Local Content</h3>
							<div id="OMMAPL" style="display:none">
								<?php content('OM', 'MA', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('OMLS')">- Lifting Solutions</h3>
						<div id="OMLS" style="display:none">
							<h3 onclick="show('OMLSP')">-- Presentations</h3>
							<div id="OMLSP" style="display:none">
								<?php content('OM', 'LS', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('OMLSMS')">-- Market &amp; Sales Material</h3>
							<div id="OMLSMS" style="display:none">
								<h3 onclick="show('OMLSMSQRG')">--- Quick Reference Guides</h3>
								<div id="OMLSMSQRG" style="display:none">
									<?php content('OM', 'LS', 'MS', '', 'QRG'); ?>
								</div>
								<h3 onclick="show('OMLSMSMM')">--- Marketing Material</h3>
								<div id="OMLSMSMM" style="display:none">
									<?php content('OM', 'LS', 'MS', '', 'MM'); ?>
								</div>
							</div>
							<h3 onclick="show('OMLSV')">-- Videos</h3>
							<div id="OMLSV" style="display:none">
								<h3 onclick="show('OMLSVPV')">--- Product Videos</h3>
								<div id="OMLSVPV" style="display:none">
									<?php content('OM', 'LS', 'V', '', 'PV'); ?>
								</div>
								<h3 onclick="show('OMLSVTV')">--- Technical Videos</h3>
								<div id="OMLSVTV" style="display:none">
									<?php content('OM', 'LS', 'V', '', 'TV'); ?>
								</div>
								<h3 onclick="show('OMLSVSTV')">--- Sales Training Videos</h3>
								<div id="OMLSVSTV" style="display:none">
									<?php content('OM', 'LS', 'V', '', 'STV'); ?>
								</div>
							</div>
							<h3 onclick="show('OMLSPL')">-- Pricelists / Local Content</h3>
							<div id="OMLSPL" style="display:none">
								<?php content('OM', 'LS', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('OMHB')">- Healthcare Beds</h3>
						<div id="OMHB" style="display:none">
							<h3 onclick="show('OMHBP')">-- Presentations</h3>
							<div id="OMHBP" style="display:none">
								<?php content('OM', 'HB', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('OMHBMS')">-- Market &amp; Sales Material</h3>
							<div id="OMHBMS" style="display:none">
								<?php content('OM', 'HB', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('OMHBV')">-- Videos</h3>
							<div id="OMHBV" style="display:none">
								<?php content('OM', 'HB', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('OMHBPL')">-- Pricelists / Local Content</h3>
							<div id="OMHBPL" style="display:none">
								<?php content('OM', 'HB', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('OMCC')">- Convertible Chairs</h3>
						<div id="OMCC" style="display:none">
							<h3 onclick="show('OMCCP')">-- Presentations</h3>
							<div id="OMCCP" style="display:none">
								<?php content('OM', 'CC', 'P', '', ''); ?>
							</div>
							<h3 onclick="show('OMCCMS')">-- Market &amp; Sales Material</h3>
							<div id="OMCCMS" style="display:none">
								<?php content('OM', 'CC', 'MS', '', ''); ?>
							</div>
							<h3 onclick="show('OMCCV')">-- Videos</h3>
							<div id="OMCCV" style="display:none">
								<?php content('OM', 'CC', 'V', '', ''); ?>
							</div>
							<h3 onclick="show('OMCCPL')">-- Pricelists / Local Content</h3>
							<div id="OMCCPL" style="display:none">
								<?php content('OM', 'CC', 'PL', '', ''); ?>
							</div>
						</div>

						<h3 onclick="show('OMC')">- Corporate</h3>
						<div id="OMC" style="display:none">
							<?php content('OM', 'C', '', '', ''); ?>
						</div>

					</div>
				</div>

				<?php } ?>

				<div class="btn-holder">
					<input type="submit" value="Delete" class="btn  submit-style btn-danger" id="btn-submit">
				</div>	
				</form>
	      	</div>
		</div>
	</body>
</html>
<script  type="text/javascript" src="handleNavigation.js"></script>

<?php
	function content($MA, $PT, $CT, $CTLSMS, $CTLSV) {
		global $dbConnected;
			if ($CTLSMS == '' && $CTLSV == '') {
				$content_SQLselect_Query = mysqli_query($dbConnected, "SELECT * FROM files WHERE MA='".$MA."' AND PT='".$PT."' AND CT='".$CT."' AND active='1'");
			} else if ($CTLSMS != '' && $CTLSV == '') {
				$content_SQLselect_Query = mysqli_query($dbConnected, "SELECT * FROM files WHERE MA='".$MA."' AND PT='".$PT."' AND CT='".$CT."' AND CTLSMS='".$CTLSMS."' AND active='1'");
			} else if ($CTLSMS == '' && $CTLSV != '') {
				$content_SQLselect_Query = mysqli_query($dbConnected, "SELECT * FROM files WHERE MA='".$MA."' AND PT='".$PT."' AND CT='".$CT."' AND CTLSV='".$CTLSV."' AND active='1'");
			}
			
			$contentFound = 0;
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
					<input type="checkbox" name="chboxId[]" value="'.$id.'">
					<a href="files/'.$filename.'">
						<image class="delete-img" src="files/'.$iconFilename.'" ></image>
					</a>
					<p class="align-left">'.$filename.'</p>
					';
				$contentFound = 1;
			}
			if ($contentFound == 0) {
				echo "<p>No content to show</p>";
			}
}
?>