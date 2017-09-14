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
				<div class="div-placeholder"  <?php if($productType == 'BS') { echo 'style="display:none"'; } ?> >	
  					<form id="productTypesP" action="showContent.php" method="post">
								<input type="hidden" name="market" value="<?php echo $market; ?>">
								<input type="hidden" name="productType" value="<?php echo $productType; ?>">
								<input type="hidden" name="contentType" value="P">
								<input type="image" name="buttonP" src="images/icons/p.png" placeholder="Presentations">
					<h3>Presentations</h3>
					</form>
				</div>

				<div class="div-placeholder" <?php if($productType == 'BS') { echo 'style="display:none"'; } ?> >	
  					<form id="productTypesV" action="<?php if($productType == 'LS') { echo 'LScontentTypes.php'; } else { echo 'showContent.php'; } ?>" method="post">
								<input type="hidden" name="market" value="<?php echo $market; ?>">
								<input type="hidden" name="productType" value="<?php echo $productType; ?>">
								<input type="hidden" name="contentType" value="V">
								<input type="image" name="buttonP" src="images/icons/v.png" placeholder="Videos">
					<h3>Videos</h3>
					</form>
				</div>

				<div class="div-placeholder">	
  					<form id="productTypesMS" action="<?php if($productType == 'LS') { echo 'LScontentTypes.php'; } else { echo 'showContent.php'; } ?>" method="post">
						<input type="hidden" name="market" value="<?php echo $market; ?>">
						<input type="hidden" name="productType" value="<?php echo $productType; ?>">
						<input type="hidden" name="contentType" value="MS">
						<input type="image" name="buttonP" src="images/icons/ms.png" placeholder="Market & Sales Materials">
					<h3>Market &amp; Sales Materials</h3>
					</form>
				</div>

				<div class="div-placeholder">	
  					<form id="productTypesPL" action="showContent.php" method="post">
						<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="<?php echo $productType; ?>">
							<input type="hidden" name="contentType" value="PL">
							<input type="image" name="buttonPL" src="images/icons/pl.png" placeholder="Price List & Local Content">
					<h3>Price List &amp; Local Content</h3>
					</form>
				</div>

		</div><!-- end row-->
		</div><!-- end content div -->
		</div><!-- end containre -->
	</body>
</html>