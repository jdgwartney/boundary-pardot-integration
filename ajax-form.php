<!DOCTYPE html>
<html>
<head>
<title>Ajax Form</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
$(document).ready(function() {
    console.log("ready...");
    $('#ajax-form').on('submit', function(e) {
        var vals = {
        first : $('#firstname').val().trim(),
        last : $('#lastname').val().trim(),
        };

       var response = $.ajax({
           url: 'set-cookies.php',
           contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
           data: JSON.stringify(vals),
           dataType: 'json',
           processData: true,
           type: 'POST',
       });
       e.preventDefault();
       $('body').append("<p>Ajax call made</p>");
    });
});
</script>
</head>
<body>
<p><a href="index.php">Home</a></p>
<h1>Ajax Form</h1>
<form id="ajax-form">
First name: <input type="text" name="firstname"></br>
Last name: <input type="text" name="lastname">
<input type="submit" value="Submit">
</form>
</body>
</html>
