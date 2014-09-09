<!DOCTYPE html>
<html>
<head>
<title>Ajax Form</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#ajax-form').on('submit', function(e) {
        var vals = {
        first : $('#firstname').val().trim(),
        last : $('#lastname').val().trim(),
        };

       var response = $.ajax(
       {
           url: 'set-cookies.php',
           contentType: 'application/json',
           data: JSON.stringify(vals),
           dataType: 'json',
           processData: false,
           type: 'POST',
       });
       e.preventDefault();
    }
}
</script>
</head>
<body>
<form id="ajax-form" method="POST">
First name: <input type="text" name="firstname"></br>
Last name: <input type="text" name="lastname">
<input type="submit" value="Submit">
</form>
</body>
</html>
