<?php
$url=sprintf("location: get-cookies.php?first_name=%s&last_name=%s",$_POST["first_name"],$_POST["last_name"]);
header($url);
?>
<!DOCTYPE html>
<html>
<head>
<title>Redirect</title>
</head>
<body>
<p><a href="index.php">Home</a></p>
<h1>Redirect Cookies</h1>
<p>Does a re-direction to set the cookies</p>
</body>
</html>
