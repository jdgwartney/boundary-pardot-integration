<!DOCTYPE html>
<html>
<head>
<title>Paradot Form</title>
</head>
<body>
<p><a href="index.php">Home</a></p>
<h1>Form</h1>
<p>This form calls the Paradot API</p>
<form id="form" action="http://go.boundary.com/l/20252/2014-09-08/2l1821" method="POST">
First name: <input id="first_name" type="text" name="first_name" required ></br>
Last name: <input id="last_name" type="text" name="last_name" required ></br>
<input id="email" name="email" hidden="true" type="text" name="email" value="foo@bar.com"/>
<input type="submit" value="Submit">
</form>
</body>
</html>
