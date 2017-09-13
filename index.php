		<!DOCTYPE html>
		<html manifest="hcsa.appcache">
		<head>
			<title>Human Care Sales App</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
			<link rel="stylesheet" href="css/main.css" type="text/css" />	
			<script type="text/javascript" src="config/jquery.min.js"></script>
			<script type="text/javascript" src="config/bootstrap.js"></script>
		</head>
		<body>
			<div class="container">
				<div class="topDiv">
					<img src="images/logo/headerlogo.png">
				</div>
				<div class="contentDiv contentDivNav">
					<div class="container-img-text">
						<div class="img-placeholder">
							<form id="marketUS" action="productTypes.php" method="post">
								<input type="hidden" name="market" value="US">
								<input type="image" name="buttonUS" src="images/countries/us.png" placeholder="United States">
							</form>
							<div>United States</div>
						</div>
						<div class="img-placeholder">
							<form id="marketNL" action="productTypes.php" method="post">
								<input type="hidden" name="market" value="NL">
								<input type="image" name="buttonNL" src="images/countries/nl.png" placeholder="Netherlands">
							</form>
							<div>Netherlands</div>
						</div>
					</div>
					<div class="container-img-text">
						<div class="img-placeholder">
							<form id="marketSE" action="productTypes.php" method="post">
								<input type="hidden" name="market" value="SE">
								<input type="image" name="buttonSE" src="images/countries/se.png" placeholder="Sweden">
							</form>
							<div>Sweden</div>
						</div>
						<div class="img-placeholder">
							<form id="marketCA" action="productTypes.php" method="post">
								<input type="hidden" name="market" value="CA">
								<input type="image" name="buttonCA" src="images/countries/ca.png" placeholder="Canada">
							</form>
							<div>Canada</div>
						</div>
					</div>
					<div class="container-img-text">
						<div class="img-placeholder">
							<form id="marketAU" action="productTypes.php" method="post">
								<input type="hidden" name="market" value="AU">
								<input type="image" name="buttonAU" src="images/countries/au.png" placeholder="Australia">
							</form>
							<div>Australia</div>
						</div>
						<div class="img-placeholder">
							<form id="marketOM" action="productTypes.php" method="post">
								<input type="hidden" name="market" value="OM">
								<input type="image" name="buttonOM" src="images/countries/om.png" placeholder="Other Markets">
							</form>
							<div>Other Markets</div>
						</div>						
					</div>
				</div>
			</div>
		</body>
		</html>