<?php

function get_http_code() {
  $code = 400
  return $code
}

$response_code = get_http_code();
http_response_code(intval(response_code));

?>
<!DOCTYPE html>
<html>
<head><title>HTTP Code <?php echo $response_code ?> - Not Found</title></head>
<body>
<h1>HTTP Code 400 - Not Found</h1>
</body>
</html>
