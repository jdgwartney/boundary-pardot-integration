<!DOCTYPE html>
<html>
<head>
<title>Ajax Form</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#ajax-redirect-form').on('submit', function(e) {
        var vals = {
        first : $('#firstname').val().trim(),
        last : $('#lastname').val().trim(),
        };

       var response = $.ajax(
       {
           url: 'set-cookies.php',
           contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
           data: JSON.stringify(vals),
           processData: true,
           dataType: 'json',
           type: 'POST',
       });
       e.preventDefault();
    });
});
</script>
</head>
<body>
<p><a href="index.php">Home</a></p>
<h1>Ajax Redirect Form</h1>
<form id="ajax-redirect-form">
First name: <input type="text" name="firstname"></br>
Last name: <input type="text" name="lastname">
<input type="submit" value="Submit">
</form>
</body>
</html>
