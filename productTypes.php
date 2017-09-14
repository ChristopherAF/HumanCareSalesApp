<?php

	$market = @$_POST['market'];

?>

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
				<div class="topDiv">
					<img src="images/logo/headerlogo.png">
				</div>
				<div class="contentDiv">
					
				<div class="row">
				<div class="div-placeholder">	
  					<form id="productTypesMA" action="contentTypes.php" method="post">
								<input type="hidden" name="market" value="<?php echo $market; ?>">
								<input type="hidden" name="productType" value="MA">
								<input type="image" name="buttonMA" src="images/icons/ma.png" placeholder="Mobility Aids">
					</form>
					<h3>Mobility Aids</h3>
				</div>
				
				<div class="div-placeholder">	
  					<form id="productTypesLS" action="contentTypes.php" method="post">
								<input type="hidden" name="market" value="<?php echo $market; ?>">
								<input type="hidden" name="productType" value="LS">
								<input type="image" name="buttonLS" src="images/icons/ls.png" placeholder="Lifting Solutions">
					<h3>Lifting Solutions</h3>
					</form>
				</div>
			

				<div class="div-placeholder">
					<form id="productTypesHB" action="contentTypes.php" method="post">
								<input type="hidden" name="market" value="<?php echo $market; ?>">
								<input type="hidden" name="productType" value="HB">
								<input type="image" name="buttonHB" src="images/icons/hb.png" placeholder="Healtcare Beds">
					<h3>Healthcare Beds</h3>	
					</form>
				</div>

				<div class="div-placeholder">
					<form id="productTypesCC" action="contentTypes.php" method="post">
								<input type="hidden" name="market" value="<?php echo $market; ?>">
								<input type="hidden" name="productType" value="CC">
								<input type="image" name="buttonCC" src="images/icons/cc.png" placeholder="Convertible Chairs">
					<h3>Convertible Chairs</h3>	
					</form>
				</div>

				<?php
				if(($market == 'CA') || ($market == 'NL')) {
								echo '
				<div class="div-placeholder">
					<form id="productTypesCC" action="contentTypes.php" method="post">
							<input type="hidden" name="market" value="<?php echo $market; ?>">
							<input type="hidden" name="productType" value="BS">
							<input type="image" name="buttonBS" src="images/icons/bs.png" placeholder="Bathroom Safety">
					<h3>Bathroom Safety</h3>
					</form>
				</div>
				';}
				?>	


				<div class="div-placeholder">
					<form id="productTypesC" action="showContent.php" method="post">
								<input type="hidden" name="market" value="<?php echo $market; ?>">
								<input type="hidden" name="productType" value="C">
								<input type="image" name="buttonC" src="images/icons/c.png" placeholder="Convertible Chairs">
					<h3>Corporate</h3>	
					</form>
				</div>


		      	</div><!-- end contentDiv-->
		      </div><!-- end row-->
			</div><!-- end container -->
		</body>
	</html>
