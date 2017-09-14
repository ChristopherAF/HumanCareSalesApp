<?php

	$market = @$_POST['market'];
	$productType = @$_POST['productType'];
	$contentType = @$_POST['contentType'];

?>

<!DOCTYPE html>
<html manifest="hcsa.appcache">
	<head>
		<title>Human Care Sales App</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />	
		<script type="text/javascript" src="config/jquery.min.js"></script>
		<script type="text/javascript" src="config/bootstrap.js"></script>
		<link rel="stylesheet" href="css/main.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container">
			<div class="topDiv">
				<img src="images/logo/headerlogo.png">
			</div>
			<div class="contentDiv"> 
			<div class="row">
				<div class="div-placeholder" <?php if($contentType == 'V') { echo 'style="display:none"'; } ?>>	
  					<form id="productTypesQRG" action="showContent.php" method="post">
							<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="<?php echo $productType; ?>">
							<input type="hidden" name="contentType" value="<?php echo $contentType; ?>">
							<input type="hidden" name="contentTypeLS" value="QRG">
							<input type="image" name="buttonQRG" src="images/icons/qrg.png" placeholder="Quick Reference Guides">
					<h3>Quick Reference Guides</h3>
					</form>
				</div>

				<div class="div-placeholder" <?php if($contentType == 'V') { echo 'style="display:none"'; } ?>>	
  					<form id="productTypesMM" action="showContent.php" method="post">
							<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="<?php echo $productType; ?>">
							<input type="hidden" name="contentType" value="<?php echo $contentType; ?>">
							<input type="hidden" name="contentTypeLS" value="MM">
							<input type="image" name="buttonMM" src="images/icons/mm.png" placeholder="Marketing Material">
					<h3>Marketing Material</h3>
					</form>
				</div>

				<div class="div-placeholder" <?php if($contentType == 'MS') { echo 'style="display:none"'; } ?>>	
  					<form id="productTypesPV" action="showContent.php" method="post">
							<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="<?php echo $productType; ?>">
							<input type="hidden" name="contentType" value="<?php echo $contentType; ?>">
							<input type="hidden" name="contentTypeLS" value="PV">
							<input type="image" name="buttonPV" src="images/icons/v.png" placeholder="Product Videos">
					<h3>Product Videos</h3>
					</form>
				</div>

				<div class="div-placeholder" <?php if($contentType == 'MS') { echo 'style="display:none"'; } ?>>	
  					<form id="productTypesTV" action="showContent.php" method="post">
							<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="<?php echo $productType; ?>">
							<input type="hidden" name="contentType" value="<?php echo $contentType; ?>">
							<input type="hidden" name="contentTypeLS" value="TV">
							<input type="image" name="buttonMM" src="images/icons/v.png" placeholder="Technical Videos">
					<h3>Technical Videos</h3>
					</form>
				</div>
		
				<div class="div-placeholder" <?php if($contentType == 'MS') { echo 'style="display:none"'; } ?>>	
  					<form id="productTypesSTV" action="showContent.php" method="post">
							<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="<?php echo $productType; ?>">
							<input type="hidden" name="contentType" value="<?php echo $contentType; ?>">
							<input type="hidden" name="contentTypeLS" value="STV">
							<input type="image" name="buttonMM" src="images/icons/v.png" placeholder="Sales Training Videos">
					<h3>Sales Training Videos</h3>
					</form>
				</div>
				</div><!-- end row -->
			</div><!-- end contentDiv--> 
		</div><!-- container -->
	</body>
</html>