<?php
if(isset($_POST["log"]))

{

    $e=$_POST["em"];
    
    $p=$_POST["pass"];

    if($e=='b@gmail.com' && $p=='b123')

    {
       
        echo "<script>
        
        alert('You are Logged In Succfully')
        window.location='welcome.php';
        
        </script>";
     
    }

    else

    {

        echo "<script>
        
        alert('Your email and password are Incorect try again')
        window.location='login_script.php';
        
        </script>";
     

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
     <h2>Login</h2>
      <form method="POST">
          Enter Email* :<input type="text" name="em" placeholder="Email *" required><br><br>
          
          Enter Password* :<input type="password" name="pass" placeholder="Password *" required><br><br>

          
          <input type="submit" name="log" value="Login">
      </form> 

    </center>
    
</body>
</html>