<!DOCTYPE html>
<html>
<head>
<title>Ajax Form</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
$(document).ready(function() {
    console.log("ready...");
    $('#paradot-ajax-form').on('submit', function(e) {
        console.log('jQuery submit');
        var vals = {
        first_name : $.trim($('#first_name').val()),
        last_name : $.trim($('#last_name').val()),
        email : $.trim($('#email').val()),
        };
       console.log("first: " + vals.first_name);
       console.log("last: " + vals.last_name);

       var response = $.ajax({
           url: 'http://go.boundary.com/l/20252/2014-09-08/2l1821',
           contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
           data: vals,
           crossDomain: true,
           dataType: 'json',
           processData: true,
           type: 'POST',
           complete: function() {
              console.log(response);
              console.log(response.getAllResponseHeaders());
           },
           statusCode: {
             200: function() { console.log('HTTP STATUS CODE 200')},
             302: function() { console.log('HTTP STATUS CODE 302')},
             404: function() { console.log('HTTP STATUS CODE 404')}
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
<h1>Paradot Ajax Form</h1>
<form id="paradot-ajax-form">
First name: <input id="first_name" type="text" name="first_name"></br>
Last name: <input id="last_name" type="text" name="last_name"></br>
<input id="email" hidden="true" type="text" name="email" value="foo@bar.com">
<button id="submit" type="submit">
</form>
</body>
</html>
