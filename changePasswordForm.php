<!DOCTYPE html>
	<html>
		<head>
			<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
			<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
			<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
			<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
			<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
			<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
			<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
			<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
			<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
			<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
			<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
			<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
			<link rel="manifest" href="favicon/manifest.json">
			<meta name="msapplication-TileColor" content="#ffffff">
			<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
			<meta name="theme-color" content="#ffffff">

			<title>Human Care Sales App</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />	
			<script type="text/javascript" src="config/jquery.min.js"></script>
			<script type="text/javascript" src="config/bootstrap.js"></script>
			<script type="text/javascript" src="config/manageContentScript.js"></script>
			<link rel="stylesheet" href="css/main.css" type="text/css"/>
			<script  type="text/javascript" src="handleNavigation.js"></script>
		</head>
		<body>
			<form id="changePasswordFunction" name="changePasswordFunctionForm" action="changePasswordFunction.php" method="POST">
				<input type="hidden" name="userid" value="<?php echo $_POST['userid']; ?>">
				<div class="form-group">
				    <label for="changePassword1">New Password</label>
				    <input type="text" class="form-control" id="changePassword1" name="changePassword1">
				</div>
				<div class="form-group">
				    <label for="changePassword2">New Password Again</label>
				    <input type="text" class="form-control" id="changePassword2" name="changePassword2">
				</div>
				<input class="btn btn-default" type="submit" name="SaveNewPassword" value="Save">
			</form>
			<form id="cancelChangePassword" name="cancelChangePasswordForm" action="manageUsers.php" method="POST">
				<input class="btn btn-default" type="submit" name="cancelChangePasswordSubmit" value="Cancel">
			</form> 
		</body>
	</html>