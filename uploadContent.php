<!DOCTYPE html>
<html>
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
				<form name="uploadContentForm" action="uploadContentHandling.php" method="post" enctype="multipart/form-data">
		      		<input type="file" name="uploadedFile">
		      		<table>
			      		<tr>
			      			<td><input type="checkbox" name="market" value="US"></td>
			      			<td><input type="checkbox" name="market" value="NL"></td>
			      			<td><input type="checkbox" name="market" value="SE"></td>
			      			<td><input type="checkbox" name="market" value="CA"></td>
			      			<td><input type="checkbox" name="market" value="AU"></td>
			      			<td><input type="checkbox" name="maeket" value="OM"></td>
			      		</tr>
			      		<tr>
			      			<td>US</td>
			      			<td>NL</td>
			      			<td>SE</td>
			      			<td>CA</td>
			      			<td>AU</td>
			      			<td>OM</td>
			      		</tr>
			      		<tr>
			      			<td><input type="checkbox" name="productType" value="MA"></td>
			      			<td><input type="checkbox" name="productType" value="LS"></td>
			      			<td><input type="checkbox" name="productType" value="HB"></td>
			      			<td><input type="checkbox" name="productType" value="CC"></td>
			      			<td><input type="checkbox" name="productType" value="BS"></td>
			      			<td><input type="checkbox" name="productType" value="C"></td>
			      		</tr>
			      		<tr>
			      			<td>MA</td>
			      			<td>LS</td>
			      			<td>HB</td>
			      			<td>CC</td>
			      			<td>BS</td>
			      			<td>C</td>
			      		</tr>
			      		<tr>
			      			<td><input type="checkbox" name="contentType" value="P"></td>
			      			<td><input type="checkbox" name="contentType" value="MS"></td>
			      			<td><input type="checkbox" name="contentType" value="V"></td>
			      			<td><input type="checkbox" name="contentType" value="PL"></td>
			      			<td></td>
			      			<td></td>
			      		</tr>
			      		<tr>
			      			<td>P</td>
			      			<td>MS</td>
			      			<td>V</td>
			      			<td>PL</td>
			      			<td></td>
			      			<td></td>
			      		</tr>
			      		<tr>
			      			<td><input type="checkbox" name="contentTypeLSMS" value="QRG"></td>
			      			<td><input type="checkbox" name="contentTypeLSMS" value="MM"></td>
			      			<td></td>
			      			<td></td>
			      			<td></td>
			      			<td></td>
			      		</tr>
			      		<tr>
			      			<td>QRG</td>
			      			<td>MM</td>
			      			<td></td>
			      			<td></td>
			      			<td></td>
			      			<td></td>
			      		</tr>
			      		<tr>
			      			<td><input type="checkbox" name="contentTypeLSV" value="PV"></td>
			      			<td><input type="checkbox" name="contentTypeLSV" value="TV"></td>
			      			<td><input type="checkbox" name="contentTypeLSV" value="STV"></td>
			      			<td></td>
			      			<td></td>
			      			<td></td>
			      		</tr>
			      		<tr>
			      			<td>PV</td>
			      			<td>TV</td>
			      			<td>STV</td>
			      			<td></td>
			      			<td></td>
			      			<td></td>
			      		</tr>
		      		</table>
		      		<input type="submit" value="Spara">
		      	</form>
	      	</div>
		</div>
	</body>