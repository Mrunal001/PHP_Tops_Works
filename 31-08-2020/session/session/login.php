<?php
session_start();
if(isset($_POST["sub"]))
{
   
    $em=$_POST["em"];
    $pass=$_POST["pass"];

    if($em=='maulik@gmail.com' && $pass=='m123')

    {
         $_SESSION["em"]=$_POST["em"];
         echo "<h2 align='center' style='background-color:green; color:white; padding:15px; margin-top:1%; width:80%; margin-left:10%'>You are Logged In Successfully <b style='margin-left:5%'>&times;</b></h2>";
         header('refresh:3,welcome.php');
    

    }

    else

    {


        
        echo "<h2 align='center' style='background-color:red; color:white; padding:15px; margin-top:1%; width:80%; margin-left:10%'>Your Email wrong Try again <b style='margin-left:5%'>&times;</b></h2>";
        header('refresh:3,login.php');
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
            height:250px;
            background-color: brown;
            padding:25px;
            color:white;
            font-size:20px;

        }

        input
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
        Enter Email :<input type="text" name="em" placeholder="Email *" required><br><br>
        
        Enter Password :<input type="password" name="pass" placeholder="Password *" required><br><br>

        <input type="submit" name="sub" value="Login >>">
        
    </form>
</center>
</body>
</html>