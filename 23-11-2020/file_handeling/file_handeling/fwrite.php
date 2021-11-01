<?php
$ff=fopen("names.txt","r+") or die("File does not exist");

$name="Hello Mohit\r\n";
fwrite($ff,$name);

$name1="Hello Rashmin\r\n";
fwrite($ff,$name1);

$name2="Hello Maulik\r\n";
fwrite($ff,$name2);

$name3="Hello Sanjay\r\n";
fwrite($ff,$name3);

$name4="Hello Damini";
fwrite($ff,$name4);



fclose($ff);

?>