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
       console.log("first: " + vals.firstname);
       console.log("last: " + vals.lastname);

       var response = $.ajax({
           url: 'set-cookies.php',
           contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
           data: vals,
           processData: true,
           type: 'POST',
       });
       <!-- make the call to prevent from the default action of the form element being called -->
       e.preventDefault();
       console.log(response);
       console.log(response.getAllResponseHeaders());
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
