<?php

$name=json_decode(urldecode($_POST["email"]));
$password=json_decode(urldecode($_POST["password"]));

return urlencode("Done");

?>