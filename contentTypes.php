<?php
	
	$market = @$_POST['market'];
	$productType = @$_POST['productType'];

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
				<div class="container-img-text" <?php if($productType == 'BS') { echo 'style="display:none"'; } ?>>
					<div class="img-placeholder">
						<form id="productTypesP" action="showContent.php" method="post">
							<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="<?php echo $productType; ?>">
							<input type="hidden" name="contentType" value="P">
							<input type="image" name="buttonP" src="" placeholder="Presentations">
						</form>
						<div>Presentations</div>
					</div>
				</div>
				<div class="container-img-text" <?php if($productType == 'BS') { echo 'style="display:none"'; } ?>>
					<div class="img-placeholder">
						<form id="productTypesV" action="<?php if($productType == 'LS') { echo 'LScontentTypes.php'; } else { echo 'showContent.php'; } ?>" method="post">
							<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="<?php echo $productType; ?>">
							<input type="hidden" name="contentType" value="V">
							<input type="image" name="buttonV" src="" placeholder="Videos">
						</form>
						<div>Videos</div>
					</div>
				</div>
				<div class="container-img-text">
					<div class="img-placeholder">
						<form id="productTypesMS" action="<?php if($productType == 'LS') { echo 'LScontentTypes.php'; } else { echo 'showContent.php'; } ?>" method="post">
							<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="<?php echo $productType; ?>">
							<input type="hidden" name="contentType" value="MS">
							<input type="image" name="buttonMS" src="" placeholder="Market & Sales Materials">
						</form>
						<div>Market &amp; Sales Materials</div>
					</div>
				</div>
				<div class="container-img-text">
					<div class="img-placeholder">
						<form id="productTypesPL" action="showContent.php" method="post">
							<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="<?php echo $productType; ?>">
							<input type="hidden" name="contentType" value="PL">
							<input type="image" name="buttonPL" src="" placeholder="Price List & Local Content">
						</form>
						<div>Price List &amp; Local Content</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>