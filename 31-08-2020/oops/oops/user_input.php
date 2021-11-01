<?php
if(isset($_POST["sub"]))
{


class add
{
    public function addition()
    {   
        $a=$_POST["n1"];
        $b=$_POST["n2"];
        $c=$a+$b;
        echo "Additions is :".$c."<br>";
    }
}

class subs extends add
{
    public function substraction()
    {    $a=$_POST["n1"];
         $b=$_POST["n2"];
        $c=$a-$b;
        echo "Substractions is :".$c."<br>";
    }

}

class mult extends subs
{
    public function multiplication()
    {  $a=$_POST["n1"];
        $b=$_POST["n2"];
          $c=$a*$b;
        echo "Multiplications is :".$c."<br>";
    }

}

class div extends mult
{
    public function division()
    {   
        $a=$_POST["n1"];
        $b=$_POST["n2"];
        $c=$a/$b;
        echo "Divions is :".$c."<br>";
    }

}


$obj=new div();
$obj->addition();
$obj->substraction();
$obj->multiplication();
$obj->division();


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
    <form method="POST">

        Enter a Values :<input type="text" name="n1" required><br><br>
        
        Enter b Values :<input type="text" name="n2" required><br><br>

        
        <input type="submit" name="sub" required><br><br>
   
    </form>
</center>    
</body>
</html>
