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
       console.log("first: " + vals.first_name);
       console.log("last: " + vals.last_name);

       var response = $.ajax({
           url: 'set-cookies.php',
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
<h1>Ajax Form</h1>
<form id="ajax-form">
First name: <input id="first_name" type="text" name="first_name"></br>
Last name: <input id="last_name" type="text" name="last_name">
<button id="submit" type="submit">
</form>
</body>
</html>
