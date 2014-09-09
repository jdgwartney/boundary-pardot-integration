<!DOCTYPE html>
<html>
<head><title>Set Cookies</title></head>
<body>
<?php
$expire=time()+60*60*24*30;
setcookie("user", "Alex Porter", $expire);
?>
</body>
</html>
