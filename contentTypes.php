<?php
	
	$market = @$_GET['market'];
	$productType = @$_GET['productType'];

	echo 'market: '.$market.'<br/>productType: '.$productType;

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
				';
				if($productType == 'BS') {
					echo '
		      		<table>
		      			<tr>
		      				<td><a id="contentMS" href="showContent.php?market='.$market.'&productType='.$productType.'&contentType=MS">MS</a></td>
		      				<td><a id="contentPL" href="showContent.php?market='.$market.'&productType='.$productType.'&contentType=PL">PL</a></td>
		      			</tr>
		      		</table> ';
		      	} else {
		      		echo '
		      		<table>
		      			<tr>
		      				<td><a id="contentP" href="showContent.php?market='.$market.'&productType='.$productType.'&contentType=P">P</a></td>
		      				';
		      				if($productType == 'LS') {
		      					echo '<td><a id="contentMS" href="LScontentTypes.php?market='.$market.'&productType='.$productType.'&contentType=MS">MS</a></td>
		      					</tr>
		      					<tr>
		      						<td><a id="contentV" href="LScontentTypes.php?market='.$market.'&productType='.$productType.'&contentType=V">V</a></td>';
		      				} else {
		      					echo '<td><a id="contentMS" href="showContent.php?market='.$market.'&productType='.$productType.'&contentType=MS">MS</a></td>
		      					</tr>
		      					<tr>
		      						<td><a id="contentV" href="showContent.php?market='.$market.'&productType='.$productType.'&contentType=V">V</a></td>';
		      				}
		      			echo '
		      				<td><a id="contentPL" href="showContent.php?market='.$market.'&productType='.$productType.'&contentType=PL">PL</a></td>
		      			</tr>
		      		</table> ';
		      	}
		      	echo '
		      	</div>
			</div>
		</body>
	</html>
	';