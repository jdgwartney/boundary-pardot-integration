<!DOCTYPE html>
<html>
<head>
<title>Ajax Form</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#ajax-redirect-form').on('submit', function(e) {
        var vals = {
        first : $.trim($('#firstname').val()),
        last : $.trim($('#lastname').val()),
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
First name: <input id="firstname" type="text" name="firstname"></br>
Last name: <input id="lastname" type="text" name="lastname">
<button type="submit" value="Submit">
</form>
</body>
</html>
