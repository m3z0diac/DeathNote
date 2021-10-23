<?php

if (isset($_COOKIE['user'])) {
  
  if ($_COOKIE['user'] == base64_encode("admin")) {
    http_response_code(200);
  }
  elseif ($_COOKIE['user'] == base64_encode("user")) {
    header('Location: ../../../index.php');
  }
}

else {
    $msg = "<body style='background-color:black;'><h1 style='color:red;'>Forbidden 403<br>you are not allowd to see this page</h1></body>";
    http_response_code(403);
    die("<center>" . $msg . "</center>");
    exit;
}

$key3 = "1_g0t_y0u";

?>
