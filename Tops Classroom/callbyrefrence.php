<?php
//error_reporting(0);
function name(&$name1)  //&$name1 is reference variables of $name1

{

  $name1="My name is :Brijesh"."<br>";
  echo $name1;


}

name($name1);
$name2="My name is :Raghav"."<br>";
echo $name2;




?>