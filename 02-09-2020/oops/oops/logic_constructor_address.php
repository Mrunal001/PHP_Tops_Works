
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
        body
        {
            background-image: url('images/man5.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        div
        {
            width: 60%;
            /*background-color: rgba(0,0,255,0.2);*/
            padding:15px; 
            border:none;
            opacity: 0.5;  
            background-color:black !important;  
        }
        div:hover{
            opacity: 1;
            filter: grayscale(100%);
        }
        input,textarea
        {
            width: 200px;
            height: 40px;
        }
        
        #btn
        {
            width: 250px;

            height: 45px;
            background-color: red;
            color:white;
            font-size: 20px;
            border:none;
        }
        h1
        {
            color:red;
            text-shadow:1px 2px black;
        }
    </style>
</head>
<body bgcolor="lightblue">
    <center>
        <h1>Final Address</h1>

        <hr style="border:solid 2px red">
<div>
<?php
         if(isset($_POST["sub"]))
         {
             
            class A

            {
               public function __construct()
               {         


                $f=$_POST["fname"];
                $l=$_POST["lname"];
                $m=$_POST["mob"];
                $e=$_POST["em"];
                $add=$_POST["add"];
                

                echo "<h2 align='center' style='color:white'>Firstname :$f</h2>"."<br>";
                
                echo "<h2 align='center' style='color:white'>Lastname:$l</h2>"."<br>";
                
                echo "<h2 align='center' style='color:white'>$m</h2>"."<br>";
                
                echo "<h2 align='center' style='color:white'>$e</h2>"."<br>";
                
                echo "<h2 align='center' style='color:white'>$add</h2>"."<br>";






               }


            }


           $obj=new A();



         }


         ?>



        </div>     
    </body>
    </html>
        