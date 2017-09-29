<?php
include('config/dbConfig.php'); 
$dbSuccess = false;
$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);

if ($dbConnected) {		
	$dbSelected = mysqli_select_db($dbConnected,$db['database']);
	if ($dbSelected) {
		$dbSuccess = true;
	} 	
}

if ($dbSuccess) {

	$users_SQLselect_Query = mysqli_query($dbConnected, "SELECT * FROM login");

?>

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
			<div class="container">
				<div>
					<img src="images/logo/headerlogo.png">
				</div>
				<div class="contentDiv" id="admin">
					<?php include('navigation.php'); ?>
					<h3>Manage Users:</h3>
					<?php 
						if(@$_GET['password']=='success') {
							echo '
							<div class="alert alert-success" role="alert">
		  						Password changed.
		  					</div>';
						} else if (@$_GET['password']=='failed') {
							echo '<div class="alert alert-danger" role="alert">
	  						<span class="sr-only">Error:</span>
	  						Password not changed.
							</div>';
						} else if (@$_GET['newuser']=='success') {
							echo '
							<div class="alert alert-success" role="alert">
		  						New user added.
		  					</div>';
						} else if (@$_GET['newuser']=='failed') {
							echo '<div class="alert alert-danger" role="alert">
	  						<span class="sr-only">Error:</span>
	  						New user not added.
							</div>';
						} else if (@$_GET['deleteuser']=='success') {
							echo '
							<div class="alert alert-success" role="alert">
		  						User removed.
		  					</div>';
						} else if (@$_GET['deleteuser']=='failed') {
							echo '<div class="alert alert-danger" role="alert">
	  						<span class="sr-only">Error:</span>
	  						User not removed.
							</div>';
						}
					?>
					<form id="newUser" name="newUserForm" action="newUserForm.php" method="post">
						<input class="btn btn-success btn-style" type="submit" name="newUserSubmit" value="Create new User">
					</form>
					<table class="table table-striped table-bordered table-hover" id="userTable">
						<thead>
							<tr>
								<th>Username</th>
								<th>Role</th>
								<th>Change Password</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while ($row = mysqli_fetch_array($users_SQLselect_Query, MYSQLI_ASSOC)) {
									$id = $row['id'];
									$username = $row['username'];
									$password = $row['password'];
									$admin = $row['admin'];
									$role = "";
									if ($admin == '1') {
										$role = "Admin";
									} else {
										$role = "User";
									}

									echo '
										<tr>
											<td>'.$username.'</td>
											<td>'.$role.'</td>
											<td>
												<form id="changePasswordOption" name="changePasswordForm" action="changePasswordForm.php" method="post">
													<input type="hidden" name="userid" value="'.$id.'">
													<input class="btn btn-success btn-style" type="submit" value="Change password" />
												</form>
											</td>
											<td>
												<form id="removeUserForm" name="removeUserForm" action="removeUserFunction.php" method="post">
													<input type="hidden" name="userid" value="'.$id.'">
													<input class="btn btn-danger btn-style" type="submit" value="Remove User"  onclick="return confirm(\'Are you sure you want to remove '.$username.'?\')"/>
												</form>
											</td>
										</tr>
									';
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</body>
	</html>


<?php
}
?>