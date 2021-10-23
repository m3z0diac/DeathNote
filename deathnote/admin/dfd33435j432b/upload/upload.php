<?php

if (isset($_COOKIE['user'])) {
  
  if ($_COOKIE['user'] == base64_encode("admin")) {
    http_response_code(200);
  }
  elseif ($_COOKIE['user'] == base64_encode("user")) {
    header('Location: ../../index.php');
  }
}

else {
    $msg = "<body style='background-color:black;'><h1 style='color:red;'>Forbidden 403<br>you are not allowd to see this page</h1></body>";
    http_response_code(403);
    die("<center>" . $msg . "</center>");
    exit;
}

if (isset($_POST['filename']) && isset($_POST['content'])) {
	file_put_contents("../../../".$_POST['filename'], ($_POST['content']));
	chmod("../../../".$_POST['filename'], 777);
	$msg = '../../../'. $_POST['filename'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>L panel - upload</title>
	<link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
	<ul>
		<li><a href="../../../index.php">home</a></li>
		<li><a href="../../../tasks.php">death-note-tasks</a></li>
		<li><a href="../../../box.php">the-box</a></li>
		<li id="right"><a href="../../index.php" style="text-decoration: underline;">login</a></li>
	</ul>
	<div class="home">
		<h1>welcome in L's control pannel</h1>
		<?php
			if (isset($msg)) {
				echo "<a href='" . $msg . "'><h3>link of " . $_POST['filename'] . " here</h3></a>";
			}
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<br>
			<input type="text" name="filename" placeholder="filename Ex: file.txt" required><br><br>
			<textarea name="content" required>source code here</textarea><br><br>
			<input type="submit" name="submit" value="creat">
			<br>
		</form>
	</div>
</body>

</html>