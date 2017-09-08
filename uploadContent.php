<!DOCTYPE html>
<html>
	<head>
		<title>Human Care Sales App</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />	
		<script type="text/javascript" src="config/jquery.min.js"></script>
		<script type="text/javascript" src="config/bootstrap.js"></script>
		<script type="text/javascript" src="config/loadContent.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="topDiv">
				<img src="images/logo/headerlogo.png">
			</div>
			<div class="contentDiv">
				<?php 
					if(@$_GET['saved']==1) {
						echo '<h4>File saved.</h4>';
					}
				?>
				<form name="uploadContentForm" action="uploadContentHandling.php" method="post" enctype="multipart/form-data">
		      		<input type="file" name="uploadedFile">
		      		<div id="divMA">
				      	<input type="checkbox" name="market[]" id="US" onclick="showDiv('divPT','market[]')" value="US"><p>US</p>
				      	<input type="checkbox" name="market[]" id="NL" onclick="showDiv('divPT','market[]')" value="NL"><p>NL</p>
				      	<input type="checkbox" name="market[]" id="SE" onclick="showDiv('divPT','market[]')" value="SE"><p>SE</p>
				      	<input type="checkbox" name="market[]" id="CA" onclick="showDiv('divPT','market[]')" value="CA"><p>CA</p>
				      	<input type="checkbox" name="market[]" id="AU" onclick="showDiv('divPT','market[]')" value="AU"><p>AU</p>
				      	<input type="checkbox" name="market[]" id="OM" onclick="showDiv('divPT','market[]')" value="OM"><p>OM</p>
			      	</div>
			    	<div id="divPT" style="display:none">
				      	<input type="checkbox" name="productType[]" id="MA" onclick="showDiv('divCT','productType[]')" value="MA"><p>MA</p>
				      	<input type="checkbox" name="productType[]" id="LS" onclick="showDiv('divCT','productType[]')" value="LS"><p>LS</p>
				      	<input type="checkbox" name="productType[]" id="HB" onclick="showDiv('divCT','productType[]')" value="HB"><p>HB</p>
				      	<input type="checkbox" name="productType[]" id="CC" onclick="showDiv('divCT','productType[]')" value="CC"><p>CC</p>
				      	<div id="divBS" style="display:none">
				      		<input type="checkbox" name="productType[]" id="BS" onclick="showDiv(['divCT'],'productType[]')" value="BS"><p>BS</p>
				      	</div>
				      	<input type="checkbox" name="productType[]" id="C" onclick="showDiv(['divCT'],'productType[]')" value="C"><p>C</p>
			      	</div>
			      	<div id="divCT" style="display:none">
			      		<div id="divBSCT" style="display:none;">
					      	<input type="checkbox" name="contentType[]" id="P" onclick="showDiv('divSave','contentType[]')" value="P"></td><p>P</p>
					      	<input type="checkbox" name="contentType[]" id="V" onclick="showDiv('divSave','contentType[]')" value="V"></td><p>V</p>
				      	</div>
				      	<input type="checkbox" name="contentType[]" id="MS" onclick="showDiv('divSave','contentType[]')" value="MS"></td><p>MS</p>
				      	<input type="checkbox" name="contentType[]" id="PL" onclick="showDiv('divSave','contentType[]')" value="PL"></td><p>PL</p>
			      	</div>
			      	<div id="divLSMS" style="display:none">
				      	<input type="checkbox" name="contentTypeLSMS[]" id="QRG" onclick="showDiv('divSave','contentTypeLSMS[]')" value="QRG"></td><p>QRG</p>
				      	<input type="checkbox" name="contentTypeLSMS[]" id="MM" onclick="showDiv('divSave','contentTypeLSMS[]')" value="MM"></td><p>MM</p>
			      	</div>
			      	<div id="divLSV" style="display:none">
				      	<input type="checkbox" name="contentTypeLSV[]" id="PV" onclick="showDiv('divSave','contentTypeLSV[]')" value="PV"></td><p>PV</p>
				      	<input type="checkbox" name="contentTypeLSV[]" id="TV" onclick="showDiv('divSave','contentTypeLSV[]')" value="TV"></td><p>TV</p>
				      	<input type="checkbox" name="contentTypeLSV[]" id="STV" onclick="showDiv('divSave','contentTypeLSV[]')" value="STV"></td><p>STV</p>
			      	</div>
			      	<div id="divSave" style="display:none">
			      		<input type="submit" value="Spara">
			      	</div>
		      	</form>
	      	</div>
		</div>
	</body>