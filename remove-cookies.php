<!-- Set the expiry date in the past to remove our cookie -->
<?php
setcookie("user", "", time()-3600);
?>
<!DOCTYPE html>
<html>
<head>
<title>Remove Cookies</title>
</head>
<body>
<p><a href="index.php">Home</a></p>
<p>Remove the following Cookies:</p>
<p>
<?php print_r($_COOKIE); ?>
</p>
</body>
</html>
