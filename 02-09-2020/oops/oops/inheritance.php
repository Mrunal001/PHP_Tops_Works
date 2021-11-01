<?php
// <!-- class A
// class B -->
class A
{
   public function test()

   {
        
      $name="Brijesh"."<br>";
      echo $name;

   }

}

class B extends A
{
  public function test1()

  {

      $name1="Sanjay";
      echo $name1;
  }


}
$obj=new B();
$obj->test();
$obj->test1();
?>