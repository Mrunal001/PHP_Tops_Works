<?php
#future date and time
// mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("y"));

$today=mktime(date("H"),date("i"),date("s"),date("m")+1,date("d")+1,date("Y")+1);

// echo "Today is :".date("d/m/y",$today);

// echo "Towmmarow is :".date("d/m/y",$today);


echo "After one day and one month and one year date is  :".date("d/m/Y",$today);



?>