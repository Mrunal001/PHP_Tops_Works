<?php
trait a
{
    public function test()
    {
      
        echo "sanjay"."<br>";


    }
}

trait b
{

     public function test1()
     {

        echo "maulik"."<br>";
     }


    }

  trait c 
  {
      public function test2()
      {
          echo "Mrunal"."<br>";
      }
  } 


  class d
  {

    use a,b,c;

  }

  $obj=new d();
  $obj->test();
  $obj->test1();
  $obj->test2();
?>

