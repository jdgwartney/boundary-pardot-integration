<!DOCTYPE html>
<html>
<head>
<title>Ajax Form</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#ajax-redirect-form').on('submit', function(e) {
       console.log('jQuery submit');
       var vals = {
       firstname : $.trim($('#firstname').val()),
       lastname : $.trim($('#lastname').val()),
       };
       console.log("first: " + vals.firstname);
       console.log("last: " + vals.lastname);


       var response = $.ajax(
       {
           url: 'redirect-cookies.php',
           contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
           data: JSON.stringify(vals),
           processData: true,
           dataType: 'json',
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
<h1>Ajax Redirect Form</h1>
<form id="ajax-redirect-form">
First name: <input id="firstname" type="text" name="firstname" required></br>
Last name: <input id="lastname" type="text" name="lastname" required>
<button type="submit" value="Submit">
</form>
</body>
</html>
