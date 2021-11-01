<?php
session_start();
if(!isset($_SESSION["uname"]))
{
    echo "<script>

           window.location='login.php';
           
        </script>";
}
echo "<h2 align='center' style='color:green'>Welcome to Our website</h2>";
echo "<h1 align='left'>Welcome To :".$_SESSION['uname']."</h1>";

?>
<html>
    <body>

        <a href="multi_logout.php"><h1 align="right" onclick="return confirm('Are You sure to Logout ??')">Logout here !!</h1></a>
    </body>
</html>