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
  					<button id="NL" name="market_btn" class="btn_img"/>
  					<img src="images/countries/nl.png" />
					<h3>Netherlands</h3>
				</div>
			
				<div class="div-placeholder">
  					<button id="SE" name="market_btn" class="btn_img"/>
  					<img src="images/countries/se.png" />
					<h3>Sweden</h3>
				</div>
			
				<div class="div-placeholder">
					<button id="CA" name="market_btn" class="btn_img"/>
					<img src="images/countries/ca.png" />
					<h3>Canada</h3>
				</div>
	
				<div class="div-placeholder">
					<button id="AU" name="market_btn" class="btn_img"/>
					<img src="images/countries/au.png" />
					<h3>Australia</h3>
				</div>

				<div class="div-placeholder">
  					<button id="OM" name="market_btn" class="btn_img"/>
  					<img src="images/countries/om.png" />
  					<h3>Other Markets</h3>
				</div>
		</div><!-- end row -->

		<div class="row" id="productTypes" style="display: none">
				<div class="div-placeholder">	
  					<button id="MA" name="productTypes_btn" class="btn_img"/>
  					<img src="images/icons/ma.png" />
					<h3>Mobility Aids</h3>
				</div>
				
				<div class="div-placeholder">	
					<button id="LS" name="productTypes_btn" class="btn_img"/>
					<img src="images/icons/ls.png" />
					<h3>Lifting Solutions</h3>
				</div>

				<div class="div-placeholder">
					<button id="HB" name="productTypes_btn" class="btn_img"/>
					<img src="images/icons/hb.png" />
					<h3>Healthcare Beds</h3>	
				</div>

				<div class="div-placeholder">
					<button id="CC" name="productTypes_btn" class="btn_img"/>
					<img src="images/icons/cc.png" />
					<h3>Convertible Chairs</h3>	
				</div>

				<div class="div-placeholder" id="BS_productTypes" style="display: none">
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

		<div class="row" id="contentTypes" style="display: none">
				<div class="div-placeholder" id="PcontentTypesContainer">
					<button id="P" name="contentTypes_btn" class="btn_img"/>
					<img src="images/icons/p.png" />
					<h3>Presentations</h3>			
				</div>

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

		<div class="row" id="LSsubContentMarketing" style="display: none">
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
		<div class="row" id="LSsubContentVideo" style="display: none">
				<div class="div-placeholder clearfix">	
					<button id="PV" name="contentTypesLS_btn" class="btn_img" />
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
		
		<div class="row" id="resultContainer" style="display: none">
				<h3 id="titleResult" class="clearfix">&nbsp;</h3>
				<div class="div-placeholder">	
					<a href="http://humancare.se/wp-content/uploads/2017/02/99528-Maintenance-manual-Leia_Rev01.pdf">
  					<img src="files/1.jpg" />
  					</a>
					<h3>Lorem ipsum</h3>
				</div>
				<div class="div-placeholder">
					<a href="http://humancare.se/wp-content/uploads/2017/02/99528-Maintenance-manual-Leia_Rev01.pdf">	
  					<img src="files/2.jpg" />
  					</a>
					<h3>Lorem ipsum</h3>
				</div>
				<div class="div-placeholder">	
  					<a href="http://humancare.se/wp-content/uploads/2017/02/99165-User-manual-Leia-Rev03.pdf">
  					<img src="files/3.jpg" />
					<h3>Lorem ipsum</h3>
					</a>
				</div>

				<div class="div-placeholder">	
  					<a href="http://humancare.se/wp-content/uploads/2017/02/the-importance-of-proper-walking-rev-02.pdf">
  					<img src="files/7.jpg" />
					<h3>Lorem ipsum</h3>
					</a>
				</div>

				<div class="div-placeholder">	
  					<a href="http://humancare.se/wp-content/uploads/2016/08/99455-FRA-mobility-aids-catalogue_Rev01.pdf">
  					<img src="files/8.jpg" />
					<h3>Lorem ipsum</h3>
					</a>
				</div>

				<div class="div-placeholder">	
  					<a href="http://humancare.se/wp-content/uploads/2016/08/99455-FRA-mobility-aids-catalogue_Rev01.pdf">
  					<img src="files/9.jpg" />
					<h3>Lorem ipsum</h3>
					</a>
				</div>

				<div class="div-placeholder">	
  					<a href="http://humancare.se/wp-content/uploads/2016/08/99455-FRA-mobility-aids-catalogue_Rev01.pdf">
  					<img src="files/7.jpg" />
					<h3>Lorem ipsum</h3>
					</a>
				</div>

				<div class="div-placeholder">	
  					<a href="http://humancare.se/wp-content/uploads/2016/08/99455-FRA-mobility-aids-catalogue_Rev01.pdf">
  					<img src="files/7.jpg" />
					<h3>Lorem ipsum</h3>
					</a>
				</div>

				<div class="div-placeholder">	
  					<a href="http://humancare.se/wp-content/uploads/2016/08/99455-FRA-mobility-aids-catalogue_Rev01.pdf">
  					<img src="files/4.jpg" />
					<h3>Lorem ipsum</h3>
					</a>
				</div>
		</div><!-- end row -->

			</div><!-- end  contentDiv -->
			</div><!-- end  container -->
	</body>
	<script  type="text/javascript" src="contentHandler.js"></script>
	</html>