<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="../favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="../favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="../favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="../favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="../favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon-precomposed" sizes="180x180" href="../favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
		<link rel="manifest" href="../favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<title>Human Care Sales App</title>
		
		<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="../css/main.css" type="text/css" />
		<link rel="stylesheet" href="../css/mobile.css" type="text/css" />
		<script type="text/javascript" src="../config/jquery.min.js"></script>
		<script type="text/javascript" src="../config/bootstrap.js"></script>
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimal-ui">
		<meta name="apple-mobile-web-app-capable" content="yes">  <!-- ANDROID -->
		<meta name="apple-touch-fullscreen" content="yes"><!-- iOS -->
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
	</head>
	<body>
		<div class="topDiv">
			<img alt="HumanCare logo" src="../images/logo/headerlogo.png">
			</div>
			<div class="contentDiv">
			<div class="login"  id="admin">
				<form class="form-signin" name="loginForm" action="../index.php" method="post">
					<h3>Sign in:</h3>
					<label for="inputUsername" class="sr-only">User name</label>
					<input type="text" name="username" id="inputUsername" class="form-control" placeholder="User name" required="" autofocus="">
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
					<button class="btn btn-circle btn-block" type="submit">Sign in</button>
				</form>
			</div>
		</div>
	</body>
</html>