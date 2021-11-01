<?php
class name
{
   public function display()
   {
       $names=array("Mrunal","sanjay","mohit","maulik","rashmin","mitesh");
        
        if(in_array("mitesh",$names))
        {
          
            echo "Available";

        }

        else

        {

            echo "Not Avaialable";
        }
     
   }

}

$ob=new name();
$ob->display();


?>