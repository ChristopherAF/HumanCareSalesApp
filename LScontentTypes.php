<?php

	$market = @$_GET['market'];
	$productType = @$_GET['productType'];
	$contentType = @$_GET['contentType'];

	echo 'market: '.$market.'<br/>productType: '.$productType.'<br/>contentType: '.$contentType;

	echo '
		<!DOCTYPE html>
		<html>
			<head>
				<title>Human Care Sales App</title>
				<meta charset="utf-8">
				<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />	
				<script type="text/javascript" src="config/jquery.min.js"></script>
				<script type="text/javascript" src="config/bootstrap.js"></script>
			</head>
			<body>
				<div class="container">
					<div class="topDiv">
						<img src="images/logo/headerlogo.png">
					</div>
					<div class="contentDiv">
			      		<table>
			      		';
			      		if($contentType == 'MS') {
			      			echo '
			      			<tr>
			      				<td><a id="LScontentQRG" href="showContent.php?market='.$market.'&productType='.$productType.'&contentType=MSQRG">QRG</a></td>
			      				<td><a id="LScontentMM" href="showContent.php?market='.$market.'&productType='.$productType.'&contentType=MSMM">MM</a></td>
			      			</tr>
			      			';
			      		} else if ($contentType == 'V') {
			      			echo '
			      			<tr>
			      				<td><a id="LScontentPV" href="showContent.php?market='.$market.'&productType='.$productType.'&contentType=VPV">PV</a></td>
			      				<td><a id="LScontentTV" href="showContent.php?market='.$market.'&productType='.$productType.'&contentType=VTV">TV</a></td>
			      			</tr>
			      			<tr>
			      				<td><a id="LScontentSTV" href="showContent.php?market='.$market.'&productType='.$productType.'&contentType=VSTV">STV</a></td>
			      				<td></td>
			      			</tr>
			      			';
			      		}
			      		echo '
			      		</table>
			      	</div>
				</div>
			</body>
		</html>
	';

?>