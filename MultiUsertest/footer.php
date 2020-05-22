<?php


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<nav>
		<div class="main-wrap">
			<ul>
			<li><a href="index.php">Home</a></li>
			</ul>
		</div>
		<div class="pbox">
			<h2>Patient Login</h2>
			<form action="includes/login.inc.php" method="POST">
				<div class="inputBox">
					<input type="text" name="uidai">
					<label>aadhar card</label>
				</div>
				<div class="inputBox">
					<input type="password" name="password" >
					<label>Password</label>
				</div>
				<input  type="submit" name="submit" value="Log in">
			</form>
		<br>
		
		</div>
		</div>
	</nav>
</header>
</body>
</html>
