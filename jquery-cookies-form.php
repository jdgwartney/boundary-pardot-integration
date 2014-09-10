<!DOCTYPE html>
<html>
<head>
<title>Ajax Form</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
$(document).ready(function() {
    console.log("ready...");
    $('#ajax-form').on('submit', function(e) {
        console.log('jQuery submit');
        var vals = {
        firstname : $.trim($('#firstname').val()),
        lastname : $.trim($('#lastname').val()),
        };
       document.cookie="firstname=" + $.trim($('#firstname').val());
       e.preventDefault();
    });
});
</script>
</head>
<body>
<p><a href="index.php">Home</a></p>
<h1>Set Cookies Via Javascript Form</h1>
<p>Click on submit button to have cookies set by javascript</p>
<form id="ajax-form">
First name: <input id="firstname" type="text" name="firstname"></br>
Last name: <input id="lastname" type="text" name="lastname">
<button id="submit" type="submit">
</form>
</body>
</html>
