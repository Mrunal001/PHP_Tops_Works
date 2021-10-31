<?php
session_start();
if(isset($_POST["sub"]) && isset($_POST["log"]))
{
    $log=$_POST["log"];

    $uname=$_POST["uname"];
    
    $pass=$_POST["pass"];

    if($log=='maulik' && $pass=='m123')

    {
         $_SESSION["uname"]=$_POST["uname"];

         echo "<h2 align='center' style='background-color:green; color:white; padding:15px; margin-top:1%; width:80%; margin-left:10%'>You are Logged In Successfully <b style='margin-left:5%'>&times;</b></h2>";
         header('refresh:3,multi_welcome.php');
    

    }

    elseif($log=='brijesh' && $pass=='b123')
{
   
    $_SESSION["uname"]=$_POST["uname"];

    echo "<h2 align='center' style='background-color:green; color:white; padding:15px; margin-top:1%; width:80%; margin-left:10%'>You are Logged In Successfully <b style='margin-left:5%'>&times;</b></h2>";
    header('refresh:3,multi_welcome.php');


}



elseif($log=='ankita' && $pass=='a123')
{
    
         $_SESSION["uname"]=$_POST["uname"];

    echo "<h2 align='center' style='background-color:green; color:white; padding:15px; margin-top:1%; width:80%; margin-left:10%'>You are Logged In Successfully <b style='margin-left:5%'>&times;</b></h2>";
    header('refresh:3,multi_welcome.php');


}


    else

    {


        
        echo "<h2 align='center' style='background-color:red; color:white; padding:15px; margin-top:1%; width:80%; margin-left:10%'>Your Email wrong Try again <b style='margin-left:5%'>&times;</b></h2>";
        header('refresh:3,multi_login.php');
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
    <style>

        form
        {

            width:350px;
            height:300px;
            background-color: brown;
            padding:25px;
            color:white;
            font-size:20px;

        }

        input,select
        {

            width: 250px;
            height: 35px;
        }
        </style>
</head>
<body bgcolor="lightblue">
<center>    
<h1 align="center">Login</h1>
    <hr>
    <form method="POST">
        Login As <br><select name="log" required>
          
          <option value="">----select Login As----</option>

          <option value="maulik">Developer</option>
          
          <option value="brijesh">Faculty</option>
          
          <option value="ankita">Manager</option>
        
    </select>
        <br><br>
        

        Enter Username :<input type="text" name="uname" placeholder="Username *" required><br><br>


        Enter Password :<input type="password" name="pass" placeholder="Password *" required><br><br>

        <input type="submit" name="sub" value="Login >>" style="width:35%">
        <input type="reset" name="res" value="Reset >>"  style="width:35%">
    </form>
</center>
</body>
</html>