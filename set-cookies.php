<?php
$expire=time()+60*60*24*30;
$fullname = $_POST['firstname'] . " " . $_POST['lastname'];
setcookie("user","foo bar",$expire);
?>
<!DOCTYPE html>
<html>
<head>
<title>Set Cookies</title>
</head>
<body>
<p><a href="index.php">Home</a></p>
<h1>Set Cookies</h1>
<a href="view-cookies.php">View Cookies</a>
</body>
</html>
