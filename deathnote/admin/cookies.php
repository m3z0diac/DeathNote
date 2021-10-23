<?php

if (isset($_POST['user']) && isset($_POST['pass'])) {
	$username = $_POST['user'];
	$password = $_POST['pass'];

	if ($username === "nimda" && $password === "nimda") {
		setcookie("user", base64_encode("admin"), time()+(3600*24), "/");
		header("Location: secret.php");
	}
	else {
		setcookie("user", base64_encode("user"), time()+60);
		header("Location: index.php");
	}
}


?>