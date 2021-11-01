<?php
session_start();
unset($_SESSION["uname"]);
session_destroy();
echo "<h2 align='center' style='background-color:red; color:white; padding:15px; margin-top:10%; width:80%; margin-left:10%'>You are Logout Successfully <b style='margin-left:5%'>&times;</b></h2>";
header('refresh:3,multi_login.php');



?>