<?php
if(isset($_POST["sub"]))

{
  $pname=$_POST["pname"];
  
  $yname=$_POST["yname"];
  
  $rname=$_POST["rname"];

  $si=$pname*$yname*$rname/100;

  echo "<h2 align='center' style='color:blue'>Simple Interest is :$si</h2>";
  

}

?>
