<?php

	if (isset($_COOKIE['box'])) {
		if ($_COOKIE['box'] == base64_encode("open")) {
			header("Location: admin/dfd33435j432b/upload/s3cret/kira_id.php");
		}
	}

	if (isset($_POST['key1']) && isset($_POST['key2']) && isset($_POST['key3'])) {
		if ($_POST['key1'] === "4r3_y0u_k1r4?" && $_POST['key2'] === "dfd33435j432b" && $_POST['key3'] === "1_g0t_y0u") {
			setcookie("box", base64_encode("open"), time()+3600);
			header("Location: admin/dfd33435j432b/upload/s3cret/kira_id.php");
		}
		else {
			$msg = "<h3>invalid keys!</h3>";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>DEATH NOTE TASKS</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<ul>
		<li><a href="index.php">home</a></li>
		<li><a href="tasks.php">death-note-tasks</a></li>
		<li><a href="#" style="text-decoration: underline;">the-box</a></li>
		<li id="right"><a href="admin/index.php">login</a></li>
	</ul>
	<div class="home">
		<h1>the secret box</h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<?php
				if (isset($msg)) {
					echo $msg;
				}
			?>
			<input style="margin: 5px" type="text" name="key1" placeholder="key 1" required><br>
			<input style="margin: 5px" type="text" name="key2" placeholder="key 2" required><br>
			<input style="margin: 5px" type="text" name="key3" placeholder="key 3" required><br><br>
			<input style="margin: 5px" type="submit" name="submit" value="open-the-box">
			<br>
		</form>
	</div>
</body>
</html>