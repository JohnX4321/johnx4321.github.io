<?php

$text=$_POST['text'];

echo "<html> <head>";
echo "<title>zhello </title>";

echo "</head><body>";

echo $text;

echo "</body>";
echo "</html>";

return json_encode("Done");
?>