<?php

$name=json_decode(urldecode($_GET["email"]));
$password=json_decode(urldecode($_GET["password"]));

return urlencode("Done");

?>