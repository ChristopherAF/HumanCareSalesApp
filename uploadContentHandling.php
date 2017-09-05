<?php

	header('Content-Type: text/html; charset=utf-8');
	
	if (isset($_FILES['uploadedFile'])) {
		$filename =  $_FILES['uploadedFile']['name'];
		echo $_FILES['uploadedFile']['tmp_name'].'<br/>';
		move_uploaded_file($_FILES['uploadedFile']['tmp_name'], "files/".$filename);
		echo 'File '.$filename.' uploaded';
	} else {
		echo "No file uploaded.";
	}

?>