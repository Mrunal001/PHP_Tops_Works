<?php
$ff=fopen("ajax.txt","r") or die("File does not exist");

echo fread($ff,255);

?>