<?php

	$market = @$_POST['market'];

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
				<div class="contentDiv">
					<div class="contentDiv contentDivNav">
						<div class="container-img-text">
							<div class="img-placeholder">
								<form id="productTypesMA" action="contentTypes.php" method="post">
									<input type="hidden" name="market" value="<?php echo $market; ?>">
									<input type="hidden" name="productType" value="MA">
									<input type="image" name="buttonMA" src="" placeholder="Mobility Aids">
								</form>
								<div>Mobility Aids</div>
							</div>
						</div>
						<div class="container-img-text">
							<div class="img-placeholder">
								<form id="productTypesLS" action="contentTypes.php" method="post">
									<input type="hidden" name="market" value="<?php echo $market; ?>">
									<input type="hidden" name="productType" value="LS">
									<input type="image" name="buttonLS" src="" placeholder="Lifting Solutions">
								</form>
								<div>Lifting Solutions</div>
							</div>
						</div>
						<div class="container-img-text">
							<div class="img-placeholder">
								<form id="productTypesHB" action="contentTypes.php" method="post">
									<input type="hidden" name="market" value="<?php echo $market; ?>">
									<input type="hidden" name="productType" value="HB">
									<input type="image" name="buttonHB" src="" placeholder="Healtcare Beds">
								</form>
								<div>Healthcare Beds</div>
							</div>
						</div>
						<div class="container-img-text">
							<div class="img-placeholder">
								<form id="productTypesCC" action="contentTypes.php" method="post">
									<input type="hidden" name="market" value="<?php echo $market; ?>">
									<input type="hidden" name="productType" value="CC">
									<input type="image" name="buttonCC" src="" placeholder="Convertible Chairs">
								</form>
								<div>Convertible Chairs</div>
							</div>
						</div>
						<?php
							if(($market == 'CA') || ($market == 'NL')) {
								echo '
									<div class="container-img-text">
										<div class="img-placeholder">
											<form id="productTypesBS" action="contentTypes.php" method="post">
												<input type="hidden" name="market" value="<?php echo $market; ?>">
												<input type="hidden" name="productType" value="BS">
												<input type="image" name="buttonBS" src="" placeholder="Bathroom Safety">
											</form>
											<div>Bathroom Safety</div>
										</div>
									</div>
								';
							}
						?>						
						<div class="container-img-text">
							<div class="img-placeholder">
								<form id="productTypesC" action="showContent.php" method="post">
									<input type="hidden" name="market" value="<?php echo $market; ?>">
									<input type="hidden" name="productType" value="C">
									<input type="image" name="buttonC" src="" placeholder="Corporate">
								</form>
								<div>Corporate</div>
							</div>
						</div>
					</div>
		      	</div>
			</div>
		</body>
	</html>
