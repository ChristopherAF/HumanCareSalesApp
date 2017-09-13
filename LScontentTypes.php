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
	</head>
	<body>
		<div class="container">
			<div class="topDiv">
				<img src="images/logo/headerlogo.png">
			</div>
			<div class="contentDiv contentDivNav">
				<div class="container-img-text" <?php if($contentType == 'V') { echo 'style="display:none"'; } ?>>
					<div class="img-placeholder">
						<form id="productTypesQRG" action="showContent.php" method="post">
							<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="<?php echo $productType; ?>">
							<input type="hidden" name="contentType" value="<?php echo $contentType; ?>">
							<input type="hidden" name="contentTypeLS" value="QRG">
							<input type="image" name="buttonQRG" src="" placeholder="Quicke Refernce Guides">
						</form>
						<div>Quicke Reference Guides</div>
					</div>
				</div>
				<div class="container-img-text" <?php if($contentType == 'V') { echo 'style="display:none"'; } ?>>
					<div class="img-placeholder">
						<form id="productTypesMM" action="showContent.php" method="post">
							<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="<?php echo $productType; ?>">
							<input type="hidden" name="contentType" value="<?php echo $contentType; ?>">
							<input type="hidden" name="contentTypeLS" value="MM">
							<input type="image" name="buttonMM" src="" placeholder="Marketing Material">
						</form>
						<div>Marketing Material</div>
					</div>
				</div>
				<div class="container-img-text" <?php if($contentType == 'MS') { echo 'style="display:none"'; } ?>>
					<div class="img-placeholder">
						<form id="productTypesPV" action="showContent.php" method="post">
							<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="<?php echo $productType; ?>">
							<input type="hidden" name="contentType" value="<?php echo $contentType; ?>">
							<input type="hidden" name="contentTypeLS" value="PV">
							<input type="image" name="buttonPV" src="" placeholder="Product Videos">
						</form>
						<div>Product Videos</div>
					</div>
				</div>
				<div class="container-img-text" <?php if($contentType == 'MS') { echo 'style="display:none"'; } ?>>
					<div class="img-placeholder">
						<form id="productTypesTV" action="showContent.php" method="post">
							<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="<?php echo $productType; ?>">
							<input type="hidden" name="contentType" value="<?php echo $contentType; ?>">
							<input type="hidden" name="contentTypeLS" value="TV">
							<input type="image" name="buttonTV" src="" placeholder="Technical Videos">
						</form>
						<div>Technical Videos</div>
					</div>
				</div>
				<div class="container-img-text" <?php if($contentType == 'MS') { echo 'style="display:none"'; } ?>>
					<div class="img-placeholder">
						<form id="productTypesSTV" action="showContent.php" method="post">
							<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="<?php echo $productType; ?>">
							<input type="hidden" name="contentType" value="<?php echo $contentType; ?>">
							<input type="hidden" name="contentTypeLS" value="STV">
							<input type="image" name="buttonSTV" src="" placeholder="Sales Training Videos">
						</form>
						<div>Sales Training Videos</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>