<?php

if (isset($_COOKIE['user'])) {
  
  if ($_COOKIE['user'] == base64_encode("admin")) {
    http_response_code(200);
  }
  elseif ($_COOKIE['user'] == base64_encode("user")) {
    header('Location: index.php');
  }
}

else {
    $msg = "<body style='background-color:black;'><h1 style='color:red;'>Forbidden 403<br>you are not allowd to see this page</h1></body>";
    http_response_code(403);
    die("<center>" . $msg . "</center>");
    exit;
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>DEATH NOTE TASKS</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<ul>
		<li><a href="../index.php">home</a></li>
		<li><a href="../tasks.php" style="text-decoration: underline;">death_note_tasks</a></li>
		<li><a href="../box.php">the_box</a></li>
		<li id="right"><a href="index.php">login</a></li>
	</ul>
	<div class="home">
		<h1>key1 : 4r3_y0u_k1r4?</h1>
		<h3>you wanna the key2? look at my eyes</h3>
		<img src="../img/reuzaci.jpg" style="border:solid 1px white;">
	</div>
</body>
<!for key3 go to {key2}/upload>
</html>