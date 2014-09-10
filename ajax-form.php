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
       console.log("first: " + vals.first);
       console.log("last: " + vals.last);

       var response = $.ajax({
           url: 'set-cookies.php',
           contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
           data: vals,
           processData: true,
           type: 'POST',
       });
    });
});
</script>
</head>
<body>
<p><a href="index.php">Home</a></p>
<h1>Ajax Form</h1>
<form id="ajax-form">
First name: <input id="firstname" type="text" name="firstname"></br>
Last name: <input id="lastname" type="text" name="lastname">
<button id="submit" type="submit">
</form>
</body>
</html>
