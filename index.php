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

	<title>Human Care Sales App</title>
	
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
			<img alt="HumanCare logo" src="images/logo/headerlogo.png">

			 <button href="offline.php" id="offlineBtn" type="button" class="btn btn-success btn-circle btn-offline">
			 	Offline list
			 </button>

	</div>
	<div class="contentDiv">
	<div class="container">
			<div class="row" id="market">
				<div class="div-placeholder flag">	
					<button id="US" name="market_btn" class="btn_img" />
					<img alt="Usa flag" src="images/countries/us.png" />
					<h3>United States</h3>
				</div>

				<div class="div-placeholder  flag">	
					<button id="NL" name="market_btn" class="btn_img"/>
					<img  alt="Netherlands flag" src="images/countries/nl.png" />
					<h3>Netherlands</h3>
				</div>

				<div class="div-placeholder  flag">
					<button id="SE" name="market_btn" class="btn_img"/>
					<img alt="Swedish flag" src="images/countries/se.png" />
					<h3>Sweden</h3>
				</div>

				<div class="div-placeholder  flag">
					<button id="CA" name="market_btn" class="btn_img"/>
					<img alt="Canadian flag" src="images/countries/ca.png" />
					<h3>Canada</h3>
				</div>

				<div class="div-placeholder  flag">
					<button id="AU" name="market_btn" class="btn_img"/>
					<img alt="Australian flag" src="images/countries/au.png" />
					<h3>Australia</h3>
				</div>

				<div class="div-placeholder  flag">
					<button id="OM" name="market_btn" class="btn_img"/>
					<img  alt="Other Markets icon" src="images/countries/om.png" />
					<h3>Other Markets</h3>
				</div>
			</div><!-- end row -->

			<div class="row" id="productTypes" style="display: none">
				<div class="div-placeholder">	
					<button id="MA" name="productTypes_btn" class="btn_img"/>
					<img alt="Mobility Aids icon" src="images/icons/ma.png" />
					<h3>Mobility Aids</h3>
				</div>

				<div class="div-placeholder">	
					<button id="LS" name="productTypes_btn" class="btn_img"/>
					<img  alt="Lifting Solutions icon" src="images/icons/ls.png" />
					<h3>Lifting Solutions</h3>
				</div>

				<div class="div-placeholder">
					<button id="HB" name="productTypes_btn" class="btn_img"/>
					<img alt="Healthcare Beds icon" src="images/icons/hb.png" />
					<h3>Healthcare Beds</h3>	
				</div>

				<div class="div-placeholder">
					<button id="CC" name="productTypes_btn" class="btn_img"/>
					<img alt="Convertible Chairs icon" src="images/icons/cc.png" />
					<h3>Convertible Chairs</h3>	
				</div>

				<div class="div-placeholder" id="BS_productTypes" style="display: none">
					<button id="BS" name="productTypes_btn" class="btn_img"/>
					<img alt="Bathroom Safety icon" src="images/icons/bs.png" />
					<h3>Bathroom Safety</h3>
				</div>

				<div class="div-placeholder">
					<button id="C" name="productTypes_btn" class="btn_img"/>
					<img alt="Corporate icon" src="images/icons/c.png" />
					<h3>Corporate</h3>			
				</div>
			</div><!-- end row-->

			<div class="row" id="contentTypes" style="display: none">
				<div class="div-placeholder" id="PcontentTypesContainer">
					<button id="P" name="contentTypes_btn" class="btn_img"/>
					<img alt="Presentations icon" src="images/icons/p.png" />
					<h3>Presentations</h3>			
				</div>

				<div class="div-placeholder" id="VcontentTypesContainer">
					<button id="V" name="contentTypes_btn" class="btn_img"/>
					<img alt="Videos icon" src="images/icons/v.png" />
					<h3>Videos</h3>			
				</div>

				<div class="div-placeholder" >	
					<button id="MS" name="contentTypes_btn" class="btn_img"/>
					<img  alt="Market &amp; Sales Materials icon" src="images/icons/ms.png" />
					<h3>Market &amp; Sales Materials</h3>
				</div>

				<div class="div-placeholder">	
					<button id="PL" name="contentTypes_btn" class="btn_img"/>
					<img alt="Price List &amp; Local Content icon" src="images/icons/pl.png" />
					<h3>Price List &amp; Local Content</h3>
				</div>
			</div><!-- end row-->

			<div class="row" id="LSsubContentMarketing" style="display: none">
				<div class="div-placeholder">	
					<button id="QRG" name="contentTypesLS_btn" class="btn_img"/>
					<img alt="Quick Reference Guides icon" src="images/icons/qrg.png" />
					<h3>Quick Reference Guides</h3>
				</div>

				<div class="div-placeholder">	
					<button id="MM" name="contentTypesLS_btn" class="btn_img"/>
					<img alt="Marketing Material icon" src="images/icons/qrg.png" />
					<h3>Marketing Material</h3>
				</div>
			</div><!-- end row-->
			<div class="row" id="LSsubContentVideo" style="display: none">
				<div class="div-placeholder clearfix">	
					<button id="PV" name="contentTypesLS_btn" class="btn_img" />
					<img alt="Product Videos icon" src="images/icons/v.png" />
					<h3>Product Videos</h3>
				</div>

				<div class="div-placeholder">	
					<button id="TV" name="contentTypesLS_btn" class="btn_img"/>
					<img alt="Technical Videos icon" src="images/icons/v.png" />
					<h3>Technical Videos</h3>
				</div>

				<div class="div-placeholder">	
					<button id="STV" name="contentTypesLS_btn" class="btn_img"/>
					<img alt="Sales Training Videos icon" src="images/icons/v.png" />
					<h3>Sales Training Videos</h3>
				</div>

			</div><!-- end row -->

			<div class="row" id="resultContainer" style="display: none">
				<h3 id="titleResult" class="clearfix">Press image to choose for offline</h3>
				<h3 id="titleResultNumber" class="clearfix">Press link to open media</h3>
				<?php

				include('config/dbConfig.php');

				$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);
				mysqli_set_charset($dbConnected, 'utf8');

				$userID = @$_COOKIE['userID'];

				if ($dbConnected) {

					$offlineArray = [];
					$offline_SQLselect = "SELECT * FROM offline WHERE userid='".$userID."'";
					$offline_SQLselect_query = mysqli_query($dbConnected, $offline_SQLselect);
					while($offlineRow = mysqli_fetch_array($offline_SQLselect_query, MYSQLI_ASSOC)) {
						$offlineFileid = $offlineRow['fileid'];
						array_push($offlineArray, $offlineFileid);
					}

					$content_SQLselect = "SELECT * FROM files WHERE active='1'";

					$content_SQLselect_Query = mysqli_query($dbConnected, $content_SQLselect);

					while ($row = mysqli_fetch_array($content_SQLselect_Query, MYSQLI_ASSOC)) {
						$id = $row['id'];
						$MA = $row['MA'];
						$PT = $row['PT'];
						$CT = $row['CT'];
						$CTLSMS = $row['CTLSMS'];
						$CTLSV = $row['CTLSV'];
						$filename = $row['filename'];
						$iconFilename = $row['iconFilename'];

						echo '<div class="div-placeholder" name="resultBox" 
						style="display:none" >
						<div class="crop">
							<img id="'.$id.'" src="files/'.$iconFilename.'"';
							if(in_array($id, $offlineArray)) { 
							echo'class="offline"';
							} else {
							echo'class=""';
							}	
							echo'/>
						</div>

						<span style="color:#FFF; display:none;" id="span-ma">'.$MA.'</span>
						<span style="color:#FFF; display:none;" id="span-pt">'.$PT.'</span>
						<span style="color:#FFF; display:none;" id="span-ct">'.$CT.'</span>
						<span style="color:#FFF; display:none;" id="span-CTLSMS">'.$CTLSMS.'</span>
						<span style="color:#FFF; display:none;" id="span-CTLSV">'.$CTLSV.'</span> 

						<a href="files/'
						.$filename.'
						"><h3 class="filename">Open File</h3></a></div>';
					}
				}

				?>
			</div><!-- end row -->
	</div><!-- end  container -->
	</div><!-- end  contentDiv -->
<script  type="text/javascript" src="contentHandler.js"></script>	
</body>

</html>

<?php

	} else {	
		$username = @$_POST['username'];
		$password = @$_POST['password'];
		$authorised = userAuthorised($dbConnected, $username, $password);
		if ($authorised[0]) {
			if ($authorised[1]) {
				header("Location: uploadContent.php");
			} else {
				header("Location: index.php");
			}
		} else {
			header("Location: logInAndOut/loginForm.php");
		}
	}
}
		

?>