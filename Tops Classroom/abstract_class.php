<?php
abstract class A
{
  public function test()

  {
       $name="Hello i am Abstract class"."<br>";
       echo $name;

  }

}

class B extends A

{

    public function test1()

    {
         $name="Hello i am Abstract class and happy to used";
         echo $name;
  
    }

}
$obj=new B();
$obj->test();
$obj->test1();
