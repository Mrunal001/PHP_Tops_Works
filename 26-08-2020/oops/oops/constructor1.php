<?php
class A
{
   public function A()
   {
      
     $name="hello i am brijesh"."<br>";
     echo $name;



   }

}

class B extends A
{
   public function test()

   {
            $name1="My name is Rajesh";
            echo $name1;
   }   
  

}

$obj=new B();
$obj->test();
?>