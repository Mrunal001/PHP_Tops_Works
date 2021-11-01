<?php
class name
{
   public function display()
   {
       $a=10;
       $b=20;
       $a=$a+$b;  //$a=30
       $b=$a-$b;  //30-20 =>b=10
       $a=$a-$b;

       echo "after swap a Values is :".$a."and b vaues is :".$b;


   }

}

$ob=new name();
$ob->display();


?>