<?php

if (isset($_COOKIE['box'])) {
  
  if ($_COOKIE['box'] == base64_encode("open")) {
    http_response_code(200);
  }
}

else {
    $msg = "<body style='background-color:black;'><h1 style='color:red;'>Forbidden 403<br>where is the three keys you stupid</h1></body>";
    http_response_code(403);
    die("<center>" . $msg . "</center>");
    exit;
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>DEATH NOTE</title>
	<link rel="stylesheet" href="../../../../css/style.css">
</head>
<body>
	<ul>
		<li><a href="../../../../index.php">home</a></li>
		<li><a href="../../../../tasks.php">death-note-tasks</a></li>
		<li><a href="../../../../box.php" style="text-decoration: underline;">the-box</a></li>
		<li id="right"><a href="../../../../admin/index.php">login</a></li>
	</ul>
	<div class="home">
		<h1>who is kira</h1>
		<h3>fl4g{k1r4_1s_y4gami_lit3}</h3>
	</div>
</body>
</html>