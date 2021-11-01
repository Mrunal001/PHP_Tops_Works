<?php
$ff=fopen("webservices.txt","r+") or die("File does not exist");

echo fread($ff,255);

?>