<?php

	$market = @$_GET['market'];

?>

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
	      			<tr>
	      				<td><a id="productTypeMA" href="contentTypes.php?productType=MA">MA</a></td>
	      				<td><a id="productTypeLS" href="contentTypes.php?productType=LS">LS</a></td>
	      			</tr>
	      			<tr>
	      				<td><a id="productTypeHB" href="contentTypes.php?productType=HB">HB</a></td>
	      				<td><a id="productTypeCC" href="contentTypes.php?productType=CC">CC</a></td>
	      			</tr>
	      			<?php
	      				if($market == "CA" || $market == "NL") {
	      					echo '
	      					<tr>
			      				<td><a id="productTypeC" href="contentTypes.php?productType=C">C</a></td>
			      				<td></td>
			      			</tr>
	      					';
	      				} else {
	      					echo '
	      					<tr>
			      				<td><a id="productTypeC" href="contentTypes.php?productType=C">C</a></td>
			      				<td></td>
			      			</tr>
	      					';
	      				}
	      			?>
	      			
	      		</table>
	      	</div>
		</div>
	</body>
</html>
