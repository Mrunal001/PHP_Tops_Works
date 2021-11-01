<?php
error_reporting(0);
if(isset($_POST["log"]))

{
    $em=$_POST["em"];
    $pass=$_POST["pass"];
  

  if($em=='bkpandey.pandey@gmail.com' && $pass=="b123")
  {  

    if($_POST["chk"]==true)
   {

    
    setcookie("em",$em);
    setcookie("pass",$pass);

    echo "<h2 align='center'>Logged In succefully</h2>";

    header("refresh:2,welcome.php");
        


   }   

} 

   else

   {

    echo "<h2 align='center'>Email and Password are Incorect</h2>";

    header("refresh:2,login.php");
   }
}



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>

    <center>
        <h2>Login Form</h2>

        <form method="post">
        Enter Email :<input type="text" name="em" value="<?php if($_COOKIE["em"]){ echo $_COOKIE["em"];} ?>" placeholder="Email *"><br><br> Enter Password :<input type="password" name="pass" value="<?php if($_COOKIE["pass"]){ echo $_COOKIE["pass"];} ?>" placeholder="Password *"><br><br> Remember me :<input type="checkbox" name="chk">

        <br><br>

        <input type="submit" name="log" value="Login">

</form>

    </center>

</body>

</html>