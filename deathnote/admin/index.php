<?php

if (isset($_COOKIE['user'])) {
	if($_COOKIE['user']===base64_encode("admin")){
		header("Location: secret.php");
	}
	else {
		$msg = "Incorrect informations";
		setcookie("user", base64_encode("admin"), time()-1);
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>L team - login</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<ul>
		<li><a href="../index.php">home</a></li>
		<li><a href="../tasks.php">death-note-tasks</a></li>
		<li><a href="../box.php">the-box</a></li>
		<li id="right"><a href="index.php" style="text-decoration: underline;">login</a></li>
	</ul>
	<div class="home">
		<!Hint: go to css file>
		<img src="../img/login.png">
		<form action="cookies.php" method="POST">
			<br>
			<input type="text" name="user" required><br><br>
			<input type="password" name="pass" required><br><br>
			<input type="submit" name="submit" value="login">
			<br>
			<?php
				if (isset($msg)) {
					echo "<h3>" . $msg . "</h3>";
				}
			?>
		</form>
	</div>
</body>

</html>