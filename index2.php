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

			<div class="row" id="market">
				<div class="div-placeholder">	
  					<button id="US" name="market_btn" class="btn_img" />
  					<img src="images/countries/us.png" />
					<h3>United States</h3>
				</div>
				
				<div class="div-placeholder">	
  					<button id="NL" name="market_btn" class="btn_img"/><img src="images/countries/nl.png" />
					<h3>Netherlands</h3>
				</div>
			
				<div class="div-placeholder">
  					<button id="SE" name="market_btn" class="btn_img"/><img src="images/countries/se.png" />
					<h3>Sweden</h3>
					
				</div>
			
				<div class="div-placeholder">
					<button id="CA" name="market_btn" class="btn_img"/><img src="images/countries/ca.png" />
					<h3>Canada</h3>
					
				</div>
	
				<div class="div-placeholder">
					<button id="AU" name="market_btn" class="btn_img"/><img src="images/countries/au.png" />
					<h3>Australia</h3>
				</div>

				<div class="div-placeholder">
  					<button id="OM" name="market_btn" class="btn_img"/><img src="images/countries/om.png" />
  					<h3>Other Markets</h3>
				</div>
		</div><!-- end row -->

		<div class="row" id="productTypes">
				<div class="div-placeholder">	
  					<button id="MA" name="productTypes_btn" class="btn_img"/><img src="images/icons/ma.png" />
					<h3>Mobility Aids</h3>
				</div>
				
				<div class="div-placeholder">	
					<button id="LS" name="productTypes_btn" class="btn_img"/><img src="images/icons/ls.png" />
					<h3>Lifting Solutions</h3>
				</div>

				<div class="div-placeholder">
					<button id="HB" name="productTypes_btn" class="btn_img"/><img src="images/icons/hb.png" />
					<h3>Healthcare Beds</h3>	
				</div>

				<div class="div-placeholder">
					<button id="CC" name="productTypes_btn" class="btn_img"/><img src="images/icons/cc.png" />
					<h3>Convertible Chairs</h3>	
				</div>

				<!--BS only for canada and NL -->
				<div class="div-placeholder" id="BS_productTypes">
					<button id="BS" name="productTypes_btn" class="btn_img"/>
					<img src="images/icons/bs.png" />
					<h3>Bathroom Safety</h3>
				</div>
			

				<div class="div-placeholder">
					<button id="C" name="productTypes_btn" class="btn_img"/>
					<img src="images/icons/c.png" />
					<h3>Corporate</h3>			
				</div>
		</div><!-- end row-->

	
		<div class="row" id="contentTypes">
				<!--BS does not have these -->
				<div class="div-placeholder" id="PcontentTypesContainer">
					<button id="P" name="contentTypes_btn" class="btn_img"/>
					<img src="images/icons/p.png" />
					<h3>Presentations</h3>			
				</div>

				<!--BS does not have these -->
				<div class="div-placeholder" id="VcontentTypesContainer">
					<button id="V" name="contentTypes_btn" class="btn_img"/>
					<img src="images/icons/v.png" />
					<h3>Videos</h3>			
				</div>

				<div class="div-placeholder" >	
  					<button id="MS" name="contentTypes_btn" class="btn_img"/>
					<img src="images/icons/ms.png" />
					<h3>Market &amp; Sales Materials</h3>
				</div>

				<div class="div-placeholder">	
  					<button id="PL" name="contentTypes_btn" class="btn_img"/>
					<img src="images/icons/pl.png" />
					<h3>Price List &amp; Local Content</h3>
				</div>
		</div><!-- end row-->


		<div class="row" id="LSsubcContentMarketing">
		<!-- Should only show if ls -->
				<div class="div-placeholder">	
  					<button id="QRG" name="contentTypesLS_btn" class="btn_img"/>
					<img src="images/icons/qrg.png" />
					<h3>Quick Reference Guides</h3>
				</div>
	
				<div class="div-placeholder">	
					<button id="MM" name="contentTypesLS_btn" class="btn_img"/>
					<img src="images/icons/qrg.png" />
					<h3>Marketing Material</h3>
				</div>
		</div><!-- end row-->

		<div class="row" id="LSsubcContentVideo">
				<div class="div-placeholder">	
					<button id="PV" name="contentTypesLS_btn" class="btn_img"7>
					<img src="images/icons/v.png" />
					<h3>Product Videos</h3>
				</div>
		
				<div class="div-placeholder">	
					<button id="TV" name="contentTypesLS_btn" class="btn_img"/>
					<img src="images/icons/v.png" />
					<h3>Technical Videos</h3>
				</div>
		
				<div class="div-placeholder">	
					<button id="STV" name="contentTypesLS_btn" class="btn_img"/>
					<img src="images/icons/v.png" />
					<h3>Sales Training Videos</h3>
				</div>
		</div><!-- end row -->
		
		<div class="row" id="contentDiv">
			<h3>Content to show</h3>
		</div><!-- end row -->

			</div><!-- end  contentDiv -->
			</div><!-- end  container -->

	</body>
	
	<script>
			$(document).ready(function() {
					var market = "";
					var productType = "";
					var contentType = "";
					var contentTypeLS ="";


					// handles market buttons
    				$("[name ='market_btn']").click(function(event) {
        				market = this.id;
						// test to remove in production
        				print();
    				});

    				// handles product buttons
    				$("[name ='productTypes_btn']").click(function(event) {
        				productType = this.id;
						// test to remove in production
        				print();	
    				});

    				// handles content buttons
					$("[name ='contentTypes_btn']").click(function(event) {
						contentType = this.id;
						// test to remove in production
        				print(); 	
    				});

					// Handles LS buttons 
					$("[name ='contentTypesLS_btn']").click(function(event) {
						contentTypeLS = this.id;
						print();
    				});
    				
					// Reset all choices
					$(".topDiv").click(function(event) {
						reset();
					});


    				function reset(){
    					market = "";
						productType = "";
						contentType = "";
						contentTypeLS ="";
						print();
    				}

    				// Log 
    				function print(){
    					console.log("Market:"+market+" ,productType:"+productType+" ,contentType:"+contentType+" ,contentTypeLS:"+contentTypeLS);
    				}
				});
		</script>

		</html>
