	<!DOCTYPE html>
	<html>
		<head>
			<title>Human Care Sales App</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />	
			<link rel="stylesheet" href="css/main.css" type="text/css" />	
			<script type="text/javascript" src="config/jquery.min.js"></script>
			<script type="text/javascript" src="config/bootstrap.js"></script>
			<script type="text/javascript" src="config/loadContent.js"></script>
		</head>
		<body>
		<div class="container">
		<div class="topDiv"><img src="images/logo/headerlogo.png"></div>
		<div class="contentDiv">
		<?php if(@$_GET['saved']==1) {echo '<div class="alert alert-success" role="alert">File saved.</div>';}?>
		<form name="uploadContentForm" action="uploadContentHandling.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
	    	<h3>File to upload</h3>
	    	<input type="file" name="uploadedFile" class="form-control" placeholder="Choose file to upload">
	  	</div>
		<div class="form-group">
	    <h3>Icon for file</h3>
	    <input type="file" name="uploadedFileIcon" class="form-control" placeholder="Choose icon to upload">
	  	</div>
		<ul class="list-group">
			<li class="list-group-item">
				<span><input type="checkbox" name="market[]" id="US" onclick="showDiv('divPT','market[]')" value="US"><p>US</p></span>
				<span><input type="checkbox" name="market[]" id="NL" onclick="showDiv('divPT','market[]')" value="NL"><p>NL</p></span>
				<span><input type="checkbox" name="market[]" id="SE" onclick="showDiv('divPT','market[]')" value="SE"><p>SE</p></span>
				<span><input type="checkbox" name="market[]" id="CA" onclick="showDiv('divPT','market[]')" value="CA"><p>CA</p></span>
				<span><input type="checkbox" name="market[]" id="AU" onclick="showDiv('divPT','market[]')" value="AU"><p>AU</p></span>
				<span><input type="checkbox" name="market[]" id="OM" onclick="showDiv('divPT','market[]')" value="OM"><p>OM</p></span>
			</li>
			<li class="list-group-item"  id="divPT" style="display:none">
				<span><input type="checkbox" name="productType[]" id="MA" onclick="showDiv('divCT','productType[]')" value="MA"><p>MA</p></span>
				<span><input type="checkbox" name="productType[]" id="LS" onclick="showDiv('divCT','productType[]')" value="LS"><p>LS</p></span>
				<span><input type="checkbox" name="productType[]" id="HB" onclick="showDiv('divCT','productType[]')" value="HB"><p>HB</p></span>
				<span><input type="checkbox" name="productType[]" id="CC" onclick="showDiv('divCT','productType[]')" value="CC"><p>CC</p></span>
				<span id="divBS" style="display:none"><input type="checkbox" name="productType[]" id="BS" onclick="showDiv(['divCT'],'productType[]')" value="BS"><p>BS</p></span>
				<span><input type="checkbox" name="productType[]" id="C" onclick="showDiv(['divCT'],'productType[]')" value="C"><p>C</p></span>
			</li>
			<li id="divCT" style="display:none"  class="list-group-item">
				<ul id="divBSCT" style="display:none;" class="list-group-item-nested">
				<li>
						<span><input type="checkbox" name="contentType[]" id="P" onclick="showDiv('divSave','contentType[]')" value="P"><p>P</p></span>
						<span><input type="checkbox" name="contentType[]" id="V" onclick="showDiv('divSave','contentType[]')" value="V"><p>V</p></span>
				</li>
				</ul>
				<span><input type="checkbox" name="contentType[]" id="MS" onclick="showDiv('divSave','contentType[]')" value="MS"><p>MS</p></span>
				<span><input type="checkbox" name="contentType[]" id="PL" onclick="showDiv('divSave','contentType[]')" value="PL"><p>PL</p></span>
			</li>


			<li id="divLSMS" style="display:none" class="list-group-item">
				<span><input type="checkbox" name="contentTypeLSMS[]" id="QRG" onclick="showDiv('divSave','contentTypeLSMS[]')" value="QRG"><p>QRG</p></span>
				<span><input type="checkbox" name="contentTypeLSMS[]" id="MM" onclick="showDiv('divSave','contentTypeLSMS[]')" value="MM"><p>MM</p></span>
			</li>
			<li  id="divLSV" style="display:none"  class="list-group-item">
				<span><input type="checkbox" name="contentTypeLSV[]" id="PV" onclick="showDiv('divSave','contentTypeLSV[]')" value="PV"><p>PV</p></span>
				<span><input type="checkbox" name="contentTypeLSV[]" id="TV" onclick="showDiv('divSave','contentTypeLSV[]')" value="TV"><p>TV</p></span>
				<span><input type="checkbox" name="contentTypeLSV[]" id="STV" onclick="showDiv('divSave','contentTypeLSV[]')" value="STV"><p>STV</p></span>
			</li>
			<li id="divSave" style="display:none"  class="list-group-item">
				<span><input type="submit" value="Save"></span>
			</li>
		</ul> 	

	<!--
				    	<div id="divPT" style="display:none"  class="clear-element">
					      	<input type="checkbox" name="productType[]" id="MA" onclick="showDiv('divCT','productType[]')" value="MA"><p>MA</p>
					      	<input type="checkbox" name="productType[]" id="LS" onclick="showDiv('divCT','productType[]')" value="LS"><p>LS</p>
					      	<input type="checkbox" name="productType[]" id="HB" onclick="showDiv('divCT','productType[]')" value="HB"><p>HB</p>
					      	<input type="checkbox" name="productType[]" id="CC" onclick="showDiv('divCT','productType[]')" value="CC"><p>CC</p>
					      	<div id="divBS" style="display:none">
					      		<input type="checkbox" name="productType[]" id="BS" onclick="showDiv(['divCT'],'productType[]')" value="BS"><p>BS</p>
					      	</div>
					      	<input type="checkbox" name="productType[]" id="C" onclick="showDiv(['divCT'],'productType[]')" value="C"><p>C</p>
				      	</div>
				      	
				      	<div id="divCT" style="display:none"  class="clear-element">
				      		<div id="divBSCT" style="display:none;">
						      	<input type="checkbox" name="contentType[]" id="P" onclick="showDiv('divSave','contentType[]')" value="P"></td><p>P</p>
						      	<input type="checkbox" name="contentType[]" id="V" onclick="showDiv('divSave','contentType[]')" value="V"></td><p>V</p>
					      	</div>
					      	<input type="checkbox" name="contentType[]" id="MS" onclick="showDiv('divSave','contentType[]')" value="MS"></td><p>MS</p>
					      	<input type="checkbox" name="contentType[]" id="PL" onclick="showDiv('divSave','contentType[]')" value="PL"></td><p>PL</p>
				      	</div>


				      	<div id="divLSMS" style="display:none" class="clear-element">
					      	<input type="checkbox" name="contentTypeLSMS[]" id="QRG" onclick="showDiv('divSave','contentTypeLSMS[]')" value="QRG"></td><p>QRG</p>
					      	<input type="checkbox" name="contentTypeLSMS[]" id="MM" onclick="showDiv('divSave','contentTypeLSMS[]')" value="MM"></td><p>MM</p>
				      	</div>
				      	
				      	<div id="divLSV" style="display:none" class="clear-element">
					      	<input type="checkbox" name="contentTypeLSV[]" id="PV" onclick="showDiv('divSave','contentTypeLSV[]')" value="PV"></td><p>PV</p>
					      	<input type="checkbox" name="contentTypeLSV[]" id="TV" onclick="showDiv('divSave','contentTypeLSV[]')" value="TV"></td><p>TV</p>
					      	<input type="checkbox" name="contentTypeLSV[]" id="STV" onclick="showDiv('divSave','contentTypeLSV[]')" value="STV"></td><p>STV</p>
				      	</div>
				      	<div id="divSave" style="display:none"  class="clear-element">
				      		<input type="submit" value="Spara">
				      	</div>
				      	
			</div>-->
		</body>