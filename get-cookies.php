<?php
$expire=time()+60*60*24*30;
$fullname = $_GET['first_name'] . " " . $_GET['last_name'];
setcookie("user",$fullname,$expire);
?>
<!DOCTYPE html>
<html>
<head>
<title>Get Cookies</title>
</head>
<body>
<p><a href="index.php">Home</a></p>
<h1>Get Cookies</h1>
<a href="view-cookies.php">View Cookies</a>
</body>
</html>
