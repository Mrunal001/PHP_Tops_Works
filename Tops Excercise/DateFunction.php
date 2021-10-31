<?php

echo date("d/m/y")."<br>";
echo date("d-m-y");

?>

<br>

<?php

"<br>";
date_default_timezone_set("America/Los_Angeles");
echo date("H:i:s a");

?>

<br>

<?php

date_default_timezone_set("Asia/Calcutta");
echo date("h:i:s a");

?>

<br>

<?php
date_default_timezone_set("Asia/Dhaka");
echo date("h:i:s a");

?>

<br>

<?php


$today=mktime(date("H")+4,date("i"),date("s"),date("m"),date("d"),date("Y"));

echo "After 4 hrs of System Time  :".date("h:i:s a",$today);

?>