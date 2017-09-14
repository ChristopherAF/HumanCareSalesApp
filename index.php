		<!DOCTYPE html>
		<html manifest="hcsa.appcache">
		<head>
			<title>Human Care Sales App</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
			<link rel="stylesheet" href="css/main.css" type="text/css" />	
			<script type="text/javascript" src="config/jquery.min.js"></script>
			<script type="text/javascript" src="config/bootstrap.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">
		</head>
		<body>
			<div class="container">
			<div class="topDiv"><img src="images/logo/headerlogo.png"></div>
			
			<div class="contentDiv">
			
			<div class="row">
				<div class="div-placeholder">	
  					<form id="marketUS" action="productTypes.php" method="post">
								<input type="hidden" name="market" value="US">
								<input type="image" name="buttonUS" src="images/countries/us.png" placeholder="United States">
					</form>
					<h3>United States</h3>
				</div>
				
				<div class="div-placeholder">	
  					<form id="marketNL" action="productTypes.php" method="post">
								<input type="hidden" name="market" value="NL">
								<input type="image" name="buttonNL" src="images/countries/nl.png" placeholder="Netherlands">
					<h3>Netherlands</h3>
					</form>
				</div>
			
				<div class="div-placeholder">
  					<form id="marketSE" action="productTypes.php" method="post">
								<input type="hidden" name="market" value="SE">
								<input type="image" name="buttonSE" src="images/countries/se.png" placeholder="Sweden">
					<h3>Sweden</h3>
					</form>
				</div>
			
				<div class="div-placeholder">
  					<form id="marketCA" action="productTypes.php" method="post">
								<input type="hidden" name="market" value="CA">
								<input type="image" name="buttonCA" src="images/countries/ca.png" placeholder="Canada">
					<h3>Canada</h3>
					</form>
				</div>
	
				<div class="div-placeholder">
  					<form id="marketAU" action="productTypes.php" method="post">
								<input type="hidden" name="market" value="AU">
								<input type="image" name="buttonAU" src="images/countries/au.png" placeholder="Australia">
					<h3>Australia</h3>
					</form>
				</div>

				<div class="div-placeholder">
  					<form id="marketOM" action="productTypes.php" method="post">
								<input type="hidden" name="market" value="OM">
								<input type="image" name="buttonOM" src="images/countries/om.png" placeholder="Other Markets">
					<h3>Other Markets</h3>
					</form>
				</div>
			</div><!-- end row -->
			

			</div><!-- end  contentDiv -->
			</div><!-- end  container -->

		</body>
		</html>