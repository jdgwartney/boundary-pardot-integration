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
       first_name : $.trim($('#first_name').val()),
       last_name : $.trim($('#last_name').val()),
       };
       console.log("first_name: " + vals.first_name);
       console.log("last_name: " + vals.last_name);


       var response = $.ajax(
       {
           url: 'redirect-cookies.php',
           contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
           data: vals,
           processData: true,
           type: 'POST',
           complete: function() {
             console.log(response);
             console.log(response.getAllResponseHeaders());
           }
       });
       <!-- make the call to prevent from the default action of the form element being called -->
       e.preventDefault();
    });
});
</script>
</head>
<body>
<p><a href="index.php">Home</a></p>
<h1>Ajax Redirect Form</h1>
<form id="ajax-redirect-form">
First name: <input id="first_name" type="text" name="first_name" required></br>
Last name: <input id="last_name" type="text" name="last_name" required>
<button type="submit" value="Submit">
</form>
</body>
</html>
