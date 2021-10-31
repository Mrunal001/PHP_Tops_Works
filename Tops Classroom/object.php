<?php
class name
{
   public function display()
   {
       $names=array("Mrunal","sanjay","mohit","maulik","rashmin","mitesh");
       
       //print_r($names);

       foreach($names as $values)


       {

        echo "My Name is :".$values."<br>";
       }

   }

}

$ob=new name();
$ob->display();


?>