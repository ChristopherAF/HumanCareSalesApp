<?php

setcookie("userID", "", time()-7200, "/");	
setcookie("loginAuthorised", "", time()-7200, "/");
setcookie("admin", "", time()-7200, "/");

header("Location: ../index.php");

?>