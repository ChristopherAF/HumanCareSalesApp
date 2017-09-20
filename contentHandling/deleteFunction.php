<?php
	
	$chboxId = $_POST['chboxId'];

	echo sizeof($chboxId);

	for ($i=0; $i<sizeof($chboxId); $i++) {
		echo $chboxId[$i];
	}
?>