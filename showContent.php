<?php
	
	$market = @$_GET['market'];
	$productType = @$_GET['productType'];
	$contentType = @$_GET['contentType'];
	$contentTypeLS = @$_GET['contentTypeLS'];

	echo 'market: '.$market.'<br/>productType: '.$productType.'<br/>contentType: '.$contentType.'<br/>contentTypeLS: '.$contentTypeLS;

?>