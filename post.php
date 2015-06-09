<!DOCTYPE html>
<html>
<head>
<title>Set Cookies</title>
<script>

function transferComplete(evt) {
  console.log("transfer complete");
  console.log(evt);
}

function sendRequest(url,params,cb,HttpMethod){
     if (!HttpMethod){
       HttpMethod="POST";
     }
     var req = new XMLHttpRequest();
     if (req){
       req.open(HttpMethod,url,true);
       req.setRequestHeader
            ("Content-Type",
             "application/x-www-form-urlencoded");
       req.send(params);
       req.addEventListener("load",cb,true);
     }
}
function doAction() {
    var vals = {
       first_name: document.getElementById("first_name").value,
       last_name: document.getElementById("last_name").value
    }
    console.log("first_name: " + vals.first_name);
    console.log("last_name: " + vals.last_name);
    sendRequest("http://go.boundary.com/l/20252/2014-09-08/2l1821",vals)
}
</script>
</head>
<body>
<p><a href="index.php">Home</a></p>
<h1>Form</h1>
<p>This form uses the usual action of the form tag to call a page to set cookies</p>
<form id="form" action="javascript:doAction()" method="POST">
First name: <input id="first_name" type="text" name="first_name" required ></br>
Last name: <input id="last_name" type="text" name="last_name" required >
<input type="submit" value="Submit">
</form>
</body>
</html>
