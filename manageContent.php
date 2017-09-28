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

				<form id="deleteForm" name="deleteFunction" action="deleteFunction.php" method="post" class="manageDiv">

				<div id="USheading">
					<h3 onclick="show('UScontent')" class="box">United States</h3>
					<div id="UScontent" style="display:none">

						<h4 onclick="show('USMA')">- Mobility Aids</h4>
						<div id="USMA" style="display:none">
							<h4 onclick="show('USMAP')" class="sub-category">-- Presentations</h4>
							<div id="USMAP" style="display:none" class="media-box">
								<?php content('US', 'MA', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('USMAMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="USMAMS" style="display:none" class="media-box">
								<?php content('US', 'MA', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('USMAV')" class="sub-category">-- Videos</h4>
							<div id="USMAV" style="display:none" class="media-box">
								<?php content('US', 'MA', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('USMAPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="USMAPL" style="display:none" class="media-box">
								<?php content('US', 'MA', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('USLS')">- Lifting Solutions</h4>
						<div id="USLS" style="display:none">
							<h4 onclick="show('USLSP')" class="sub-category">-- Presentations</h4>
							<div id="USLSP" style="display:none" class="media-box">
								<?php content('US', 'LS', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('USLSMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="USLSMS" style="display:none" class="sub-sub-category">
								<h4 onclick="show('USLSMSQRG')" class="sub-sub-category">--- Quick Reference Guides</h4>
								<div id="USLSMSQRG" style="display:none" class="media-box">
									<?php content('US', 'LS', 'MS', 'QRG', ''); ?>
								</div>
								<h4 onclick="show('USLSMSMM')" class="sub-sub-category">--- Marketing Material</h4>
								<div id="USLSMSMM" style="display:none" class="media-box">
									<?php content('US', 'LS', 'MS', 'MM', ''); ?>
								</div>
							</div>
							<h4 onclick="show('USLSV')" class="sub-category">-- Videos</h4>
							<div id="USLSV" style="display:none" class="sub-sub-category">
								<h4 onclick="show('USLSVPV')" class="sub-sub-category">--- Product Videos</h4>
								<div id="USLSVPV" style="display:none" class="media-box">
									<?php content('US', 'LS', 'V', '', 'PV'); ?>
								</div>
								<h4 onclick="show('USLSVTV')" class="sub-sub-category">--- Technical Videos</h4>
								<div id="USLSVTV" style="display:none" class="media-box">
									<?php content('US', 'LS', 'V', '', 'TV'); ?>
								</div>
								<h4 onclick="show('USLSVSTV')" class="sub-sub-category">--- Sales Training Videos</h4>
								<div id="USLSVSTV" style="display:none" class="media-box">
									<?php content('US', 'LS', 'V', '', 'STV'); ?>
								</div>
							</div>
							<h4 onclick="show('USLSPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="USLSPL" style="display:none" class="media-box">
								<?php content('US', 'LS', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('USHB')">- Healthcare Beds</h4>
						<div id="USHB" style="display:none" class="sub-category">
							<h4 onclick="show('USHBP')" class="sub-category">-- Presentations</h4>
							<div id="USHBP" style="display:none" class="media-box">
								<?php content('US', 'HB', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('USHBMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="USHBMS" style="display:none" class="media-box">
								<?php content('US', 'HB', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('USHBV')" class="sub-category">-- Videos</h4>
							<div id="USHBV" style="display:none" class="media-box">
								<?php content('US', 'HB', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('USHBPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="USHBPL" style="display:none" class="media-box">
								<?php content('US', 'HB', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('USCC')">- Convertible Chairs</h4>
						<div id="USCC" style="display:none" class="sub-category">
							<h4 onclick="show('USCCP')" class="sub-category">-- Presentations</h4>
							<div id="USCCP" style="display:none" class="media-box">
								<?php content('US', 'CC', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('USCCMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="USCCMS" style="display:none" class="media-box">
								<?php content('US', 'CC', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('USCCV')" class="sub-category">-- Videos</h4>
							<div id="USCCV" style="display:none" class="media-box">
								<?php content('US', 'CC', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('USCCPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="USCCPL" style="display:none" class="media-box">
								<?php content('US', 'CC', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('USC')">- Corporate</h4>
						<div id="USC" style="display:none" class="media-box">
							<?php content('US', 'C', '', '', ''); ?>
							
						</div>

					</div>
				</div>

				<div id="NLheading">
					<h3 onclick="show('NLcontent')" class="box">Netherlands</h3>
					<div id="NLcontent" style="display:none">

						<h4 onclick="show('NLMA')">- Mobility Aids</h4>
						<div id="NLMA" style="display:none" class="sub-category">
							<h4 onclick="show('NLMAP')" class="sub-category" class="sub-sub-category">-- Presentations</h4>
							<div id="NLMAP" style="display:none" class="media-box">
								<?php content('NL', 'MA', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('NLMAMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="NLMAMS" style="display:none" class="media-box">
								<?php content('NL', 'MA', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('NLMAV')" class="sub-category">-- Videos</h4>
							<div id="NLMAV" style="display:none" class="media-box">
								<?php content('NL', 'MA', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('NLMAPL')" class="sub-category" class="sub-sub-category">-- Pricelists / Local Content</h4>
							<div id="NLMAPL" style="display:none" class="media-box" class="sub-sub-category">
								<?php content('NL', 'MA', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('NLLS')">- Lifting Solutions</h4>
						<div id="NLLS" style="display:none" class="sub-category" class="sub-category">
							<h4 onclick="show('NLLSP')" class="sub-category">-- Presentations</h4>
							<div id="NLLSP" style="display:none" class="media-box">
								<?php content('NL', 'LS', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('NLLSMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="NLLSMS" style="display:none" class="sub-category">
								<h4 onclick="show('NLLSMSQRG')" class="sub-sub-category">--- Quick Reference Guides</h4>
								<div id="NLLSMSQRG" style="display:none" class="media-box">
									<?php content('NL', 'LS', 'MS', 'QRG', ''); ?>
								</div>
								<h4 onclick="show('NLLSMSMM')" class="sub-sub-category">--- Marketing Material</h4>
								<div id="NLLSMSMM" style="display:none" class="media-box">
									<?php content('NL', 'LS', 'MS', 'MM', ''); ?>
								</div>
							</div>
							<h4 onclick="show('NLLSV')" class="sub-category">-- Videos</h4>
							<div id="NLLSV" style="display:none"  class="sub-category">
								<h4 onclick="show('NLLSVPV')" class="sub-sub-category">--- Product Videos</h4>
								<div id="NLLSVPV" style="display:none" class="media-box">
									<?php content('NL', 'LS', 'V', '', 'PV'); ?>
								</div>
								<h4 onclick="show('NLLSVTV')" class="sub-sub-category">--- Technical Videos</h4>
								<div id="NLLSVTV" style="display:none" class="media-box">
									<?php content('NL', 'LS', 'V', '', 'TV'); ?>
								</div>
								<h4 onclick="show('NLLSVSTV')" class="sub-sub-category">--- Sales Training Videos</h4>
								<div id="NLLSVSTV" style="display:none" class="media-box">
									<?php content('NL', 'LS', 'V', '', 'STV'); ?>
								</div>
							</div>
							<h4 onclick="show('NLLSPL')"  class="sub-category">-- Pricelists / Local Content</h4>
							<div id="NLLSPL" style="display:none" class="media-box">
								<?php content('NL', 'LS', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('NLHB')">- Healthcare Beds</h4>
						<div id="NLHB" style="display:none" class="sub-category" class="sub-category">
							<h4 onclick="show('NLHBP')"  class="sub-category">-- Presentations</h4>
							<div id="NLHBP" style="display:none"  class="media-box">
								<?php content('NL', 'HB', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('NLHBMS')"  class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="NLHBMS" style="display:none"  class="media-box">
								<?php content('NL', 'HB', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('NLHBV')"  class="sub-category">-- Videos</h4>
							<div id="NLHBV" style="display:none"  class="media-box">
								<?php content('NL', 'HB', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('NLHBPL')"  class="sub-category">-- Pricelists / Local Content</h4>
							<div id="NLHBPL" style="display:none"  class="media-box">
								<?php content('NL', 'HB', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('NLCC')">- Convertible Chairs</h4>
						<div id="NLCC" style="display:none" class="sub-category"  class="sub-category">
							<h4 onclick="show('NLCCP')"  class="sub-category">-- Presentations</h4>
							<div id="NLCCP" style="display:none" class="media-box">
								<?php content('NL', 'CC', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('NLCCMS')"  class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="NLCCMS" style="display:none" class="media-box">
								<?php content('NL', 'CC', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('NLCCV')"  class="sub-category">-- Videos</h4>
							<div id="NLCCV" style="display:none" class="media-box">
								<?php content('NL', 'CC', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('NLCCPL')"  class="sub-category">-- Pricelists / Local Content</h4>
							<div id="NLCCPL" style="display:none" class="media-box">
								<?php content('NL', 'CC', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('NLBS')">- Bathroom Safety</h4>
						<div id="NLBS" style="display:none" class="sub-category">
							<h4 onclick="show('NLBSMS')"  class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="NLBSMS" style="display:none" class="media-box">
								<?php content('NL', 'BS', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('NLBSPL')"  class="sub-category">-- Pricelists / Local Content</h4>
							<div id="NLBSPL" style="display:none" class="media-box">
								<?php content('NL', 'BS', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('NLC')">- Corporate</h4>
						<div id="NLC" style="display:none" class="media-box">
							<?php content('NL', 'C', '', '', ''); ?>
							
						</div>

					</div>
				</div>

				<div id="SEheading">
					<h3 onclick="show('SEcontent')"  class="box">Sweden</h3>
					<div id="SEcontent" style="display:none">

						<h4 onclick="show('SEMA')">- Mobility Aids</h4>
						<div id="SEMA" style="display:none" class="sub-category">
							<h4 onclick="show('SEMAP')"  class="sub-category">-- Presentations</h4>
							<div id="SEMAP" style="display:none"  class="media-box">
								<?php content('SE', 'MA', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('SEMAMS')"  class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="SEMAMS" style="display:none"  class="media-box">
								<?php content('SE', 'MA', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('SEMAV')"  class="sub-category">-- Videos</h4>
							<div id="SEMAV" style="display:none"  class="media-box">
								<?php content('SE', 'MA', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('SEMAPL')"  class="sub-category">-- Pricelists / Local Content</h4>
							<div id="SEMAPL" style="display:none"  class="media-box">
								<?php content('SE', 'MA', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('SELS')">- Lifting Solutions</h4>
						<div id="SELS" style="display:none" class="sub-category"  class="sub-category">
							<h4 onclick="show('SELSP')"  class="sub-category">-- Presentations</h4>
							<div id="SELSP" style="display:none"  class="media-box">
								<?php content('SE', 'LS', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('SELSMS')"  class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="SELSMS" style="display:none"  class="sub-category">
								<h4 onclick="show('SELSMSQRG')" class="sub-sub-category" class="sub-sub-category">--- Quick Reference Guides</h4>
								<div id="SELSMSQRG" style="display:none"   class="media-box">
									<?php content('SE', 'LS', 'MS', 'QRG', ''); ?>
								</div>
								<h4 onclick="show('SELSMSMM')"  class="sub-sub-category">--- Marketing Material</h4>
								<div id="SELSMSMM" style="display:none"  class="media-box">
									<?php content('SE', 'LS', 'MS', 'MM', ''); ?>
								</div>
							</div>
							<h4 onclick="show('SELSV')"  class="sub-category">-- Videos</h4>
							<div id="SELSV" style="display:none"  class="sub-category">
								<h4 onclick="show('SELSVPV')" class="sub-sub-category">--- Product Videos</h4>
								<div id="SELSVPV" style="display:none"  class="media-box">
									<?php content('SE', 'LS', 'V', '', 'PV'); ?>
								</div>
								<h4 onclick="show('SELSVTV')" class="sub-sub-category">--- Technical Videos</h4>
								<div id="SELSVTV" style="display:none"  class="media-box">
									<?php content('SE', 'LS', 'V', '', 'TV'); ?>
								</div>
								<h4 onclick="show('SELSVSTV')"  class="sub-sub-category">--- Sales Training Videos</h4>
								<div id="SELSVSTV" style="display:none"  class="media-box">
									<?php content('SE', 'LS', 'V', '', 'TV'); ?>
								</div>
							</div>
							<div id="SELSPL" style="display:none" class="sub-category">
								<?php content('SE', 'LS', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('SEHB')">- Healthcare Beds</h4>
						<div id="SEHB" style="display:none" class="sub-category">
							<h4 onclick="show('SEHBP')" class="sub-category">-- Presentations</h4>
							<div id="SEHBP" style="display:none" class="media-box">
								<?php content('SE', 'HB', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('SEHBMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="SEHBMS" style="display:none" class="media-box">
								<?php content('SE', 'HB', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('SEHBV')" class="sub-category">-- Videos</h4>
							<div id="SEHBV" style="display:none" class="media-box">
								<?php content('SE', 'HB', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('SEHBPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="SEHBPL" style="display:none" class="media-box">
								<?php content('SE', 'HB', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('SECC')">- Convertible Chairs</h4>
						<div id="SECC" style="display:none" class="sub-category">
							<h4 onclick="show('SECCP')" class="sub-category">-- Presentations</h4>
							<div id="SECCP" style="display:none" class="media-box">
								<?php content('SE', 'CC', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('SECCMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="SECCMS" style="display:none" class="media-box">
								<?php content('SE', 'CC', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('SECCV')" class="sub-category">-- Videos</h4>
							<div id="SECCV" style="display:none" class="media-box">
								<?php content('SE', 'CC', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('SECCPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="SECCPL" style="display:none" class="media-box">
								<?php content('SE', 'CC', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('SEC')" >- Corporate</h4>
						<div id="SEC" style="display:none" class="media-box">
							<?php content('SE', 'C', '', '', ''); ?>
							
						</div>

					</div>
				</div>

				<div id="CAheading">
					<h3 onclick="show('CAcontent')" class="box">Canada</h3>
					<div id="CAcontent" style="display:none">

						<h4 onclick="show('CAMA')">- Mobility Aids</h4>
						<div id="CAMA" style="display:none" class="sub-category">
							<h4 onclick="show('CAMAP')" class="sub-category">-- Presentations</h4>
							<div id="CAMAP" style="display:none" class="media-box">
								<?php content('CA', 'MA', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('CAMAMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="CAMAMS" style="display:none" class="media-box">
								<?php content('CA', 'MA', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('CAMAV')" class="sub-category">-- Videos</h4>
							<div id="CAMAV" style="display:none" class="media-box">
								<?php content('CA', 'MA', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('CAMAPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="CAMAPL" style="display:none" class="media-box">
								<?php content('CA', 'MA', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('CALS')">- Lifting Solutions</h4>
						<div id="CALS" style="display:none" class="sub-category" class="sub-category">
							<h4 onclick="show('CALSP')" class="sub-category">-- Presentations</h4>
							<div id="CALSP" style="display:none" class="media-box">
								<?php content('CA', 'LS', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('CALSMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="CALSMS" style="display:none" class="sub-category">
								<h4 onclick="show('CALSMSQRG')" class="sub-sub-category">--- Quick Reference Guides</h4>
								<div id="CALSMSQRG" style="display:none" class="media-box">
									<?php content('CA', 'LS', 'MS', 'QRG', ''); ?>
								</div>
								<h4 onclick="show('CALSMSMM')" class="sub-sub-category">--- Marketing Material</h4>
								<div id="CALSMSMM" style="display:none" class="media-box" >
									<?php content('CA', 'LS', 'MS', 'MM', ''); ?>
								</div>
							</div>
							<h4 onclick="show('CALSV')" class="sub-category">-- Videos</h4>
							<div id="CALSV" style="display:none" class="sub-category">
								<h4 onclick="show('CALSVPV')" class="sub-sub-category">--- Product Videos</h4>
								<div id="CALSVPV" style="display:none" class="media-box">
									<?php content('CA', 'LS', 'V', '', 'PV'); ?>
								</div>
								<h4 onclick="show('CALSVTV')" class="sub-sub-category">--- Technical Videos</h4>
								<div id="CALSVTV" style="display:none" class="media-box">
									<?php content('CA', 'LS', 'V', '', 'TV'); ?>
								</div>
								<h4 onclick="show('CALSVSTV')" class="sub-sub-category">--- Sales Training Videos</h4>
								<div id="CALSVSTV" style="display:none" class="media-box">
									<?php content('CA', 'LS', 'V', '', 'STV'); ?>
								</div>
							</div>
							<h4 onclick="show('CALSPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="CALSPL" style="display:none" class="media-box">
								<?php content('CA', 'LS', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('CAHB')">- Healthcare Beds</h4>
						<div id="CAHB" style="display:none" class="sub-category">
							<h4 onclick="show('CAHBP')" class="sub-category">-- Presentations</h4>
							<div id="CAHBP" style="display:none" class="media-box">
								<?php content('CA', 'HB', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('CAHBMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="CAHBMS" style="display:none" class="media-box">
								<?php content('CA', 'HB', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('CAHBV')" class="sub-category">-- Videos</h4>
							<div id="CAHBV" style="display:none" class="media-box">
								<?php content('CA', 'HB', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('CAHBPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="CAHBPL" style="display:none" class="media-box">
								<?php content('CA', 'HB', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('CACC')">- Convertible Chairs</h4>
						<div id="CACC" style="display:none" class="sub-category">
							<h4 onclick="show('CACCP')" class="sub-category">-- Presentations</h4>
							<div id="CACCP" style="display:none" class="media-box">
								<?php content('CA', 'CC', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('CACCMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="CACCMS" style="display:none" class="media-box">
								<?php content('CA', 'CC', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('CACCV')" class="sub-category">-- Videos</h4>
							<div id="CACCV" style="display:none" class="media-box">
								<?php content('CA', 'CC', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('CACCPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="CACCPL" style="display:none" class="media-box">
								<?php content('CA', 'CC', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('CABS')">- Bathroom Safety</h4>
						<div id="CABS" style="display:none" class="sub-category" class="sub-category">
							<h4 onclick="show('CABSMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="CABSMS" style="display:none" class="media-box">
								<?php content('CA', 'BS', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('CABSPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="CABSPL" style="display:none" class="media-box">
								<?php content('CA', 'BS', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('CAC')">- Corporate</h4>
						<div id="CAC" style="display:none" class="media-box">
							<?php content('CA', 'C', '', '', ''); ?>
							
						</div>

					</div>
				</div>
				
				<div id="AUheading">
					<h3 onclick="show('AUcontent')" class="box">Australia</h3>
					<div id="AUcontent" style="display:none">

						<h4 onclick="show('AUMA')">- Mobility Aids</h4>
						<div id="AUMA" style="display:none" class="sub-category">
							<h4 onclick="show('AUMAP')" class="sub-category">-- Presentations</h4>
							<div id="AUMAP" style="display:none" class="media-box">
								<?php content('AU', 'MA', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('AUMAMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="AUMAMS" style="display:none" class="media-box">
								<?php content('AU', 'MA', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('AUMAV')" class="sub-category">-- Videos</h4>
							<div id="AUMAV" style="display:none" class="media-box">
								<?php content('AU', 'MA', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('AUMAPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="AUMAPL" style="display:none" class="media-box">
								<?php content('AU', 'MA', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('AULS')">- Lifting Solutions</h4>
						<div id="AULS" style="display:none" class="sub-category" class="sub-category">
							<h4 onclick="show('AULSP')" class="sub-category">-- Presentations</h4>
							<div id="AULSP" style="display:none" class="media-box">
								<?php content('AU', 'LS', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('AULSMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="AULSMS" style="display:none" class="sub-category">
								<h4 onclick="show('AULSMSQRG')" class="sub-sub-category">--- Quick Reference Guides</h4>
								<div id="AULSMSQRG" style="display:none" class="media-box">
									<?php content('AU', 'LS', 'MS', 'QRG', ''); ?>
								</div>
								<h4 onclick="show('AULSMSMM')" class="sub-sub-category">--- Marketing Material</h4>
								<div id="AULSMSMM" style="display:none" class="media-box">
									<?php content('AU', 'LS', 'MS', 'MM', ''); ?>
								</div>
							</div>
							<h4 onclick="show('AULSV')" class="sub-category">-- Videos</h4>
							<div id="AULSV" style="display:none" class="sub-category">
								<h4 onclick="show('AULSVPV')" class="sub-sub-category">--- Product Videos</h4>
								<div id="AULSVPV" style="display:none" class="media-box">
									<?php content('AU', 'LS', 'V', '', 'PV'); ?>
								</div>
								<h4 onclick="show('AULSVTV')" class="sub-sub-category">--- Technical Videos</h4>
								<div id="AULSVTV" style="display:none" class="media-box">
									<?php content('AU', 'LS', 'V', '', 'TV'); ?>
								</div>
								<h4 onclick="show('AULSVSTV')" class="sub-sub-category">--- Sales Training Videos</h4>
								<div id="AULSVSTV" style="display:none" class="media-box">
									<?php content('AU', 'LS', 'V', '', 'STV'); ?>
								</div>
							</div>
							<h4 onclick="show('AULSPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="AULSPL" style="display:none" class="media-box">
								<?php content('AU', 'LS', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('AUHB')">- Healthcare Beds</h4>
						<div id="AUHB" style="display:none" class="sub-category">
							<h4 onclick="show('AUHBP')" class="sub-category">-- Presentations</h4>
							<div id="AUHBP" style="display:none" class="media-box">
								<?php content('AU', 'HB', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('AUHBMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="AUHBMS" style="display:none" class="media-box">
								<?php content('AU', 'HB', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('AUHBV')" class="sub-category">-- Videos</h4>
							<div id="AUHBV" style="display:none" class="media-box">
								<?php content('AU', 'HB', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('AUHBPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="AUHBPL" style="display:none" class="media-box">
								<?php content('AU', 'HB', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('AUCC')">- Convertible Chairs</h4>
						<div id="AUCC" style="display:none" class="sub-category">
							<h4 onclick="show('AUCCP')" class="sub-category">-- Presentations</h4>
							<div id="AUCCP" style="display:none" class="media-box">
								<?php content('AU', 'CC', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('AUCCMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="AUCCMS" style="display:none" class="media-box">
								<?php content('AU', 'CC', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('AUCCV')" class="sub-category">-- Videos</h4>
							<div id="AUCCV" style="display:none" class="media-box">
								<?php content('AU', 'CC', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('AUCCPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="AUCCPL" style="display:none" class="media-box">
								<?php content('AU', 'CC', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('AUC')">- Corporate</h4>
						<div id="AUC" style="display:none" class="media-box">
							<?php content('AU', 'C', '', '', ''); ?>
							
						</div>

					</div>
				</div>
				
				<div id="OMheading">
					<h3 onclick="show('OMcontent')" class="box">Other Markets</h3>
					<div id="OMcontent" style="display:none">

						<h4 onclick="show('OMMA')">- Mobility Aids</h4>
						<div id="OMMA" style="display:none" class="sub-category">
							<h4 onclick="show('OMMAP')" class="sub-category">-- Presentations</h4>
							<div id="OMMAP" style="display:none" class="media-box">
								<?php content('OM', 'MA', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('OMMAMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="OMMAMS" style="display:none" class="media-box">
								<?php content('OM', 'MA', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('OMMAV')" class="sub-category">-- Videos</h4>
							<div id="OMMAV" style="display:none" class="media-box">
								<?php content('OM', 'MA', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('OMMAPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="OMMAPL" style="display:none" class="media-box">
								<?php content('OM', 'MA', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('OMLS')">- Lifting Solutions</h4>
						<div id="OMLS" style="display:none" class="sub-category">
							<h4 onclick="show('OMLSP')" class="sub-category">-- Presentations</h4>
							<div id="OMLSP" style="display:none" class="media-box">
								<?php content('OM', 'LS', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('OMLSMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="OMLSMS" style="display:none" class="sub-sub-category">
								<h4 onclick="show('OMLSMSQRG')" class="sub-sub-category">--- Quick Reference Guides</h4>
								<div id="OMLSMSQRG" style="display:none" class="media-box">
									<?php content('OM', 'LS', 'MS', '', 'QRG'); ?>
								</div>
								<h4 onclick="show('OMLSMSMM')" class="sub-sub-category">--- Marketing Material</h4>
								<div id="OMLSMSMM" style="display:none" class="media-box">
									<?php content('OM', 'LS', 'MS', '', 'MM'); ?>
								</div>
							</div>
							<h4 onclick="show('OMLSV')" class="sub-category">-- Videos</h4>
							<div id="OMLSV" style="display:none" class="sub-category">
								<h4 onclick="show('OMLSVPV')" class="sub-sub-category">--- Product Videos</h4>
								<div id="OMLSVPV" style="display:none" class="media-box">
									<?php content('OM', 'LS', 'V', '', 'PV'); ?>
								</div>
								<h4 onclick="show('OMLSVTV')" class="sub-sub-category">--- Technical Videos</h4>
								<div id="OMLSVTV" style="display:none" class="media-box">
									<?php content('OM', 'LS', 'V', '', 'TV'); ?>
								</div>
								<h4 onclick="show('OMLSVSTV')" class="sub-sub-category">--- Sales Training Videos</h4>
								<div id="OMLSVSTV" style="display:none" class="media-box">
									<?php content('OM', 'LS', 'V', '', 'STV'); ?>
								</div>
							</div>
							<h4 onclick="show('OMLSPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="OMLSPL" style="display:none" class="media-box">
								<?php content('OM', 'LS', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('OMHB')">- Healthcare Beds</h4>
						<div id="OMHB" style="display:none" class="sub-category">
							<h4 onclick="show('OMHBP')" class="sub-category">-- Presentations</h4>
							<div id="OMHBP" style="display:none" class="media-box">
								<?php content('OM', 'HB', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('OMHBMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="OMHBMS" style="display:none" class="media-box">
								<?php content('OM', 'HB', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('OMHBV')" class="sub-category">-- Videos</h4>
							<div id="OMHBV" style="display:none" class="media-box">
								<?php content('OM', 'HB', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('OMHBPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="OMHBPL" style="display:none" class="media-box">
								<?php content('OM', 'HB', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('OMCC')">- Convertible Chairs</h4>
						<div id="OMCC" style="display:none" class="sub-category">
							<h4 onclick="show('OMCCP')" class="sub-category">-- Presentations</h4>
							<div id="OMCCP" style="display:none" class="media-box">
								<?php content('OM', 'CC', 'P', '', ''); ?>
							</div>
							<h4 onclick="show('OMCCMS')" class="sub-category">-- Market &amp; Sales Material</h4>
							<div id="OMCCMS" style="display:none" class="media-box">
								<?php content('OM', 'CC', 'MS', '', ''); ?>
							</div>
							<h4 onclick="show('OMCCV')" class="sub-category">-- Videos</h4>
							<div id="OMCCV" style="display:none" class="media-box">
								<?php content('OM', 'CC', 'V', '', ''); ?>
							</div>
							<h4 onclick="show('OMCCPL')" class="sub-category">-- Pricelists / Local Content</h4>
							<div id="OMCCPL" style="display:none" class="media-box">
								<?php content('OM', 'CC', 'PL', '', ''); ?>
							</div>
							<hr>
						</div>

						<h4 onclick="show('OMC')">- Corporate</h4>
						<div id="OMC" style="display:none" class="media-box">
							<?php content('OM', 'C', '', '', ''); ?>
							
						</div>

					</div>
				</div>

				<?php } ?>

				<div class="btn-holder">
					<input type="submit" value="Delete" class="btn submit-style btn-danger btn-style" id="btn-submit">
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
			if ($CT == '') {
				$content_SQLselect_Query = mysqli_query($dbConnected, "SELECT * FROM files WHERE MA='".$MA."' AND PT='".$PT."' AND active='1'");
			} else if ($CTLSMS == '' && $CTLSV == '') {
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
					<div class="select-img">
					<a href="files/'.$filename.'">
						<image class="delete-img" src="files/'.$iconFilename.'" ></image>
					</a>
					<p class="align-left">'.$filename.'</p>

					<input class="css-checkbox" type="checkbox" name="chboxId[]" value="'.$id.'">

					</div>
					';
				$contentFound = 1;
			}
			echo'<div style="clear:both;"></div>';
			if ($contentFound == 0) {
				echo "<p>No content to show</p>";
			}
}
?>