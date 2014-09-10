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
        first_name : $.trim($('#first_name').val()),
        last_name : $.trim($('#last_name').val()),
        };
       document.cookie="first_name=" + $.trim($('#first_name').val());
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
First name: <input id="first_name" type="text" name="first_name"></br>
Last name: <input id="last_name" type="text" name="last_name">
<button id="submit" type="submit">
</form>
</body>
</html>
